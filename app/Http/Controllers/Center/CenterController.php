<?php

namespace App\Http\Controllers\Center;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Currency;
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

use Cache;
use App\Models\Admin\ungmuserdetail;
use App\Models\Home\Newusers;
use Hash;
use App\Models\Home\Address;

class CenterController extends Controller
{
   
    public function userdetailupdate(Request $req)
    {

        $homeuser=$req->homeuser;
        $data=json_decode($homeuser,true);
        $id=$data['id'];
        //var_dump($id);
       
        //处理上传的图片
        if($req -> hasFile('head')){
            //获取上传的图片
            $head = $req -> file('head');
            //获取后缀
            $ext = $head -> getClientOriginalExtension();
            //为图片起新的名字
            $temp_name = time().rand(1000,9999).'.'.$ext;
            //设置路径名称
            $dir_name = '/articles_heads/'.date('Ymd',time());
            //路径的拼接
            $head_dir = $dir_name.'/'.$temp_name;
            //图片上传
            $head -> move('.'.$dir_name,$temp_name);
            //把图片的路径存到数据中
            $userdetail =  ungmuserdetail::where('uid',$id) -> first();
            $userdetail -> head = $head_dir;
            $userdetail->save();

            $user=newusers::where('id',$id)->first();
            $user->profile =$head_dir;
            $user->save();

        }
        $userdetail =  ungmuserdetail::where('uid',$id) -> first();
        $userdetail->vipname=$req->input('vipname');
        $userdetail->nicename=$req->input('nicename');
        $userdetail->email=$req->input('email');
        $userdetail->addr=$req->input('addr');
        $userdetail->phone=$req->input('phone');
        $userdetail->postcode=$req->input('postcode');
        $userdetail->department=$req->input('department');
        $userdetail->position=$req->input('position');
        $userdetail->vx=$req->input('vx');
        $userdetail->sex=$req->input('sex');
        $userdetail->name=$req->input('name');
        
        $res= $userdetail->save();
        
         if($res){

            echo  "<script>alert('保存成功');window.location.href='/home/userinfo/account/{$id}';</script>";

        }else{
            echo  "<script>alert('保存失败');window.location.href='/home/userinfo/account/{$id}';</script>";
        }

    }





    public function pwd(Request $request)
    {
           $oldpwd=$request->input('oldpwd');
           $newpwd=$request->input('newpwd');
           $renewpwd=$request->input('renewpwd');

           $id=$request->input('id');
           $user=Newusers::where('id',$id)->first();

           $password=$user->password;

           $res=Hash::check($oldpwd,$password);

           if($res){
                 $user->password = Hash::make($newpwd);
                 $user = $user -> save();
                 echo "<script>alert('密码修改完成');history.go(-1);</script>";
           }else{
                 echo "<script>alert('密码修改失败');history.go(-1);</script>";
           }
            

        

     }

     //添加采购信息
     public function addbuymessage(Request $req)
     {
        
     }

     //显示新增收货地址页面index
     public function addaddress()
     {
        return view('home.newuserinfo.addaddress');        
     }


     //添加地址操作
     public function addbuyaddress(Request $req)
     {
          $name=$req->input('name');
          $phone=$req->input('phone');
          $address=$req->input('address');
          $area=$req->input('area');
           $this->validate($req,[
            'phone' => 'required|regex:/^1[3-9]{1}[\d]{9}$/',
            ],[
            'phone.required' => '电话号码必填',
            'phone.regex' => '电话格式不正确'
            ]);

        
         
         
          $uid=Cache::get('homeuser')->id;
          $newadd=new Address;
          $data=[
            'uid'=>$uid,
            'name'=>$name,
            'phone'=>$phone,
            'address'=>$address,
            'area'=>$area,
           
          ];
          

          $res=$newadd->insert($data);

          if($res){
            echo "<script> alert('添加成功');history.go(-2);</script>";
          }else{
            return back();
          }
          

          
     }








}
