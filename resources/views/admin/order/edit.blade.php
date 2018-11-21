@extends('admin.layout.index')
@section('content')
    <!-- 显示错误的信息-->
    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span > <i class="icon-magic"></i>订单完善</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/order/{{ $data->id }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <div class="mws-form-block">
                    <div class="mws-form-row">
                        <label class="mws-form-label">订单编号</label>
                        <div class="mws-form-item">
                            <input type="text" name="order_sn" class="small" placeholder="订单编号" disabled value="{{ $data->order_sn }}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">订单商品</label>
                        <div class="mws-form-item">
                            <input type="text" name="goods_id" class="small" placeholder="订单编号" disabled value="{{ $data->act->title }}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">订单金额</label>
                        <div class="mws-form-item">
                            <input type="text" name="order_amount" class="small" placeholder="订单金额" disabled value="{{ $data->order_amount }}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">下单用户</label>
                        <div class="mws-form-item">
                            <input type="text" name="uid" class="small" placeholder="下单用户 " disabled value="{{ $data->users->username }}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">快递单号</label>
                        <div class="mws-form-item">
                            <input type="text" name="tracking_no" class="small" placeholder="快递单号" value="">
                        </div>
                    </div>
                    <div class="mws-form-row" style="width: 800px;">
                        <label class="mws-form-label">快递公司</label>
                        <div class="mws-form-item">

                            <select name="logistics_id" class="large">
                                <option value="1" selected>请选择快递公司</option>
                                @foreach($logistics as $k=>$v)
                                    <option value="{{ $v->id }}" >{{ $v->company }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="mws-form-row" style="width: 800px;">
                       <label class="mws-form-label">类型</label>
                       <div class="mws-form-item">
                   
                           <select name="type" class="large">
                           @if($data->type==1)
                               <option value="1" selected>供应类型</option>
                               <option value="2" >采购类型</option>
                           @else
                               <option value="2" selected>采购类型</option>
                               <option value="1" >供应类型</option>
                           @endif
                   
                           </select>
                   
                       </div>
                   </div>
                    <div class="mws-form-row" style="width: 800px;">
                        <label class="mws-form-label">状态</label>
                        <div class="mws-form-item">

                            <select name="status" class="large">
                                @if($data->status==0)
                                    <option value="1" >启用</option>
                                    <option value="0" selected>禁用</option>
                                @else
                                    <option value="1" selected>启用</option>
                                    <option value="0" >禁用</option>
                                @endif

                            </select>

                        </div>
                    </div>


                    {{--<div class="mws-form-row" style="width: 800px;">
                        <label class="mws-form-label">原 logo 图片:</label>
                        <div class="mws-form-item">
                            <img style="width:200px;height:120px" src="{{  }}" alt="原 logo 图片">
                            <br>
                            <br>
                            不选择默认为原图片
                            <br>
                            <input type="file" name="image" class="small" />
                        </div>
                    </div>--}}

                </div>

                <div class="mws-button-row">
                    <input type="submit" value="修改" class="btn btn-success">

                    <input type="reset" value="重置" class="btn btn-info ">
                </div>
                <div id="mydiv">
                    <img src="/d/images/logo.png" alt="mws admin">
                </div>
            </form>
        </div>
    </div>


@endsection



@section('title')
    九鼎智成
@endsection
