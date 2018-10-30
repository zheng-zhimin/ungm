<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Home\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Buyoffer;
use App\Models\Admin\Advertise;//前台广告位模型,后台可管理
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

        return view('home.newindex',['data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5]);
    }

    /**
     * Show the form for creating a new resource.
     *前台全球贸易(Global-Trade)简称gt
     * @return \Illuminate\Http\Response
     */
    public function gt(Request $requset)
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
    public function td(Request $requset)
    {
        return view('home.td');
    }

      /**
     * Show the form for creating a new resource.
     *前台会员发展(Member Development)
     * @return \Illuminate\Http\Response
     */
    public function md(Request $requset)
    {
        return view('home.md');
    }  

      /**
     * Show the form for creating a new resource.
     *前台货币换算器(Currency converter)
     * @return \Illuminate\Http\Response
     */
    public function cc(Request $requset)
    {
        return view('home.cc');
    } 
       /**
     * Show the form for creating a new resource.
     *前台集客
     * @return \Illuminate\Http\Response
     */
    public function jk(Request $requset)
    {
        return view('home.jk');
    }

         /**
     * Show the form for creating a new resource.
     *前台货币换算器(Currency converter)
     * @return \Illuminate\Http\Response
     */
    public function about(Request $requset)
    {
        return view('home.newabout');
    }

    
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

   
}
