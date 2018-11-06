<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Home\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Buyoffer;
use App\Models\Admin\Advertise;//前台广告位模型,后台可管理
use App\Models\Admin\Column;//用到了栏目

use App\Models\Sup\Sup;   //四个供应商推荐表
use App\Models\Sup\Server;//四个供应商推荐表
use App\Models\Sup\Active;//四个供应商推荐表
use App\Models\Sup\Credit;//四个供应商推荐表

use App\Models\Admin\Articles;//文章
use App\Models\Admin\Label;//标签
use App\Models\Home\Comment;//评论

class NewhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *type:采购商供应商类型; big是广告大小;status是广告状态
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //因为小图的位置只有六个位置,然后一个地方放三个
        //处理小图 供应商 广告数据
        $data4=Advertise::where('status','1')->where('type','1')->where('big','1')->get();
        //处理小图 采购商 广告数据
        $data5=Advertise::where('status','1')->where('type','2')->where('big','1')->get();


        //处理招商数据
        $data2=Buyoffer::orderBy('id','desc')->get();
        $data3=Buyoffer::orderBy('id','asc')->get();
        $buyinfo=Buyoffer::orderBy('id','asc')->limit(3)->get();//


        //分配顶级栏目
        //$firstlanmu=Column::where('pid','0')->get();
        ///,'firstlanmu'=>$firstlanmu
        
        //处理四种供应商推荐位置
        $server=Server::limit(3)->get()->toArray();
        $sup   =   Sup::limit(3)->get()->toArray();
        $credit=Credit::limit(3)->get()->toArray();
        $active=Active::limit(3)->get()->toArray();
       /* echo '<pre>';
        var_dump($server,$sup,$credit,$active);
        dd(0);*/
        
        return view('home.newindex',['data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'buyinfo'=>$buyinfo,'server'=>$server,'sup'=>$sup,'credit'=>$credit,'active'=>$active]);
    }

    /**
     * Show the form for creating a new resource.
     *前台全球贸易(Global-Trade)简称gt
     * @return \Illuminate\Http\Response
     */
    public function gt(Request $request)
    {
        return view('home.gt');
    }

    /**
     * Show the form for creating a new resource..
     *前台国内贸易(China-Trade)简称ct
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function ct(Request $request)
    {
        return view('home.ct');
    }

      /**
     * Show the form for creating a new resource.
     *前台招投标服务(tender 投标)简称td
     * @return \Illuminate\Http\Response
     */
    public function td(Request $request)
    {
        return view('home.td');
    }

      /**
     * Show the form for creating a new resource.
     *前台会员发展(Member Development)
     * @return \Illuminate\Http\Response
     */
    public function md(Request $request)
    {
        return view('home.md');
    }  

      /**
     * Show the form for creating a new resource.
     *前台货币换算器(Currency converter)
     * @return \Illuminate\Http\Response
     */
    public function cc(Request $request)
    {
        return view('home.cc');
    } 
       /**
     * Show the form for creating a new resource.
     *前台集客
     * @return \Illuminate\Http\Response
     */
    public function jk(Request $request)
    {
        return view('home.jk');
    }
    public function about(Request $request)
    {
        return view('home.newabout');
    }

         /**
     * Show the form for creating a new resource.
     *前台联系我们()
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        return view('home.newcontact');
    }      
    /**
     * Show the form for creating a new resource.
     *前台招贤纳士
     * @return \Illuminate\Http\Response
     */
    public function job(Request $request)
    {
        return view('home.newjob');
    }     
     /**
     * Show the form for creating a new resource.
     *前台排名推广
     * @return \Illuminate\Http\Response
     */
    public function rank(Request $request)
    {
        return view('home.newrank');
    }     
     /**
     * Show the form for creating a new resource.
     *前台使用协议
     * @return \Illuminate\Http\Response
     */
    public function dns(Request $request)
    {
        return view('home.newdns');
    }  
    /**
     * Show the form for creating a new resource.
     *前台隐私条款
     * @return \Illuminate\Http\Response
     */
    public function copy(Request $request)
    {
        return view('home.newcopy');
    }

    //获取数据库费率的方法
    public function currency(Request $request)
    {
       // var_dump($request->n);
        //var_dump($request->count);
        $id=$request->n;
        $count=$request->count;
        $huilv=Currency::where('id',$id)->value('huilv');
        $name=Currency::where('id',$id)->value('name');
        $value=bcmul($count,$huilv,3);

        return  $value;


    }

    //接收主页分类栏目表发送的pid数据
    public function son(Request $req){
        //获取pid然后查column表的数据
        $pid= $req->pid;
        $son =Column::where('pid',$pid)->get();
        

        return $son;

    }

    //接收主页分类列表下广告的数据
    public function pic(Request $req){
        $pid=$req->pid;

       /* //属于查到的那五个pid=0的父类
        $res=Advertise::where('pid',$pid)->where('big','2')->get()->except('item','_token');*/
        $res=Column::where('pid',$pid)->limit(2)->get();
        return $res;
        
    }

    //findbuy() 前台用户搜索信息匹配买家
    public function findbuy(Request $request)
    {
        $key=$request->key;
        $datas=Buyoffer::where('project','like','%'.$key.'%')->limit(3)->get();
       return $datas;
    }

  /*  //findsell() 前台用户搜索信息匹配卖家
    public function findsell(Request $request)
    {
        $key=$request->key;
        $datas=Buyoffer::where('project','like','%'.$key.'%')->limit(3)->get();
       return $datas;
    }
*/
    //前台超级搜搜
    public function search(Request $req)
    {

        $key=$req->input('findbuy');
        $data=Buyoffer::where('project','like','%'.$key.'%')->paginate(5);
        var_dump($data);
        return view('home.search',['data'=>$data]);

       /*  //接收分页数据 默认为5
        $count=$request->input('count',5);

        //接收搜索数据 默认为空
        $for = $request -> input('for','');

        //以数组的形式接收分页和搜索数据，目的是返回给主页面
        $params=$request->all();

        //按照搜索查询数据，不传值全搜索。并进行分页
        $data = FriendlyLink:: where('title','like','%'.$for.'%')->paginate($count);

        //返回视图
        return view('home.search',['data'=>$data,'params'=>$params]);*/
    }



    //采购商发布采购信息路由
    public function buypublish()
    {

        return view('home.buypublish');
    }
    //供应商发布供应信息的路由
    public function subpublish()
    {

        return view('home.subpublish');
    }










    //三个商务热点
    public function hone()
    {
        return view('home.businesshot.one');
    } 

    public function htwo()
    {
        return view('home.businesshot.two');
    }

     public function hthree()
    {
        return view('home.businesshot.three');
    }
    //商务热点查看全部 就是查看商务热点栏目下的所有文章
    public function hmore()
    {
        // 获取文章数据,按添加时间倒序排序
        $data = Articles::where('lanmu',91)->orderBy('created_at','desc')->paginate(3);
        // 获取文章数据,按评论数量排序
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();
        // 获取一级栏目的数据
        $column = Column::where('pid',0)-> get();


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
        return view('home.businesshot.more',['data' => $data,'column' => $column,'hot' => $hot,'mylabels' => $mylabels,'rand' => $rand]);
    }
    //商务热点文章详情页控制器
    public function hmoredetail($id)
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
        return view('home.businesshot.moredetail', ['detail' => $detail,'prev'=>$prev,'next'=>$next,'comment'=>$comment,'collect'=>$collect,'hot' => $hot,'jubao' => $jubao1,'up' => $up1,'down' => $down1,'labels' => $labels]);
    } 























    //三个政策解读
    public function pone()
    {
        return view('home.businesspolicy.one');
    } 

    public function ptwo()
    {
        return view('home.businesspolicy.two');
    }

     public function pthree()
    {
        return view('home.businesspolicy.three');
    }


  
    //政策解读查看全部栏目下的文章
   public function pmore()
    {
        // 获取文章数据,按添加时间倒序排序
        $data = Articles::where('lanmu',90)->orderBy('created_at','desc')->paginate(3);
        // 获取文章数据,按评论数量排序
        $hot = Articles::orderBy('comment','desc') -> take(5) -> get();
        // 获取一级栏目的数据
        $column = Column::where('pid',0)-> get();


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
        return view('home.businesspolicy.more',['data' => $data,'column' => $column,'hot' => $hot,'mylabels' => $mylabels,'rand' => $rand]);
    }

     //政策解读文章详情页控制器
    public function pmoredetail($id)
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
       
        return view('home.businesspolicy.moredetail', ['detail' => $detail,'prev'=>$prev,'next'=>$next,'comment'=>$comment,'collect'=>$collect,'hot' => $hot,'jubao' => $jubao1,'up' => $up1,'down' => $down1,'labels' => $labels]);
    } 

   
   //前台点击产品分类表直接跳到产品的全部(详细)三级页面
   public function  thirdproduct() 
   {

        return view('home.product.third');


   }
 //前台产品二级级页面
   public function  secondproduct() 
   {

        return view('home.product.second');


   }

   //前台求购信息二级页面
   public function secondbuymessage()
   {
        return view('home.buymessage.second');
   }
   
  //前台求购信息三级页面
   public function thirdbuymessage()
   {
        return view('home.buymessage.third');
   }












   
}
