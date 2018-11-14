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
                    <li class="curve1"><a href="">{{$data['title']}}</a></li>
                </ul>
            </div> 
        </div>
        <!--4.采购商四级页详情页区-->
        <div class="buyerSubpageDP">
            <div class="container">
                <div class="buyerSubpageDPone">
                    <div class="oneLt">
                        <div class="ltTop">
                            <img src="{{$data['articles_image_path']}}" alt="">
                        </div>
                        <div class="ltBot">
                            <ul>
                                <li><img src="{{$data['articles_image_path']}}" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing3.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing4.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing5.png" alt=""></li>
                            </ul>
                        </div>
                        <div class=""><p>浏览次数：<?php echo rand(100,999);?>次</p></div>
                    </div>
                    <div class="oneRt">
                        <h1>{{$data['title']}}</h1>
                        <img src="/ungmhome/images/bgBlue.png" alt="">
                        <div class="rtTop">
                            <ul>
                                <li><label for="">价格</label><b>价格面议</b></li>
                                <li><label for="">最小起订货量</label><span>≥1台</span></li>
                            </ul>
                        </div>
                        <div class="rtCen">
                            <img src="/ungmhome/images/icon-phone.png" alt="">
                            <b>0531-80983066</b>
                            <span>张鹏</span>
                        </div>
                        <div class="rtBot">
                            <ul>
                                <li>发货地<span>{{$data['area']}}</span></li>
                                <li>发货期限15天内发货</li>
                                <li>供货总量10 台</li>
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
                                <li><label for="">公司名</label><b>{{$data['company']}}</b></li>
                                <li><label for="">经营模式</label><b>制造商,贸易商</b></li>
                                <li><label for="">注册资本</label><b>300万人民币</b></li>
                                <li><label for="">公司注册时间</label><b>2008</b></li>
                                <li><label for="">公司所在地</label><b>山东/济南市</b></li>
                                <li><label for="">企业类型</label><b>企业单位 (制造商,贸易商)</b></li>
                                <li style="margin-bottom:40px;"><label for="">资料认证</label><b>已通过营业执照认证</b></li>
                            </ul>
                            <div class="twoUl">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">主营行业</div>
                                            <div class="col-md-10">工业品 / 机械及行业设备 / 机床</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">经营范围</div>
                                            <div class="col-md-10">雕刻机,多功能雕刻机,木工雕刻机价格,数控木工雕刻机,全自动木工雕刻机,电脑雕刻机,
                                                木门雕刻机,立体雕刻机,泡沫雕刻机,汽车模具雕刻机,三工序雕刻机,多工序雕刻机,广告雕刻机,石材雕刻机,
                                                亚克力雕刻机 </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="botTwo ulTab">
                            <ul>
                                <li><label for="">姓名</label><b>张鹏</b></li>
                                <li><label for="">手机</label><b>18615679770</b></li>
                                <li><label for="">公司名称</label><b>济南蓝象数控机械有限公司</b></li>
                                <li class="twoTop"><label for="">电话</label><b>0531-80983066</b></li>
                                <li class="twoBot"><label for="">地区</label><b>山东-济南市</b></li>
                                <li><label for="">详细地址</label><b>济南市高新区世纪大道与春博路叉口向北500米路东</b></li>
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
