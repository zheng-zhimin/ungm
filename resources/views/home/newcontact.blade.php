   
@extends('home.layout.newindex')

@section('title')
    联系我们
@endsection


@section('content')

<link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/style.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MRcgQCgsMLYGKGS2sczQhoOj1eU0Dlim"></script>


    <div class="content relationUs">
        <img src="/ungmhome/images/联系我们.jpg" class="img-responsive banner relationUs-banner" alt="">
        <div class="container">
            <div class="relation">
                <h3><img src="/ungmhome/images/loc.png" class="img-responsive" alt="" style="display: inline;margin-right: 5px;">九鼎智成（北京）信息技术股份有限公司</h3>
                <div class="information">
                    <p>地址：北京市通州区万达广场C座14层</p>
                    <p>网址(Web)：www.ungm.org.cn</p>
                    <p>客户服务热线：86-10-66111661</p>
                    <p>客户服务邮箱：hr@jodn.com.cn</p>
                </div>
            </div>
            <div class="map">
                <div class="map-con">
                    <iframe src="/home/map" frameborder="0" class="header" width="100%" height="100%" scrolling="no" style="border-radius: 12px;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection