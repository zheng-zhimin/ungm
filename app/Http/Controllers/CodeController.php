<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class CodeController extends Controller
{
    
        public function makecode()
        {
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        // 可以设置图片宽高及字体
        $code= $builder->build(3);
        $builder->build($width = 115, $height = 45, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();

        // 把内容存入session
        session(['code'=>$phrase]);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        //dd(session('code'));
        return $builder->output();
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*x*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 验证验证码 
        $res= checkcode($request->input('code'));
        dump($res);
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //jiazai
        //echo'1111';
      
        return view('admin.show');
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
  /**
     * @param string $url
     * @param string $param
     * @return bool|mixed
     * 物流信息接口调用
     */
    public function request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }

        $postUrl = $url;
        $curlPost = $param;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$postUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        return $data;
    }
    public function logistics(Request $request)
    {
        $id = $request->input('id');
        $param = DB::table('API')->where('code','物流信息')->first();

        $url = 'http://v.juhe.cn/exp/index';
        $post_data['key'] = $param->key;

        $order = order::where('id', '=', $id)->first();
        $post_data['no']  = $order->tracking_no;
        $post_data['com'] = $order->logistics_id;
        $o = "";
        foreach ( $post_data as $k => $v )
        {
            $o.= "$k=" . urlencode( $v ). "&" ;
        }
        $post_data = substr($o,0,-1);

        $res = $this->request_post($url, $post_data);
        $data = json_decode($res,true);
        $res = $data['result']['list'];
//        dd($res);
        echo json_encode($res);



    }




}
