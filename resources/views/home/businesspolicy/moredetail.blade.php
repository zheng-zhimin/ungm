
@extends('home.layout.newindex')

@section('title')
    政策解读
@endsection


@section('content')

    <link rel="stylesheet" href="/ungmhome/css/style.css">

    <div class="main">
     
        <!--2.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="/home/gt">国际贸易</a></li>
                    <li class="curve1"><a href="/home/businesspolicy/more">政策解读</a></li>
                </ul>
            </div> 
        </div>
        <!--3.商务中心(国家邮政局)-->
        <div class="container">
                {{$detail->title}}
            <div class="businessHot">
                {!!$detail->content!!}
            </div>
            
        </div>
    </div>
@endsection