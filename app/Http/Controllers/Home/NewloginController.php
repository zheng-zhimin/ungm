<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Newusers;
use App\Models\Home\UserDetail;
use DB;
use Mail;
use Hash;
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
            'phone' => 'required|',
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
              //判断验证码是否相同
             $inputcode=$request->input('phone_code');
             $phone_code=session('phone_code');
             //如果验证码也正确就将新伙伴入库吧
             if($phone_code==$inputcode){
                    dd('hah');
                    $phone = $request -> input('phone','15843321521');
                    $pass = Hash::make($request -> input('password','123456'));
                    $profile='/homeblog/img/timg.jpg';//给个默认头像
                    $token = str_random(50);
                    $id = Newusers::insertGetId(['profile'=>$profile,'username'=>$phone,'password'=>$pass,'token'=>$token]);
                    //UserDetail::insert(['phone'=>$phone,'uid'=>$id]);

                    // dd($id);

                    // 发送邮件
                    if($id > 0){
                        // 注册成功
                      
                         return view('home.phone.success',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                    }else{
                        // 注册失败
                         return view('home.phone.fail',['time'=>date( 'Y年m月d日 H:i:s',time() )]);
                        dd('注册失败');
                    }
             }else{
                  
               return redirect('/home/newlogin/register')->withErrors(['cuowu'=>'验证码不正确']);

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
    public function getAbout(Request $request)
    {
        return view('home.index.about');
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
