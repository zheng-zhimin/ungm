@extends('home.layout.newindex')

@section('title')
    采购信息
@endsection


@section('content')


    <link rel="stylesheet" href="/ungmhome/css/style.css">


    <div class="main">
        
        <!--2.图片区-->
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="/home/buymessage/second">采购信息</a></li>
                    <li class="curve1"><a href="">{{$data['project']}}</a></li>
                </ul>
            </div> 
        </div>
        <!--4.采购商四级页详情页区-->
        <div class="buyerSubpageDP">
            <div class="container">
                <div class="buyerSubpageDPone">
                    <div class="oneLt">
                        <div class="ltTop">
                            <img src="{{$data['img']}}" alt="">
                        </div>
                        <div class="ltBot">
                            <ul>
                                <li><img src="{{$data['img']}}" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing3.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing4.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing5.png" alt=""></li>
                            </ul>
                        </div>
                        <div class=""><p>浏览次数：{{$data['times']}}次</p></div>
                    </div>
                    <div class="oneRt">
                        <h1>{{$data['project']}}</h1>
                        <img src="/ungmhome/images/bgBlue.png" alt="">
                        <div class="rtTop">
                            <ul>
                                <li><label for="">价格</label><b>价格面议</b></li>
                                <li><label for="">数量</label><span>{{$data['count']}}</span></li>
                            </ul>
                        </div>
                        <div class="rtCen">
                            <img src="/ungmhome/images/icon-phone.png" alt="">
                            <b>{{$addressdata['phone']}}</b>
                            <span>{{$addressdata['name']}}</span>
                        </div>
                        <div class="rtBot">
                            <ul>
                                <li>收货地址 <span>{{$addressdata['address']}}</span></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="buyerSubpageDPtwo">
                    <div class="tops">
                        <span class="topOne topColor">商务信息</span>
                        <span class="topTwo">联系方式</span>
                    </div>
                    <div class="bots">
                        <div class="botOne ulTab">
                            <ul>
                                <li style="width:800px;"><label for="">公司名</label><b>{{$userdetaildata['company']}}</b></li>
                                <li><label for="">经营模式</label><b>{{$userdetaildata['billion']}}</b></li>
                                <li><label for="">注册资本</label><b>{{$userdetaildata['capital']}}</b></li>
                                <li><label for="">公司注册时间</label><b>{{$userdetaildata['capital']}}</b></li>
                                <li><label for="">公司所在地</label><b>{{$data['address']}}</b></li>
                                <li><label for="">企业类型</label><b>{{$data['types']}}</b></li>
                                <li style="margin-bottom:40px;">

                                <label for="">资料认证</label>

                                @if($renzheng==1)
                                     <b>未认证</b>
                                @else
                                     <b>已认证</b>
                                @endif

                                </li>
                            </ul>
                            <div class="twoUl">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">主营行业</div>
                                            <div class="col-md-10">{{$userdetaildata['line']}}</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">经营范围</div>
                                            <div class="col-md-10">{{$userdetaildata['scope']}}</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="botTwo ulTab">
                            <ul>
                                <li><label for="">姓名</label><b>{{$addressdata['name']}}</b></li>
                                <li><label for="">手机</label><b>{{$addressdata['phone']}}</b></li>
                                <li><label for="">公司名称</label><b>{{$userdetaildata['company']}}</b></li>
                                <li class="twoTop"><label for="">电话</label><b>{{$userdetaildata['tel']}}</b></li>
                                <li class="twoBot"><label for="">地区</label><b>{{$addressdata['area']}}</b></li>
                                <li><label for="">详细地址</label><b>{{$addressdata['address']}}</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</body>

<script>
$('.ltBot ul li img').click(function(){
    $('.ltTop img').attr('src',$(this).attr('src'));
})

$('.tops span').click(function(){
    var _index = $(this).index();
    $(this).addClass('topColor').siblings().removeClass('topColor');
    $('.bots .ulTab').eq(_index).show().siblings('.ulTab').hide();
})
</script>
</html>




@endsection
