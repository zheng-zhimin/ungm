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

use Session;
use App\Models\Admin\ungmuserdetail;
use App\Models\Home\Newusers;
use Hash;
use App\Models\Home\Address;
use App\Models\Admin\Sellerauthentication;

class CenterController extends Controller
{
   
    public function userdetailupdate(Request $req)
    {

        $homeuser=$req->homeuser;
        $data=json_decode($homeuser,true);
        $id=$data['id'];
        //var_dump($id);
       
        //处理上传的图片
       /* if($req -> hasFile('head')){
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

        }*/
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
        $userdetail->qq=$req->input('qq');
        
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

            $this->validate($request,[
            'oldpwd' => 'required',
            'newpwd' => 'required',
            'renewpwd' => 'required',

            ],[
            'oldpwd.required' => '请填写当前密码',
            'newpwd.required' => '请输入新密码',
            'renewpwd.required' => '请输入确认新密码',
           

            ]);

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
         $address = DB::table('china_area')->where('pid','=', '0')->get();

//        dd($address);

        return view('home.newuserinfo.addaddress',['address'=>$address]);
     }

     public function area()
     {

         $key = $_POST['key'];
//         dd($key);
         $city = DB::table('china_area')->where('pid','=', $key)->get();
         $arr = [];
         foreach ($city as $k=>$v){
             $arr[$k]['id'] = $v->id;
             $arr[$k]['name'] = $v->name;
         }
//         dd($arr);

         if(!empty($arr)){ //有值，组装数据
             $result['status'] = 200;
             $result['data'] = $arr;
         }else{  //无值，返回状态码220
             $result['status'] = 220;
         }


         echo json_encode($result);
     }


     //添加地址操作
     public function addbuyaddress(Request $req)
     {

          
          $name=$req->input('name');
          $phone=$req->input('phone');
          $address=$req->input('address');
          $area=$req->input('area');
          $city=$req->input('city');
           $this->validate($req,[
            'phone' => 'required|regex:/^1[3-9]{1}[\d]{9}$/',
            'address' => 'required',
            'name' => 'required',
            'area' => 'required',
            'city' => 'required|min:2',

            ],[
            'phone.required' => '电话号码必填,',
            'phone.regex' => '电话格式不正确,',
            'address.required' => '详细地址必填,',
            'name.required' => '请填入昵称姓名,',
            'city.required' => '请填入省/市,',
            'city.min' => '请填入省/市,',

            ]);
           //地址添加超过20条返回错误信息
           $uid=Session::get('homeuser')->id;
           $tiao=Address::where('uid',$uid)->count();
//           $area = DB::table('china_area')->where('id','=', $area)->first()->name;
//           dd($area);
           
           if($tiao>=20){
             echo "<script>alert('您所添加的地址数量已达到20条,暂时不能继续添加了呢');history.go(-1);</script>";
           }else{

                  $uid=Session::get('homeuser')->id;
                  $newadd=new Address;
                  $data=[
                    'uid'=>$uid,
                    'name'=>$name,
                    'phone'=>$phone,
                    'address'=>$address,
                    'area'=>$area.'-'.$city,
                   
                  ];
//                  dd($data);

                  $res=$newadd->insert($data);

                  if($res){
                    echo "<script> alert('添加成功');window.location.href='/home/userinfo/transaction';</script>";
                  }else{
                       return back();
                  }
           }
           
        
          
     }


     //显示修改地址回填表单
      public function editaddress($id)
     {
         $data=Address::where('id',$id)->first();
         $address = DB::table('china_area')->where('pid','=', '0')->get();
           
             return view('home.newuserinfo.editaddress',['data'=>$data,'address'=>$address]);
     }
    
     //执行修改地址操作
     public function updateaddress(Request $req)
     {
          $id=$req->input('id');
          $name=$req->input('name');
          $phone=$req->input('phone');
          $address=$req->input('address');
          $area=$req->input('area');
          $city=$req->input('city');
           $this->validate($req,[
            'phone' => 'required|regex:/^1[3-9]{1}[\d]{9}$/',
            'address' => 'required',
            'name' => 'required',

            ],[
            'phone.required' => '电话号码必填,',
            'phone.regex' => '电话格式不正确,',
            'address.required' => '详细地址必填,',
            'name.required' => '请填入昵称姓名,',

            ]);
            $data  = Address::find($id);
           
            $data -> name = $name;
            $data -> phone = $phone;
            $data -> address = $address;
            $data -> area = $area.'-'.$city;
            $res=$data -> save();
            if($res){
              echo "<script>alert('修改成功'); window.location.href='/home/userinfo/transaction'; </script>";
           }else{
               echo "<script>alert('修改失败'); history.go(-1); </script>";
           }

          
     }
     //设置默认地址
     public function setdefault($id)
     {
            $uid=Session::get('homeuser')->id;
            $q=Address::where('uid',$uid)->where('defaultstatus','1')->first();
           
           
           if($q){
                $id1=$q['id'];
                $data1=Address::find($id1);
                $data1-> defaultstatus =0;
                $data1->save();
           }
            $data=Address::find($id);

            $data-> defaultstatus =1;
            $res=$data->save();
             if($res){
              echo "<script>alert('设置成功'); window.location.href='/home/userinfo/transaction'; </script>";
           }else{
               echo "<script>alert('设置失败'); history.go(-1); </script>";
           }
     }
    
     //删除地址操作
     public function deladdress($id)
     {
           $res=Address::where('id',$id)->delete();
           if($res){
              echo "<script>alert('删除成功'); window.location.href='/home/userinfo/transaction'; </script>";
           }else{
               echo "<script>alert('删除失败'); history.go(-1); </script>";
           }
     }

     //利用用户表查看供应商企业是否认证企业营业执照
     public function authentication()
     {
        $id=Session::get('homeuser')->id;
        $data=Newusers::where('id',$id)->get()->toArray();
        $identity=$data[0]['identity'];//1->是未认证;2->是认证过的企业

        //查询是否在申请中
        $ing=Sellerauthentication::where('uid',$id)->first();

        if($identity==2){
            return redirect('/home/userinfo/indexed');
            //跳到个人中心即可(在个人中心那加个判断12的)
        }else{
            if($ing){
                echo "<script>alert('您已提交企业资质申请,请耐心等待工作人员与您联系');history.go(-1);</script>";
            }else{
                return view('home.seller.post');
            }
            
        }

        //dd($identity);
     }



     //企业认证
     public function qiyerenzheng(Request $request)
     {  

         $this->validate($request,[
            'phone' => 'required',
            'company' => 'required',
            'number' => 'required',
             'addr'=> 'required',
             'pic'=>'required',
            ],[
            'phone.required' => '电话必填',
            
            'phone.required'=> '电话必填',
            'company.required' => '公司名称必须输入',
            'number.required' => '营业执照编号必须输入',
            'addr.required' => '公司地址必须填入',
            'pic.required' => '营业执照图片必须上传',
            ]);



        $data=new Sellerauthentication;
        $data->uid=$request->input('id');
        
        $data->phone=$request->input('phone');
        $data->company=$request->input('company');
        $data->number=$request->input('number');
        $data->addr=$request->input('addr');
        
        //处理上传的图片
              if($request -> hasFile('pic')){
            //获取上传的图片
                $img = $request -> file('pic');
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
                $data -> pic = $img_dir;
            }

           // var_dump($data->pic);

                //保存
                $res=$data -> save();
                if($res){
                    echo "<script>alert('申请信息已经提交,请您保持电话畅通,我们会在1-2个工作日与您联系');window.location.href='/';</script>";
                }else{
                    echo "<script>alert('申请失败');window.location.href='/';</script>";
                }

      
     }





public function column(Request $request){
            //接收栏目信息
            // dd(111);
         $data = $request -> data;
        // echo $data ;
         $lanmu = Column::where('pid',$data)->get();

         $arr = [];
         foreach ($lanmu as $k=>$v){
             $arr[$k]['id'] = $v->id;
             $arr[$k]['cname'] = $v->cname;
         }
       
           if(!empty($arr)){ 
           //有值，组装数据
             $result['code'] = 10000;
             $result['data'] = $arr;
         }else{ 
          //无值，返回状态码220
             $result['code'] = 10001;
         }
        return $result;
        }


}
