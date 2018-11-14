<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Sellerauthentication;
use App\Models\Home\Newusers;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
         //接收分页数据
        $count = $request -> input('count',5);
        $for = $request -> input('for','');
        $params = $request -> all();  // 以数组的形式接收所有的参数

        $data=Sellerauthentication::
        where('company','like','%'.$for.'%') -> paginate($count);

     
       
        return view('admin.seller.index',['title'=>'供应商申请企业资质列表状态','data'=>$data,'params' => $params]);

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

        $user=Sellerauthentication::destroy($id);
        //$user2=Usersdetail::where('uid',$id) -> delete();
        if($user ){
            return redirect('/admin/seller') -> with('success','删除成功');
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
        $user = Newusers::where('id',$id) -> first();
        $user ->identity=2;
        $user -> save();

        $mes=Sellerauthentication::where('uid',$id)->first();
        $mes->identity=2;
        $mes->save();
        if($user&&$mes){
            return redirect('/admin/seller') -> with('success','该企业资质成功认证');
        }else{
            return back()->with('error','操作失败');
        }

        
    }
     /**
     * 后台审核否定方法
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function no($id,Request $request)
    {
        $user = Newusers::where('id',$id) -> first();
        $user ->identity=1;
        $user -> save();

        $mes=Sellerauthentication::where('uid',$id)->first();
        $mes->identity=1;
        $mes->save();
        if($user&&$mes){
            return redirect('/admin/seller') -> with('success','该企业已取消认证');
        }else{
            return back()->with('error','操作失败');
        }
    }





}
