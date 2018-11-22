@extends('home.layout.newindex')

@section('title')
    产品信息
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
                    <li><a href="/home/product/second">产品供应信息</a></li>
                    <li class="curve1"><a href="">{{ $data['title'] }}</a></li>
                </ul>
            </div> 
        </div>
        <!--4.供应商四级页详情页区-->
        <div class="supplierDP">
            <div class="container">
                <div class="supplierDPone">
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
                        <div class=""><p>浏览次数：<?php echo rand(1000,9999); ?>次</p></div>
                    </div>
                    <div class="oneRt">
                        <h1>{{$data['title']}}</h1>
                        <img src="/ungmhome/images/bgBlue.png" alt="">
                        <p>公司名称<span>{{$data['company']}}</span></p>
                        <p class="oneRtp">采购时间<span>{{$data['created_at']}}～{{$data['updated_at']}}</span></p>
                        <div class="">
                            <ul>
                                <li><label>地区</label><b>{{$data['area']}}</b></li>
                                <li><label>行业</label><b>{{$data['industry']}}</b></li>
                                <li><label>联系人</label><b>刘（先生）</b></li>
                                <li><label>邮件</label><b>暂无数据</b></li>
                                <li><label>电话 </label><b>暂无数据</b></li>
                                <li><label>手机</label><b>暂无数据</b></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="supplierDPtwo">
                    <p>
                        <span>采购详情：</span>
                       {!!$data['content']!!}
                    </p>
                </div>
            </div>
            <div class="supplierDPthree">
                <div class="container">
                    <div class="threeLt">
                        <h6>免责声明：</h6>
                        <p>
                            当前页为{{$data['title']}}求购价格信息展示，现款求购报价等相关信息均有企业自行提供常年现款求购价格真实性、准确性、合法性由店铺所有企业完全负责。睿鹿网对此不承担任何保证责任。
                        </p>
                    </div>
                    <div class="threeRt">
                            <h6>友情提醒：</h6>
                            <p>
                                建议您通过拨{{$data['company']}}求购厂家联系方式确认最终价格，并索要其样品确认产品质量。如现款求购报价过低，可能为虚假信息，请确认 现款求购报价真实性，谨防上当受骗。
                            </p>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

<script>
$('.ltBot ul li img').click(function(){
    $('.ltTop img').attr('src',$(this).attr('src'));
})
</script>




@endsection