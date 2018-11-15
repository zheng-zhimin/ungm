@extends('home.layout.usercenter')

@section('title')
   个人中心
@endsection

@section('content')


    <link rel="stylesheet" href="/ungmhome/css/style.css">

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
                    <span>我的物流</span>
                </div>
                <div class="myHint">
                    <div class="myPurchaseOrder hintOne"><p>您暂无采购订单交易</p></div>
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
                                <td style="width:100px;">{{$v->area}}</td>
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
                                  <td><div  style="background:#ddd;height:25px; opacity: 0.8;border-radius:30px;"><a>默认地址</a></div></td>
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