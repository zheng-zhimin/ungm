<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Buyoffer;

class BuyofferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data=Buyoffer::all()->except('_token')->toArray();
        
        //echo '<pre>';
        //var_dump($data);
       
         //接收分页数据
        $count = $request -> input('count',5);
        $for = $request -> input('for','');
        $params = $request -> all();  // 以数组的形式接收所有的参数

        //$data=Buyoffer::
        //where('name','like','%'.$for.'%') -> paginate($count);
        return view('admin.buyoffer.index',['title'=>'采购商发布的采购信息列表状态','data'=>$data,'params' => $params]);

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
        //
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

        $user=Buyoffer::destroy($id);
        //$user2=Usersdetail::where('uid',$id) -> delete();
        if($user ){
            return redirect('/admin/buyoffer') -> with('success','删除成功');
        }else{
            return back() -> with('error','删除失败');
        }

    }


     /**
     * 后台审核通过方法
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function yes($id,Request $request)
    {
        $user = Buyoffer::where('id',$id) -> first();
        $user -> status=1;
        $user -> save();
        return redirect('/admin/buyoffer') -> with('success','该条发布的采购信息已成功发布');
    }
     /**
     * 后台审核否定方法
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function no($id,Request $request)
    {
        $user = Buyoffer::where('id',$id) -> first();
        $user -> status=0;
        $user -> save();
        return redirect('/admin/buyoffer') -> with('success','该条发布的采购信息已下架');
    }
   
}
