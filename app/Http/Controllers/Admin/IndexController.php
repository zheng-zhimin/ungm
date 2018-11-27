<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\History;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载后台页面
        return view('admin.index.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 查看登录历史记录
     */
    public function history(Request $request)
    {

        //接收分页数据 默认为5
        $count=$request->input('count',5);

        //接收搜索数据 默认为空
        $for = $request -> input('uid','');

        //以数组的形式接收分页和搜索数据，目的是返回给主页面
        $params=$request->all();

        if(empty($for)){
            $data = History::paginate($count);
        }else{
            $data = History::where('uid','like','%'.$for.'%')->paginate($count);
        }

        foreach ($data as $v){
            $v->username = \DB::table('users')->where('id','=',$v->uid)->first()->username;
        }
        $History = new History;
        $History->uid = $for;
        if($History){
            return view('admin.index.history',['data'=>$data,'History'=>$for,'params'=>$params]);
        }else{
            return view('admin.index.history',['data'=>$data,'params'=>$params]);
        }

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function writepwd($id)
    {

      
       if( session('adminUser') ){
            $id = $id;
        return view('admin.resetpwd.resetpwd',['id'=>$id,'title'=>'修改密码']);
         }
   
       

      

    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function resetpwd(Request $request,$id)
    {

       
        $oldpwd=$request->input('oldpwd');
        $newpwd=$request->input('newpwd');
        $confirmpwd=$request->input('confirmpwd');

        /*if($oldpwd==null || $newpwd==null || $confirmpwd==null)
        {
             return back()->withInput();
        }*/

        $user=User::where('id',$id)->first();

        $datapwd=$user->password;


        $res=Hash::check($oldpwd,$datapwd);
  
        if(!$res)
        {
            return back()->withInput();
        }

        if($confirmpwd!=$newpwd)
        {
            return back()->withInput();
        }

        $user->password=Hash::make($newpwd);
        $user->save();
        return redirect('/admin/login/jiuding/ruilu/index');

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
        //
    }

}
