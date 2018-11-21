<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Order;
use App\Http\Requests\StoreAdvertise;
use DB;


class OrderController extends Controller
{

    //返回广告详情
    public function index( Request $request )
    {

        //接收分页数据 默认为5
        $count=$request->input('count',5);

        //接收搜索数据 默认为空
        $for = $request -> input('for','');

        //以数组的形式接收分页和搜索数据，目的是返回给主页面
        $params=$request->all();
//        dd($params);

        //按照搜索查询数据，不传值全搜索。并进行分页
        $data = order:: where('order_sn','like','%'.$for.'%')->paginate($count);
//        dd($data);
        //返回视图
        return view('admin/order/index',['data'=>$data,'params'=>$params]);
    }


    //返回添加页面
    public function create()
    {
        return view('admin/order/create');
    }


    //处理添加页面提交的信息
    public function store(StoreAdvertise $request)
    {

        //接收所有数据
        $data = $request;

        //处理上传图片
        if($request->hasFile('image')){


            //获取上传图片信息
            $image=$request->file('image');

            //获取后缀
            $ext=$image->getClientOriginalExtension();

            //为图片起新名字
            $temp_name=time().rand(1000,9999).'.'.$ext;
            //echo $temp_name;

            //设置路径名称
            $dir_name='/advertise_images/'.date('Ymd',time());

            //往数据库中存储的名字 拼接路径方便存储.
            $image_name=$dir_name.'/'.$temp_name;
            //echo $name;

            //将图片移动到框架中             路径  ，  名称
            //$image->move('.'.$dir_name,$temp_name);

            //把文件路径存到数据中然后下一步扔进数据库
            $data['image_path']=$image_name;

        }


        //用模型方法添加数据
        //实例化模型
        $advertise = new Advertise;
 
        //向advertises数据表中添加title
        $advertise->title = $data['title'];
        //向advertises数据表中添加type
        $advertise->type = $data['type']; 
        //向advertises数据表中添加big 广告大小
        $advertise->big = $data['big'];

        //向advertises数据表中添加advertise_https
        $advertise->advertise_https = $data['advertise_https'];

        //向advertises数据表中添加status
        $advertise->status = $data['status'];

        //向advertises数据表中添加image_path
        $res=$advertise->image_path = $data['image_path'];

        //如果向数据库中插入数据成功，移动图片
        if($res){



            //将图片移动到框架中             路径  ，  名称
            $image->move('.'.$dir_name,$temp_name);
        }


        //保存
        $res = $advertise->save();

        if($res){
            return redirect('/admin/order')->with('success','添加成功');

        }else{

            return back()->with('error','添加失败');
        }
    }


    public function show($id)
    {
        //
    }


    //返回修改视图
    public function edit($id)
    {
        $data=order::find($id);
        $logistics = DB::table('ungm_logistics')->get();

        return view('admin.order.edit',['data'=>$data,'logistics'=>$logistics]);
    }


    //更新广告信息
    public function update(Request $request, $id)
    {
        //接收所有数据
        $data = $request;
        $order= order::find($id);
        $order->logistics_id = $data['logistics_id'];
        $order->tracking_no = $data['tracking_no'];;
        
        //保存
        $res = $order->save();

        if($res){

            //Storage::delete($filePath);
            return redirect('/admin/order')->with('success','修改成功');

        }else{

            return back()->with('error','修改失败');
        }

    }


    //删除广告
    public function destroy($id)
    {


        $res=order::destroy($id);
        if($res){
            return redirect('/admin/order')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }



}
