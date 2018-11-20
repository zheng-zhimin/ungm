<?php

namespace App\Http\Controllers\Order;

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

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //订单首页展示
        return view('/home/order/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收订单信息
        // $data = $requst
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
