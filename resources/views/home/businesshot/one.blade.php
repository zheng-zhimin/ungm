
@extends('home.layout.newindex')

@section('title')
    商务热点
@endsection


@section('content')

    <link rel="stylesheet" href="/ungmhome/css/style.css">

    <div class="main">
     
        <!--2.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="/home/ct">国内贸易</a></li>
                    <li class="curve1"><a href="/home/businesshot/more">商务热点</a></li>
                </ul>
            </div> 
        </div>
        <!--3.商务中心(国家邮政局)-->
        <div class="container">
            <div class="businessHot">
               <h1>国家邮政局：前9月快递业务量同比大增</h1>
               <p class="oneHot">文章来源：<span>商务时报  &nbsp;&nbsp;&nbsp;2018-10-26 11:14:06</span></p>  
               <p>
                   记者从国家邮政局获悉，1—9月，全国快递服务企业业务量累计完成347.4亿件，同比增长26.8%；业务收入累计完成4246.3亿元，同比增长24%。
                   快递业务完成量已超过2016年全年业务量。
                </p>  
               <p class="twoHot">
                    具体到细分业务，同城业务量累计完成79.7亿件，同比增长24.8%；异地业务量累计完成259.8亿件，同比增长27.1%；国际/港澳台业务量
                    累计完成7.9亿件，同比增长39.3%。1—9月，同城、异地、国际/港澳台快递业务量分别占全部快递业务量的22.9%、74.8%和2.3%；业务
                    收入分别占全部快递收入的15.3%、51.1%和10.1%。与去年同期相比，同城快递业务量的比重下降0.4个百分点，异地快递业务量的比重
                    上升0.2个百分点，国际/港澳台业务量的比重上升0.2个百分点。
               </p>
               <p>（记者李心萍）</p>
            </div>
            
        </div>
    </div>
@endsection