<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Home\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Buyoffer;
use App\Models\Admin\Selloffer;
use App\Models\Admin\Advertise;//前台广告位模型,后台可管理
use App\Models\Admin\Column;//用到了栏目

use App\Models\Sup\Sup;   //四个供应商推荐表
use App\Models\Sup\Server;//四个供应商推荐表
use App\Models\Sup\Active;//四个供应商推荐表
use App\Models\Sup\Credit;//四个供应商推荐表

use App\Models\Admin\Articles;//文章
use App\Models\Admin\Label;//标签
use App\Models\Home\Comment;//评论

use Session;
use App\Models\Admin\Ungmuserdetail;
use App\Models\Home\Address;
use App\Models\Home\Newusers;
use App\Models\Admin\Sellerauthentication;//认证表


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
        $data2=Buyoffer::orderBy('id','desc')->where('status','1')->get();
        $data3=Buyoffer::orderBy('id','asc')->where('status','1')->get();
        $buyinfo=Buyoffer::orderBy('id','asc')->where('status','1')->limit(3)->get();//



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

     /**
     * Show the form for creating a new resource.
     *前台隐私条款
     * @return \Illuminate\Http\Response
     */
     public function adv(Request $request)
     {
        return view('home.newadv');
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
    public function searchbuy(Request $req)
    {

        $key=$req->input('findbuy');

        
        $data=Buyoffer::where('project','like','%'.$key.'%')->paginate(5);
        //var_dump($data);
        return view('home.search.searchbuy',['data'=>$data]);

       /*  //接收分页数据 默认为5
        $count=$request->input('count',5);

        //接收搜索数据 默认为空
        $for = $request -> input('for','');

        //以数组的形式接收分页和搜索数据，目的是返回给主页面
        $params=$request->all();

        //按照搜索查询数据，不传值全搜索。并进行分页
        $data = FriendlyLink:: where('title','like','%'.$for.'%')->paginate($count);
         <div class="page dataTables_paginate paging_full_numbers">
                            {!! $data->render() !!}
                        </div>
        //返回视图
                        return view('home.search',['data'=>$data,'params'=>$params]);*/
       }

            public function searchsell(Request $req)
            {

                $key=$req->input('findsell');
                $data=Selloffer::where('project','like','%'.$key.'%')->paginate(5);
                //var_dump($data);
                return view('home.search.searchsell',['data'=>$data]);
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
                        $data = Articles::where('lanmu',91)->orderBy('created_at','desc')->paginate(10);
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
                        $data = Articles::where('lanmu',90)->orderBy('created_at','desc')->paginate(10);
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

                    
                    
 //前台产品二级级页面
                    public function  secondproduct() 
                    {

                        return view('home.product.second');


                    }
    //前台点击产品分类表直接跳到产品的全部(详细)三级页面
                    public function  thirdproduct() 
                    {
                     $column = Column::where('pid',28)->get()->toArray();
                     
                     return view('home.product.third',['column'=>$column]);
                     

                 }
                 public function  third1product() 
                 {

                   $column = Column::where('pid',47)->get()->toArray();
                   
                   return view('home.product.third1',['column'=>$column]);
                   


               } 
               public function  third2product() 
               {

                $column = Column::where('pid',58)->get()->toArray();
                
                return view('home.product.third2',['column'=>$column]);
                


            }  
            public function  third3product() 
            {

                $column = Column::where('pid',73)->get()->toArray();
                
                return view('home.product.third3',['column'=>$column]);
                


            } 
            public function  third4product() 
            {

                $column = Column::where('pid',84)->get()->toArray();
                
                return view('home.product.third4',['column'=>$column]);
                


            }
    //查找分配供应信息列表
            public function productlist(Request $req)
            {
                $id=$req->id;
        //relation字段1是供应产品信息;2是采购信息
                $data=Articles::where('lanmu',$id)->where('relation',1)->get();

                return $data;

            }

   //四级供应商产品传递id显示详情的页面
            public function productfour(Request $req)
            {
              $id=$req->id;
              $data=Articles::where('id',$id)->get()->toArray();
      //少一个链表查这个人的电话之类的信息
             
              return view('home.product.four',['data'=>$data['0'] ]);

          }

   //四级采购信息商产品传递id显示详情的页面
          public function buymessagefour(Request $req)
          {
                //$ip = $_SERVER['REMOTE_ADDR'];
               
              $id=$req->id;
              $data=Buyoffer::find($id);
              $uid=$data['uid'];
              $times=$data['times'];
              if( Session::has('homeuser') )
              {
                  $seeid=Session('homeuser')->id;
              
                  if($uid!==$seeid){
                     $data-> times = $times+1;
                    $data->save();
                  }
              }
             
             
              $renzheng=Sellerauthentication::where('uid',$uid)->first();
              $renzheng=$renzheng['identity'];
              $userdata=Newusers::where('id',$uid)->first();
             $userdetaildata=Ungmuserdetail::where('uid',$uid)->first();
             $addressdata=Address::where('uid',$uid)->where('defaultstatus','1')->first();


            //少一个链表查这个人的电话之类的信息

              return view('home.buymessage.four',['data'=>$data ,'userdata'=>$userdata,'userdetaildata'=>$userdetaildata,'addressdata'=>$addressdata,'renzheng'=>$renzheng]);

          }

          //以文章列表找到的信息
          //四级采购信息商产品传递id显示详情的页面
          public function buymessagefourart(Request $req)
          {
              $id=$req->id;
              $data=Articles::where('id',$id)->first();
              //dd($data);
      //少一个链表查这个人的电话之类的信息
              $uid=$data['uid'];
              $times=$data['times'];
              if( Session::has('homeuser') )
              {
                  $seeid=Session('homeuser')->id;
              
                  if($uid!==$seeid){
                     $data-> times = $times+1;
                    $data->save();
                  }
              }
              
              return view('home.buymessage.fourart',['data'=>$data ]);

          }











   //前台求购信息二级页面
          public function secondbuymessage()
          {
            return view('home.buymessage.second');
        }
        
  //前台求购信息三级页面
  //工业品
        public function thirdbuymessage()
        {
            $column = Column::where('pid',28)->get()->toArray();
            
            return view('home.buymessage.third',['column'=>$column]);
        }

//原材料
        public function third1buymessage()
        {
         $column = Column::where('pid',47)->get()->toArray();
         
         return view('home.buymessage.third1',['column'=>$column]);
         
     }
   //消费品
     public function third2buymessage()
     {
         $column = Column::where('pid',58)->get()->toArray();
         
         return view('home.buymessage.third2',['column'=>$column]);
     } 
   //绿色食品
     public function third3buymessage()
     {
        $column = Column::where('pid',73)->get()->toArray();
        
        return view('home.buymessage.third3',['column'=>$column]);
    }
   //商务服务
    public function third4buymessage()
    {
     $column = Column::where('pid',84)->get()->toArray();
     
     return view('home.buymessage.third4',['column'=>$column]);
 } 
  //查找分配采购信息列表
 public function buymessagelist(Request $req)
 {
    $id=$req->id;
        //relation字段1是供应产品信息;2是采购信息
    $data=Articles::where('lanmu',$id)->where('relation',2)->get();

    return $data;

}




   //国内贸易->会议展示全部栏目下的文章
public function meetinglist()
{
         // 获取文章数据,按添加时间倒序排序
    $data = Articles::where('lanmu',92)->orderBy('created_at','desc')->paginate(10);
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
    return view('home.meeting.list',['data' => $data,'column' => $column,'hot' => $hot,'mylabels' => $mylabels,'rand' => $rand]);
    
}
    //国内贸易->会议展示文章详情
public function meetingdetail($id)
{
         // 获取该文章的评论信息,按添加时间倒序排序,每10条一页
    $comment = Comment::where('aid',$id)->orderby('created_at','desc')->paginate(5);
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
    
    return view('home.meeting.detail', ['detail' => $detail,'prev'=>$prev,'next'=>$next,'comment'=>$comment,'collect'=>$collect,'hot' => $hot,'jubao' => $jubao1,'up' => $up1,'down' => $down1,'labels' => $labels]);
    
    
    
    
}          

   //显示个人中心的控制器(信息管理)
public function usercenter()
{
        //从永久Session中拿出缓存的用户账号密码id信息
    $user=Session::get('homeuser');
    $id=$user->id;
    $username=$user->username;
    $phone=$user->phone;

    //查一下用户表里这个人的企业认证身份1企业未认证,2是认证
    $identity=Newusers::where('id',$id)->get()->toArray();
    $identity=$identity[0]['identity'];
    //dd($identity);
        //关联用户详情表查询所查字段头像地址邮箱等信息(随便查所需要的字段)  
    $userdetail=Ungmuserdetail::where('uid',$id)->get();
    
        //供应发布动态
    $selloffer=Selloffer::where('uid',$id)->get();
       // dd($selloffer);
        //发布的采购信息
    $buyoffered = Buyoffer::where('uid',$id)->where('status','1')->get();
    $buyoffering = Buyoffer::where('uid',$id)->where('status','0')->get();
    $buyofferun = Buyoffer::where('uid',$id)->where('status','2')->get();
    $buyofferold=Buyoffer::where('uid',$id)->where('status','3')->get();
        // dd($buyoffer);
    $counted = Buyoffer::where('uid',$id)->where('status','1')->count();
    $counting = Buyoffer::where('uid',$id)->where('status','0')->count();
    $countun = Buyoffer::where('uid',$id)->where('status','2')->count();
    $countold = Buyoffer::where('uid',$id)->where('status','3')->count();
        //dd($user);
    
        //dd($id);
    return view('home.newuserinfo.newindex',['user'=>$user,
        'userdetail'=>$userdetail,
        'buyoffered'=>$buyoffered,
        'buyoffering'=>$buyoffering,
        'buyofferun'=>$buyofferun,
        'buyofferold'=>$buyofferold,
        'counted'=>$counted,
        'counting'=>$counting,
        'countun'=>$countun,
        'countold'=>$countold,
        'identity'=>$identity
    ]);
}

 //显示个人中心的控制器(信息管理)
public function usercentered()
{
        //从永久Session中拿出缓存的用户账号密码id信息
    $user=Session::get('homeuser');
    $id=$user->id;
    $username=$user->username;
    $phone=$user->phone;

    //查一下用户表里这个人的企业认证身份1企业未认证,2是认证
    $identity=Newusers::where('id',$id)->get()->toArray();
    $identity=$identity[0]['identity'];
    //dd($identity);
        //关联用户详情表查询所查字段头像地址邮箱等信息(随便查所需要的字段)  
    $userdetail=Ungmuserdetail::where('uid',$id)->get();
    
        //供应发布动态
    $selloffer=Selloffer::where('uid',$id)->get();
       // dd($selloffer);
        //发布的采购信息
    $buyoffered = Buyoffer::where('uid',$id)->where('status','1')->get();
    $buyoffering = Buyoffer::where('uid',$id)->where('status','0')->get();
    $buyofferun = Buyoffer::where('uid',$id)->where('status','2')->get();
    $buyofferold=Buyoffer::where('uid',$id)->where('status','3')->get();
        // dd($buyoffer);
    $counted = Buyoffer::where('uid',$id)->where('status','1')->count();
    $counting = Buyoffer::where('uid',$id)->where('status','0')->count();
    $countun = Buyoffer::where('uid',$id)->where('status','2')->count();
    $countold = Buyoffer::where('uid',$id)->where('status','3')->count();
        //dd($user);
    
        //dd($id);
    return view('home.newuserinfo.newindexed',['user'=>$user,
        'userdetail'=>$userdetail,
        'buyoffered'=>$buyoffered,
        'buyoffering'=>$buyoffering,
        'buyofferun'=>$buyofferun,
        'buyofferold'=>$buyofferold,
        'counted'=>$counted,
        'counting'=>$counting,
        'countun'=>$countun,
        'countold'=>$countold,
        'identity'=>$identity
    ]);
}

      //接收个人中心的数据(普通采购商的)
public function adduser(Request $request)
{
         $this->validate($request,[
            'project' => 'required',
            'price' => 'required',
            'descript' => 'required',
             'address'=> 'required',
             'count'=>'required',
             'img'=>'required',
            ],[
            'project.required' => '标题必填',
            'price.required' => '价格必须输入',
            'descript.required' => '详细描述必须输入',
            'address.required' => '地址必须填入',
            'count.required' => '数量必须填入',
            'img.required'=>'产品图片必须添加',
            ]);
         // echo(111);die;
            $user=Session::get('homeuser');
            $id=$user->id;
            $data = $request ->except('item','_token');
                //接收修改供应商信息
            $data = new Buyoffer;
          //修改数据库字段
           $data -> project = $request ->input('project');//招标项目名称
           $data -> price = $request ->input('price');//招标项目价格
           $data -> deadline = $request ->input('deadline') ? $request ->input('deadline') : '长期有效';
           //招标截至时间
           $data -> descript=$request->input('descript');
           $data -> count=$request->input('count');
           $data -> descript=$request->input('descript');
           $data -> lanmu=$request->input('lanmu');
           $data -> uid = $id;//
           $data-> published = date('Y-m-d H:i:s',time());

            /*  $data -> name = $request ->input('name');//招标人姓名
              $data -> zizhi = $request ->input('zizhi');//招标人资质
              $data -> address = $request ->input('address');//招标地址
              $data -> count = $request ->input('count');//招标数量
              $data -> xingzhi = $request ->input('xingzhi');//招标项目性质
              $data -> published = $request ->input('published');//招标开始时间
              $data -> status = $request ->input('status');//0就是未审核
              $data -> industry = $request ->input('industry');//行业 
              $data -> company = $request ->input('company');//公司
              $data -> lanmu = $request ->input('lanmu');//*/
              
            //处理上传的图片
              if($request -> hasFile('img')){
            //获取上传的图片
                $img = $request -> file('img');
            //获取后缀
                $ext = $img -> getClientOriginalExtension();
            //为图片起新的名字
                $temp_name = time().rand(1000,9999).'.'.$ext;
            //设置路径名称
                $dir_name = '/articles_heads/'.date('Ymd',time());
            //路径的拼接
                $img_dir = $dir_name.'/'.$temp_name;
            //图片上传
                $img -> move('.'.$dir_name,$temp_name);
            //把图片的路径存到数据中
                $data -> img = $img_dir;
            }

            //var_dump($data->img);

            //保存
            $data -> save();
            if($data){

                echo  "<script>alert('保存成功');window.location.href='/home/userinfo/indexed';</script>";

            }else{
                echo  "<script>alert('保存失败');window.location.href='/home/userinfo/indexed';</script>";
            }

}

              //接收个人中心的数据(采购+产品)
    public function adduser2(Request $request)
    {
        $category=$request->input('category');
        $kind=$request->input('kind');
        var_dump($category,$kind);
        dd(111);

        $this->validate($request,[
            'project' => 'required',
            'price' => 'required',
            'descript' => 'required',
             'address'=> 'required',
             'count'=>'required',
             'img'=>'required',
            ],[
            'project.required' => '标题必填',
            'price.required' => '价格必须输入',
            'descript.required' => '详细描述必须输入',
            'address.required' => '地址必须填入',
            'count.required' => '数量必须填入',
            'img.required'=>'产品图片必须添加',
            ]);
         // echo(111);die;
            $user=Session::get('homeuser');
            $id=$user->id;
            $data = $request ->except('item','_token');
                //接收修改供应商信息
            $data = new Buyoffer;
          //修改数据库字段
           $data -> project = $request ->input('project');//招标项目名称
           $data -> price = $request ->input('price');//招标项目价格
           $data -> deadline = $request ->input('deadline') ? $request ->input('deadline') : '长期有效';
           //招标截至时间
           $data -> descript=$request->input('descript');
           $data -> count=$request->input('count');
           $data -> descript=$request->input('descript');
           $data -> lanmu=$request->input('lanmu');
           $data -> uid = $id;//
           $data-> published = date('Y-m-d H:i:s',time());

            /*  $data -> name = $request ->input('name');//招标人姓名
              $data -> zizhi = $request ->input('zizhi');//招标人资质
              $data -> address = $request ->input('address');//招标地址
              $data -> count = $request ->input('count');//招标数量
              $data -> xingzhi = $request ->input('xingzhi');//招标项目性质
              $data -> published = $request ->input('published');//招标开始时间
              $data -> status = $request ->input('status');//0就是未审核
              $data -> industry = $request ->input('industry');//行业 
              $data -> company = $request ->input('company');//公司
              $data -> lanmu = $request ->input('lanmu');//*/
              
            //处理上传的图片
              if($request -> hasFile('img')){
            //获取上传的图片
                $img = $request -> file('img');
            //获取后缀
                $ext = $img -> getClientOriginalExtension();
            //为图片起新的名字
                $temp_name = time().rand(1000,9999).'.'.$ext;
            //设置路径名称
                $dir_name = '/articles_heads/'.date('Ymd',time());
            //路径的拼接
                $img_dir = $dir_name.'/'.$temp_name;
            //图片上传
                $img -> move('.'.$dir_name,$temp_name);
            //把图片的路径存到数据中
                $data -> img = $img_dir;
            }

            //var_dump($data->img);

            //保存
            $data -> save();
            if($data){

                echo  "<script>alert('保存成功');window.location.href='/home/userinfo/indexed';</script>";

            }else{
                echo  "<script>alert('保存失败');window.location.href='/home/userinfo/indexed';</script>";
            }

        }


     //接收个人中心的数据(采购+产品的发布)
    public function addselleruser2(Request $request)
    {
        
        

        $this->validate($request,[
            'project' => 'required',
            'price' => 'required',
            'descript' => 'required',
             'address'=> 'required',
             'count'=>'required',
             'img'=>'required',
             'industry'=>'required',
             'company'=>'required',
            ],[
            'project.required' => '标题必填',
            'price.required' => '价格必须输入',
            'descript.required' => '详细描述必须输入',
            'address.required' => '地址必须填入',
            'count.required' => '数量必须填入',
            'img.required'=>'产品图片必须添加',
            'industry.required'=>'行业必须添加',
            'company.required'=>'公司名称必须添加',
            ]);
         // echo(111);die;
            $user=Session::get('homeuser');
            $id=$user->id;
            $data = $request ->except('item','_token');
                //接收修改供应商信息
            $data = new Buyoffer;
          //修改数据库字段
           $data -> project = $request ->input('project');//招标项目名称
           $data -> price = $request ->input('price');//招标项目价格
           $data -> deadline = $request ->input('deadline') ? $request ->input('deadline') : '长期有效';
           //招标截至时间
           $data -> descript=$request->input('descript');
           $data -> count=$request->input('count');
           $data -> descript=$request->input('descript');
           $data -> lanmu=$request->input('lanmu');
           $data -> uid = $id;//
           $data-> published = date('Y-m-d H:i:s',time());
           $data -> industry = $request ->input('industry');//行业 
           $data -> company = $request ->input('company');//公司

            /*  $data -> name = $request ->input('name');//招标人姓名
              $data -> zizhi = $request ->input('zizhi');//招标人资质
              $data -> address = $request ->input('address');//招标地址
              $data -> count = $request ->input('count');//招标数量
              $data -> xingzhi = $request ->input('xingzhi');//招标项目性质
              $data -> published = $request ->input('published');//招标开始时间
              $data -> status = $request ->input('status');//0就是未审核
              $data -> industry = $request ->input('industry');//行业 
              $data -> company = $request ->input('company');//公司
              $data -> lanmu = $request ->input('lanmu');//*/
              
            //处理上传的图片
              if($request -> hasFile('img')){
            //获取上传的图片
                $img = $request -> file('img');
            //获取后缀
                $ext = $img -> getClientOriginalExtension();
            //为图片起新的名字
                $temp_name = time().rand(1000,9999).'.'.$ext;
            //设置路径名称
                $dir_name = '/articles_heads/'.date('Ymd',time());
            //路径的拼接
                $img_dir = $dir_name.'/'.$temp_name;
            //图片上传
                $img -> move('.'.$dir_name,$temp_name);
            //把图片的路径存到数据中
                $data -> img = $img_dir;
            }

            //var_dump($data->img);

            //保存
            $data -> save();
            if($data){

                echo  "<script>alert('保存成功');window.location.href='/home/userinfo/indexed';</script>";

            }else{
                echo  "<script>alert('保存失败');window.location.href='/home/userinfo/indexed';</script>";
            }

        }






 //显示交易管理的方法
        public function transaction()
        {
            $id=Session::get('homeuser')->id;
            $address=Address::where('uid',$id)->get();
            $tiao=Address::where('uid',$id)->count();
            foreach ($address as $k=>$v){
                $fid = explode('-',$v['area']);
                $v->area=DB::table('china_area')->where('id',$fid[0])->first()->name;
                $v->city=DB::table('china_area')->where('id',$fid[1])->first()->name;
            }
            return view('home.newuserinfo.transaction',['address'=>$address,'tiao'=>$tiao]);
        }
   //个人中心账户管理
       public function account($id)
        {
            $onlyID=Newusers::where('id',$id)->first();
            $onlyID=$onlyID->code;
            $data=Ungmuserdetail::where('uid',$id)->first();
            $address = DB::table('china_area')->where('pid','=', '0')->get();

            return view('home.newuserinfo.account',['data'=>$data,'address'=>$address,'onlyID'=>$onlyID]);
        }




        
    }
