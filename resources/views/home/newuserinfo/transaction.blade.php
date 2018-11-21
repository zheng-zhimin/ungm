@extends('home.layout.usercenter')

@section('title')
   个人中心
@endsection

@section('content')


    <link rel="stylesheet" href="/ungmhome/css/style.css">
    <style>
        .myPurchaseOrder table thead tr th {
            padding: 10px 0;
            height: 28px;
            background-color: #00b7a1;
            text-align: center;
            color: #ffffff;
            border: none;
        }
        .myPurchaseOrder{
            width:95%;
            text-align: center;
        }
        .myPurchaseOrder .table{
            margin-top: 50px;
        }
    </style>


<body>
    <div class="container">
        <div class="settingBtn">
            <p class="btnColor">我的订单</p>
            <p>收货地址</p>
            <p>售后</p>
        </div>
        <div class="myManagement">
            <div class="myOrder managementUl">
                <div class="myNav">
                    <span class="btnColor">采购订单</span>
                    <span>供应订单</span>
                    <span>申请发票</span>
                    <span id="wuliu">我的物流</span>
                </div>
                <div class="myHint">
                    <div class="myPurchaseOrder hintOne">
                        <table class="table table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th>订单编号</th>
                                <th>订单金额</th>
                                <th>订单支付状态</th>
                                <th>订单商品</th>
                                <th>订单物流单号</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $val)
                                <tr>
                                    <td>{{$val->order_sn}}</td>
                                    <td>{{$val->order_amount}}</td>
                                    <td>{{$val->pay_status == 0 ? '未支付' : '已支付' }}</td>
                                    <td>{{$val->goods_id }}</td>
                                    <td>{{$val->tracking_no }}</td>
                                    <td onclick="wuliu(this)" id="{{$val->id}}">查看物流</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="mySupplyOrder hintOne"><p>您暂无供应订单交易</p></div>
                    <div class="myInvoice hintOne"><p>您暂无可申请的发票</p></div>
                    <div class="myLogistics hintOne"><p>物流暂未开通</p></div>
                </div>
            </div>
            <div class="myShippingAddress managementUl">
                <div class="addressOne">
                    <a href="/center/addaddress">新增地址</a>
                    <a href="javascript:;" class="oneColor">收货地址</a>
                </div>
                <div class="table-responsive">
               
                    <table class="table table-bordered table-hover ">
                        <thead>
                            <tr>
                                <th>收货人</th>
                                <th>所在地区</th>
                                <th>详细地址</th>
                                <th>手机号码</th>
                                <th>操作</th>
                                <th>设置</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($address as $v)
                            <tr>
                                <td>{{$v->name}}</td>
                                <td style="width:100px;">{{$v->area}}-{{$v->city}}</td>
                                <td class="tabWidth">{{$v->address}}</td>
                                <td>{{$v->phone}}</td>

                                <td style="width:100px;">

                                    <a href="/center/editaddress/{{$v->id}}">修改</a>
                                    <b>|</b>
                                    <a href="/center/deladdress/{{$v->id}}">删除</a>
                                </td>
                                @if($v->defaultstatus==0)
                                <td><a href="/center/setdefault/{{$v->id}}">设为默认</a></td>
                                @else
                                  <td><div  style="background:#00b7a1;height:35px;width:90px ;opacity: 0.8;border-radius:20px; margin-left:50px;line-height:35px;">默认地址</div></td>
                                @endif
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="addressTwo">
                    <p>共计保存20条  当前已存{{$tiao}}条  还可以存{{20-$tiao}}条</p>
                </div>
            </div>
            <div class="myAfterSale managementUl">
                <p>如有需求请联系我们，客服电话86-010-66111661</p>
            </div>
        </div>
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script>

function wuliu(obj) {
    var id = $(obj).attr('id');
    alert(id)
    $('#wuliu').addClass('btnColor').siblings().removeClass('btnColor');
    $('.myHint .hintOne').eq(3).show().siblings('.hintOne').hide();
}

</script>
<script>
$('.settingBtn p').click(function(){
    var _index = $(this).index();
    $(this).addClass('btnColor').siblings().removeClass('btnColor');
    $('.myManagement .managementUl').eq(_index).show().siblings('.managementUl').hide();
})
$('.myNav span').click(function(){
    var _index = $(this).index();
    $(this).addClass('btnColor').siblings().removeClass('btnColor');
    $('.myHint .hintOne').eq(_index).show().siblings('.hintOne').hide();
})
</script>
</html>


@endsection