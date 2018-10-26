<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\FriendlyLink;
use App\Models\Admin\Articles;
use App\Models\Admin\Column;
use App\Models\Home\Comment;
use App\Models\Home\Report;
use App\Models\Admin\User;
use App\Models\Admin\Advertise;
use App\Models\Admin\Label;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //如果ajax没有传值，显示最新发布，如果有传值，显示相关文章内容
        if(!$request -> input('sousuocname')){

            $articles_new=Articles::orderBy('created_at','desc')->get();


        }else{

            $sousuocname = trim($request -> input('sousuocname'),' ');

            $lanmu = Column::where('cname','=',$sousuocname)->first();

            $lanmu_id = $lanmu['id'];
            $articles_new=Articles::where('lanmu','=',$lanmu_id)->orderBy('created_at','desc')->get();

            $arr_articles=[];

            foreach ($articles_new as $k=>$v){

                $arr_articles[]=$v;
            }

            $arr_articles= json_encode($arr_articles);


            echo $arr_articles;
            exit;

        }



        //热门推荐
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();

        //分配友链数据
        $friend=FriendlyLink::all();
        // 获取所有的标签
        $label = Label::get();
        $labels = array();
        foreach ($label as $k => $v) {
            array_push($labels,$v -> label);
        }
        $mylabel = implode(',', $labels);
        $mylabel = explode(',', $mylabel);
        $mylabel = array_unique($mylabel);
        $mylabel = array_flip($mylabel);
        $labelength = count($mylabel);
        if ($labelength < 15) {
            $mylabels = array_rand($mylabel,$labelength);
        }else{
            $mylabels = array_rand($mylabel,15);
        }
        $rand = rand(0,9);

        foreach ($articles_new as $key => $value) {
            $content = $value['content'];
            $preg = "/<img(.*?)>/i";
            $value['content'] = preg_replace($preg,'', $content);
            $value['content'] = strip_tags($value['content']);
        }
        // 获取轮播图数据
        $banner = Advertise::where('status',1) -> get();
        // 分配访客历史信息
        $visitor=DB::select('select distinct(uid) from history order by(loginTime) desc limit 15');
        $var=[];
        foreach ($visitor as $k => $v) {
            $uid=$v->uid;
            $src=DB::select('select profile from users where id='.$uid);

            $var[$k]=$src;
        }

        //获取文章导航的文章栏目

        $cname = Column::where('pid','0')->get();



       return view('home.index',['friend'=>$friend,'articles_new'=>$articles_new,'var'=>$var,'hot' => $hot,'cname'=>$cname,'mylabels' => $mylabels,'rand' => $rand,'banner'=>$banner]);
    }


    public function board()

    {
        return view('home.board');
    }
      public function about()
    {
        return view('home.about');
    }
    public function mood()
    {
        $data = Articles::orderBy('created_at','desc') -> paginate(5);


        foreach ($data as $k => $v) {
            $content=$v['content'];
            $preg = "/<img(.*?)>/i"     ;
            $v['content'] = preg_replace($preg,'', $content);
            $v['content'] = strip_tags($v['content']);
        }


        return view('home.mood',['data' => $data]);
    }

        public function article()
    {
        // 获取文章数据,按添加时间倒序排序
        $data = Articles::orderBy('created_at','desc')->paginate(10);
        // 获取文章数据,按评论数量排序
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();
        // 获取一级栏目的数据
        $column = Column::where('pid',0) -> get();


        // 获取所有的标签
        $label = Label::get();
        $labels = array();
        foreach ($label as $k => $v) {
            array_push($labels,$v -> label);
        }
        $mylabel = implode(',', $labels);
        $mylabel = explode(',', $mylabel);
        $mylabel = array_unique($mylabel);
        $mylabel = array_flip($mylabel);
        $labelength = count($mylabel);
        if ($labelength < 15) {
            $mylabels = array_rand($mylabel,$labelength);
        }else{
            $mylabels = array_rand($mylabel,15);
        }
        $rand = rand(0,9);


        // 遍历去除内容中的图片
        foreach ($data as $k => $v) {
            $content=$v['content'];
            $preg = "/<img(.*?)>/i"     ;
            $v['content'] = preg_replace($preg,'', $content);
            $v['content'] = strip_tags($v['content']);
        }

        // 显示模板,传递数据
        return view('home.article',['data' => $data,'column' => $column,'hot' => $hot,'mylabels' => $mylabels,'rand' => $rand]);
    }


    public function articles($id)
    {
        // 获取栏目ID等于传递ID的文章数据,10篇文章每页
        $data = Articles::where('lanmu',$id) -> orderBy('created_at','desc') -> paginate(10);
        // 获取文章数据,按评论数量排序
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();
        // 获取一级栏目的数据
        $column = Column::where('pid',0) -> get();
        // 获取所有的标签
        $label = Label::get();
        $labels = array();
        foreach ($label as $k => $v) {
            array_push($labels,$v -> label);
        }
        $mylabel = implode(',', $labels);
        $mylabel = explode(',', $mylabel);
        $mylabel = array_unique($mylabel);
        $mylabel = array_flip($mylabel);
        $labelength = count($mylabel);
        if ($labelength < 15) {
            $mylabels = array_rand($mylabel,$labelength);
        }else{
            $mylabels = array_rand($mylabel,15);
        }
        $rand = rand(0,9);
        // 遍历去除内容中的图片
        foreach ($data as $k => $v) {
            $content=$v['content'];
            $preg = "/<img(.*?)>/i"     ;
            $v['content'] = preg_replace($preg,'', $content);
            $v['content'] = strip_tags($v['content']);
        }
        // 显示模板,传递数据
        return view('home.article',['data' => $data,'column' => $column,'hot' => $hot,'mylabels' => $mylabels,'rand' => $rand]);
    }

     public function articledetail($id)
    {
        // 获取该文章的评论信息,按添加时间倒序排序,每10条一页
        $comment = Comment::where('aid',$id)->orderby('created_at','desc')->paginate(10);
        $cid = array();
        foreach ($comment as $key => $value) {
            array_push($cid,$value['id']);
        }
        // 获取该文章的标签
        if ($label = Label::where('aid',$id) -> first()) {
            $label = Label::where('aid',$id) -> first() -> label;
            $labels = explode(',',$label);
        }else{
            $labels = array();
        }


        // 获取文章数据,按评论数量排序
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();
        // 遍历去除评论内容中的html代码
        foreach ($comment as $k => $v) {
            $comment[$k] -> content = strip_tags($comment[$k] -> content);
        }
        // 获取登录用户是否收藏该文章
        $collect=DB::table('collect')->where('aid',$id)->where('uid',session('homeuser')['id'])->first();
        // 获取当前用户举报的评论数据
        $jubao = DB::table('report') -> where('uid',session('homeuser')['id']) ->get();
        $jubao1 = array();
        foreach ($jubao as $key => $value) {
            array_push($jubao1,$value -> cid);
        }


        // 获取当前用户顶过的评论数据
        $up = DB::table('like') -> where('uid',session('homeuser')['id']) -> where('status','1') ->get();
        $up1 = array();
        foreach ($up as $key => $value) {
            array_push($up1,$value -> cid);
        }
        // 获取当前用户踩过的评论数据
        $down = DB::table('like') -> where('uid',session('homeuser')['id']) -> where('status','2') ->get();
        $down1 = array();
        foreach ($down as $key => $value) {
            array_push($down1,$value -> cid);
        }


        // 上一篇下一篇文章
        $detail=Articles::find($id);
        $previd= Articles::where('id', '<', $id)->max('id');
        $prev = Articles::find($previd);
        $nextid=Articles::where('id', '>', $id)->min('id');
        $next = Articles::find($nextid);
        // 显示模板,传递数据
        return view('home.articledetail', ['detail' => $detail,'prev'=>$prev,'next'=>$next,'comment'=>$comment,'collect'=>$collect,'hot' => $hot,'jubao' => $jubao1,'up' => $up1,'down' => $down1,'labels' => $labels]);
    }

    public function comment(Request $request,$id)
    {
        // 数据合法性验证
        $this -> validate($request,[
                'content' => 'required',
            ],[
                'content.required' => '评论内容不能为空',
            ]);
        // 获取传递过来的评论内容
        $content = $_GET['content'];
        // 添加评论到数据库
        $comment = new Comment;
        $comment -> uid = session('homeuser') -> id;
        $comment -> content = $content;
        $comment -> aid = $id;
        $comment -> pid = 0;
        $res1 = $comment -> save();
        $cid = $comment -> id;
        // 修改文章的评论数量
        $articles = Articles::where('id',$id) -> first();
        $articles -> comment = \DB::table('comment') -> where('aid', $id) -> count();
        $res2 = $articles -> save();
        // 判断结果返回数据
        if ($res1 && $res2) {
            $arr = array();
            $arr['content'] = $content;
            $arr['id'] = $cid;
            $arr['profile'] = session('homeuser') -> profile;
            $arr['uname'] = session('homeuser') -> username;
            $arr['created_at'] = date('Y-m-d H:i:s',time());
            return json_encode($arr);
        }else{
            $arr = array();
            return json_encode($arr);
        }
    }

    public function recomment(Request $request,$id)
    {
        // 数据合法性验证
        $this -> validate($request,[
                'content' => 'required',
            ],[
                'content.required' => '评论内容不能为空',
            ]);
        // 获取传递过来的回复内容
        $content = $_GET['content'];
        // 获取回复的PID
        $pid = $_GET['pid'];
        // 添加回复到数据库
        $comment = new Comment;
        $comment -> uid = session('homeuser') -> id;
        $comment -> content = $content;
        $comment -> aid = $id;
        $comment -> pid = $pid;
        $res1 = $comment -> save();
        $cid = $comment -> id;
        // 修改文章的评论数量
        $articles = Articles::where('id',$id) -> first();
        $articles -> comment = \DB::table('comment') -> where('aid', $id) -> count();
        $res2 = $articles -> save();
        // 判断结果返回数据
        if ($res1 && $res2) {
            $arr = array();
            $arr['content'] = $content;
            $arr['id'] = $cid;
            $arr['profile'] = session('homeuser') -> profile;
            $arr['uname'] = session('homeuser') -> username;
            $arr['created_at'] = date('Y-m-d H:i:s',time());
            return json_encode($arr);
        }else{
            $arr = array();
            return json_encode($arr);
        }
    }

    public function myreport(Request $request,$id)
    {
        $cid = $_GET['cid'];
        $uid = session('homeuser') -> id;
        $ctime = date('Y-m-d H:i:s', time());
        $jubao = Report::where('uid',$uid) -> where('cid',$cid) -> first();
        if ($jubao) {
            echo '3';
            exit;
        }
        $res = \DB::table('report')->insert(['uid' => $uid,'cid' => $cid, 'aid' => $id,
            'ctime' => $ctime]);
        if ($res) {
            echo '1';
        }else{
            echo '2';
        }
    }

    public function myup(Request $request,$id)
    {
        $cid = $_GET['cid'];
        $uid = session('homeuser') -> id;
        $res = \DB::table('like')->insert(['uid' => $uid,'cid' => $cid, 'status' => 1]);
        if ($res) {
            echo '1';
        }else{
            echo '2';
        }
    }

    public function mydown(Request $request,$id)
    {
        $cid = $_GET['cid'];
        $uid = session('homeuser') -> id;
        $res = \DB::table('like')->insert(['uid' => $uid,'cid' => $cid, 'status' => 2]);
        if ($res) {
            echo '1';
        }else{
            echo '2';
        }
    }

    public function label($label)
    {
        $data = Label::where('label','like','%'.$label.'%') -> orderBy('created_at','desc') -> paginate(10);
        // 获取文章数据,按评论数量排序
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();
        // 获取一级栏目的数据
        $column = Column::where('pid',0) -> get();


        // 获取所有的标签
        $label = Label::get();
        $labels = array();
        foreach ($label as $k => $v) {
            array_push($labels,$v -> label);
        }
        $mylabel = implode(',', $labels);
        $mylabel = explode(',', $mylabel);
        $mylabel = array_unique($mylabel);
        $mylabel = array_flip($mylabel);
        $labelength = count($mylabel);
        if ($labelength < 15) {
            $mylabels = array_rand($mylabel,$labelength);
        }else{
            $mylabels = array_rand($mylabel,15);
        }
        $rand = rand(0,9);


        // 遍历去除内容中的图片
        foreach ($data as $k => $v) {
            $content=$v['content'];
            $preg = "/<img(.*?)>/i"     ;
            $v['content'] = preg_replace($preg,'', $content);
            $v['content'] = strip_tags($v['content']);
        }
        // 显示模板,传递数据
        return view('home.label',['data' => $data,'column' => $column,'hot' => $hot,'mylabels' => $mylabels,'rand' => $rand]);
    }

     public function logout()
    {
         session()->flush();
         session(['homeFlag'=>false]);
         return redirect('/');
    }

    public function daohang(Request $request)
    {




        //如果ajax没有传值，显示最新发布，如果有传值，显示相关文章内容
        if(!$request -> input('sousuocname')){

            $articles_new=Articles::orderBy('created_at','desc')->get();


        }else{

            $sousuocname = trim($request -> input('sousuocname'),' ');

            $lanmu = Column::where('cname','=',$sousuocname)->first();

            $lanmu_id = $lanmu['id'];
            $articles_new=Articles::where('lanmu','=',$lanmu_id)->orderBy('created_at','desc')->get();

            $arr_articles=[];

            foreach ($articles_new as $k=>$v){

                $arr_articles[]=$v;
            }

            $arr_articles= json_encode($arr_articles);


            echo $arr_articles;
            exit;

        }



        //热门推荐
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();

        //分配友链数据
        $friend=FriendlyLink::all();

        foreach ($articles_new as $key => $value) {
            $content = $value['content'];
            $preg = "/<img(.*?)>/i"     ;
            $value['content'] = preg_replace($preg,'', $content);
            $value['content'] = strip_tags($value['content']);
        }
        // 分配访客历史信息
        $visitor=DB::select('select distinct(uid) from history order by(loginTime) desc limit 15');
        $var=[];
        foreach ($visitor as $k => $v) {
            $uid=$v->uid;
            $src=DB::select('select profile from users where id='.$uid);

            $var[$k]=$src;
        }

        //获取文章导航的文章栏目

        $cname = Column::where('pid','0')->get();



        return view('home.index',['friend'=>$friend,'articles_new'=>$articles_new,'var'=>$var,'hot' => $hot,'cname'=>$cname]);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
