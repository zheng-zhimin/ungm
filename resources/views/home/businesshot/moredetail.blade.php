
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
                  <h1>{{$detail->title}}</h1>
                  <br>
                {!!$detail->content!!}
            </div>
            
        </div>
    </div>
@endsection