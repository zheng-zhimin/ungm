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



    //供应商发布产品
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




   
}
