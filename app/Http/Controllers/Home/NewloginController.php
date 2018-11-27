<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Newusers;
use  App\Models\Admin\Ungmuserdetail;
use App\Models\Home\UserDetail;
use DB;
use Mail;
use Hash;
use Session;
use App\Models\Home\History;
class NewloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //登录页
    public function getLogin()
    {
        
        return view('home.newlogin.index');
    }
    //退出
    public function getLoginout()
    {
        session()->flush();
         return view('home.newlogin.index');
    }

     public function getRegister()
    {
        
        return view('home.newlogin.register');
    }
      public function index()
    {
        
       return view('home.newindex.index');
    }
//
    public function postDologin(Request $request)
    {
    
      


            //登录处理
            $res = $request->except('_token');
            //dd($res); //打印出用户填写的账号密码
        
            $user = Newusers::where('username',$res['username'])->first();
            //dd($user);//通过传过来的姓名(未来设置成唯一)查找出该用户的所有信息
           if(!$user)
            {
                return back()->withErrors('没有这个用户') -> withInput();
            }
        
                   $inputpwd=$request['password'];
                   $pwd=$user['password'];//获得用户的密码
                   $success=Hash::check($inputpwd,$pwd);
                   
                    //判断id下的用户名和密码是否同时一致

                            if($success)
                            {  
                                session(['homeFlag'=>true]);
                                session(['homeuser'=>$user]);
                                Session::put('homeuser',$user,720);
                                
                                //Session::forget('homeuser');//退出是清除记录用法
                                echo 'success' ;     
                            }else{
                                echo'后期维护时在这里发送数据库查询字段即可';
                            }
     }                         
                 
                    
                  
     
   
    //手机验证码code方法
     public function phone_code(Request $request)
        {
            $phone = $request -> input('phone','15843321521');
            
           /* $pcode=rand(1000,9999);
            session(['phone_code'=>$pcode]);
            echo $pcode;*/
            $pcode = rand(1000,9999);
            session(['phone_code'=>$pcode]);
            $url = 'http://106.ihuyi.com/webservice/sms.php?method=Submit&format=json&account=C01492433&password=23983afca2ea938a0c8ebd51ad11494e&mobile='.$phone.'&content=您的验证码是：'.$pcode.'。请不要把验证码泄露给其他人。';
            $curlHandler = curl_init(); //curl  模拟http请求
            curl_setopt($curlHandler, CURLOPT_URL, $url);
            curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curlHandler);
            echo $result;
        }

            



        public function postDoregister(Request $request)
        {
           /* echo'在这里处理注册信息';
             //验证数据  // 将数据插入数据库
             dump($request -> all());*/

              $this->validate($request,[
            'phone' => 'required|unique:ungm_users',
            'phone_code'=>'required',
            'password' => 'required|between:6,12',
            'repassword' => 'required|same:password',

            ],[
            'phone.required' => '手机号必填',
            'phone_code.required' => '请填写手机验证码',
            'phone.phone' => '用户名格式不正确',
            'phone.unique' => '该用户已注册',
            'password.required' => '密码必须输入',
            'repassword.required' => '确认密码必须输入',
            'password.between' => '密码格式不正确',
            'repassword.same' => '密码不一致',
            ]);
              //先判断普通验证码
                $coderes= checkcode($request->input('code'));
                 if(!$coderes)
                {
                    return back()->withErrors('验证码错误') -> withInput();
                }

              //判断短信验证码是否相同
             $inputcode=$request->input('phone_code');
             $phone_code=session('phone_code');
             //如果验证码也正确就将新伙伴入库吧
             if($phone_code==$inputcode){
                    
                    $phone = $request -> input('phone','15843321521');
                    $pass = Hash::make($request -> input('password','123456'));
                    $profile='/homeblog/img/dt.png';//给个默认头像

                    $token = str_random(50);
                    $code = 'RLW'.time();
                    $id = Newusers::insertGetId(['profile'=>$profile,'username'=>$phone,'phone'=>$phone,'password'=>$pass,'token'=>$token,'code'=>$code]);
                    Ungmuserdetail::insert(['phone'=>$phone,'uid'=>$id,'head'=>$profile]);
                    
                   
                    // dd($id);

                    
                    if($id > 0){
                        // 注册成功
                        echo'<script>
                            alert("注册成功");
                            function hello(){ 
                            window.location = "/home/newlogin/login";
                            } 
                            window.setTimeout(hello,10);
                        </script>';
                        
                         //return view('home.phone.success',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    }else{
                        // 注册失败
                         return view('home.phone.fail',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                        dd('注册失败');
                    }
             }else{
                //$phone = $request -> input('phone');
               return back()->withErrors(['cuowu'=>'短信验证码不正确'])-> withInput();

            }

            
            

           
        }
 
/*        public function jihuo(Request $request)
            {
              
               // 接受id
                $id = $request -> input('id','');
                // 接受token
                $token = $request -> input('token','');
                // 通过id获取插入的对应数据
                $user = Newusers::find($id);
               // dd($user);
                if(!$user){
                     return view('home.phone.fail',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    dd('连接非法');
                }
                // dump($user);
               

                // 检测该账户是否激活
                if($user -> active == 2){
                    $uid=$user->id;//获取details里的uid
                    $phone=DB::select("select phone from newusers_detail where uid=".$uid);
                  /* $phone=$phone[0]->phone;
                   $phone=sprintf($phone);
                    //dd($phone);*/
                   /* date_default_timezone_set('PRC');
                    return view('home.phone.oready',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    dd('该账户已经激活，请不要重复激活');
                }
                // 激活
                $user -> active  = 2;
                $user -> token = str_random(50);
                if($user -> save()){
                    return view('home.phone.success',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    dd('激活成功');
                }else{
                    return view('home.phone.fail',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    dd('激活失败');
                }
                 // 检测连接的有效性
                if($token != $user->token){
                     return view('home.phone.fail',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    dd('链接失效，请联系客服');
                    exit;
                }
            } 

            public static function sendphone($phone,$id,$token)
            {
                Mail::send('home.phone.index', ['id' => $id,'token'=>$token,'phone'=>$phone], function ($m) use ($phone) {
                    $m->to($phone)->subject('【JDQS】官方激活邮件!');
                });
            }  */

            //忘记密码
    public function forget()
    {
         return view('home.newlogin.forget');
    }
           
          //接收忘记密码验证码
    public function forgetcode(Request $request){
        $phone = $request->phone;
        $inputcode = $request -> code;
         // $inputcode=$request->input('phone_code');
        $phone_code=session('phone_code');
        //判断验证码是否相同
        if($phone_code==$inputcode){
            $data = [
                    'code' => '1000',
                    'mes' => '验证码正确'
                    
                ];
            return $data;
        }else{
            $data = [
                    'code' => '1001',
                    'mes' => '验证码错误'
                    
                ];
            return $data;
        }
    }
    //提交忘记密码
    public function forgetpassword(Request $request){
        //接收手机号和验证码
        $phone = $request->phone;
        $code = $request -> code;
        $sessioncode = session('phone_code');
        $newpassword = $request -> newpassword;
        $renewpassword = $request -> renewpassword;
        if ($newpassword == $renewpassword ) {
            $user = Newusers::where('username',$phone)-> first();
            // $user = Newusers::find();
            // dd($user);
            if ($user) {
                //修改密码
                // $user ->password = $newpassword;
                 $user->password = Hash::make($newpassword);
                //存入数据库
                $user = $user -> save();
                $data = [
                    'code' => '1000',
                    'mes' => '修改成功',
                    'res' => $sessioncode
                ];
                return $data;
            }else{
                 $data = [
                    'code' => '1001',
                    'mes' => '未找到相关用户',
                    'res' => $sessioncode
                ];
                return $data;
            }
        }
       
    }

     public function forgetphone(Request $request){
        $phone = $request->phone;
        $user = Newusers::where('username',$phone)-> first();
         if ($user) {
               
            
                $data = [
                    'code' => '1000',
                    'mes' => '手机号正确'
                ];
                return $data;
            }else{
                 $data = [
                    'code' => '1001',
                    'mes' => '未找到相关用户',
                ];
                return $data;
            }
    }




            //前台用户退出控制器方法       
           public function logout()
            {
                 
                 Session::forget('homeuser');
                 session(['homeFlag'=>false]);
                 return redirect('/');
            }
            

             
        
 

}
