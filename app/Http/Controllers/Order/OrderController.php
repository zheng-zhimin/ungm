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

use App\Models\Home\Order;

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
        /*$res= array (
            0 => array (
            "datetime" => "2018-11-18 16:33:19",
            "remark" => "[上海浦东分拨中心]进行揽件扫描",
            "zone" => ""
            ),
            1 => array(
                "datetime" => "2018-11-18 16:37:32",
            "remark" => "[上海浦东分拨中心]进行中转集包扫描，发往：北京网点包",
            "zone" => ""
            ),
            2 => array(
                "datetime" => "2018-11-18 18:00:00",
            "remark" => "[上海主城区公司浦东新区金桥罗网服务部]进行揽件扫描",
            "zone" => ""
            ),
            3 => array(
                "datetime" => "2018-11-18 18:20:10",
            "remark" => "[上海浦东分拨中心]进行装车扫描，发往：北京分拨中心",
            "zone" => ""
            ),
            4 => array(
                "datetime" => "2018-11-19 23:33:48",
            "remark" => "[北京分拨中心]在分拨中心进行卸车扫描",
            "zone" => ""
            ),
            5 => array(
                "datetime" => "2018-11-19 23:42:15",
            "remark" => "[北京分拨中心]从站点发出，本次转运目的地：北京主城区公司通州区东关服务部",
            "zone" => ""
            ),
            6 => array(
                "datetime" => "2018-11-20 08:10:31",
            "remark" => "[北京主城区公司通州区东关服务部]进行派件扫描；派送业务员：王亚宁；联系电话：17316091514",
            "zone" => ""),
            7 => array(
                "datetime" => "2018-11-20 09:39:19",
            "remark" => "[北京主城区公司通州区东关服务部]快件已被 三元村小区西门南侧原e栈暂不支持寄件FC0105358 代签收如有问题请联系王亚宁【17316091514】。",
            "zone" => ""),
        );*/
        echo json_encode($res);



    }


}
