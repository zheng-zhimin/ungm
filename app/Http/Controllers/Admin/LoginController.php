<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home\History;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Admin\Usersdetail;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo'后台登录页';
        return view('admin.login.login');
    }


    public function dologin(Request $request)
    {
        $form= $request->except('_token');

        $user = User::where('username',$form['username'])->first();

       $formu= $request->input('username');
       $formp= $request->input('password');
     

        $user = User::where('username',$formu)->first();
    
          //如果数据库中没有此用户，返回登录页面
        if(!$user)
        {
            return back()->withErrors('没有这个用户') -> withInput();
        }

        $res=Hash::check($formp,$user['password']);
        
        if(!$res)
        {
             return back()->withErrors('用户密码错误') -> withInput();
        }
         $coderes= checkcode($request->input('code'));
         if(!$coderes)
        {
            return back()->withErrors('验证码错误') -> withInput();
        }

        $id=$user['id'];
        $res = Usersdetail::where('uid',$id)->first();



        if ( $res['status'] == 0 ) {
            return back()->withErrors('当前用户已被禁用，请您联系客服。') -> withInput();
        }

        session(['adminFlag'=>true]);
        session(['adminUser'=>$user]);

        $ipdata = $this->get_area($_SERVER['REMOTE_ADDR']);


        $history = new History;
        $history -> uid = \Session::get('adminUser')->id;
        $history -> loginTime = date('Y-m-d H:i:s',time());
        $history ->  ip = $_SERVER['REMOTE_ADDR'];
        $history ->  country = $ipdata['data']['country'];
        $history ->  region = $ipdata['data']['region'];
        $history ->  city = $ipdata['data']['city'];
        $history ->  isp = $ipdata['data']['isp'];
        $res = $history -> save();

        if($res){
            return redirect('/admin/admin');
        }
    

           

    }

    function https_request($url,$data = null){
        $curl = curl_init();

        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);

        if(!empty($data)){//如果有数据传入数据
            curl_setopt($curl,CURLOPT_POST,1);
            curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
        }

        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($curl);
        curl_close($curl);

        return $output;
    }

    //淘宝接口：根据ip获取所在城市名称
    function get_area($ip = ''){
        if($ip == ''){
            $ip = GetIp();
        }
        $url = "http://ip.taobao.com/service/getIpInfo.php?ip={$ip}";
        $ret = $this->https_request($url);
        $arr = json_decode($ret,true);
        return $arr;
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        session()->flush();
        session(['adminFlag'=>false]);
        return redirect('admin/login');
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
     * 进行判断.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
