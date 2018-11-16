@extends('home.layout.newindex')

@section('title')
    关键字搜索
@endsection


@section('content')


    <link rel="stylesheet" href="/ungmhome/css/style.css">
    <style type="text/css">
         .slh{
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
    </style>

    <div class="main">
       
        <!--2.图片区-->
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="javascript:;">相关供应商信息</a></li>
                   
                </ul>
            </div> 
        </div>
        <!--4.关键字搜索区-->
        <div class="supplierMRO supplierPEKS">
            <div class="container">
              
       @if($data=="")
            <div class="text-center">
                <img src="/ungmhome/images/error.png" style="width:150px;">
            </div>
             
       @else
            @foreach($data as $v)
                <div class="oneMRO">
                    <img src="{{$v['img']}}" alt="">
                </div>
                 <div class="twoMRO">
                    <div class="ltMRO">
                        <h1 class="slh"><a href="javascript:;">{{$v['project']}}</a></h1>
                        <p>产品时间:{{$v['published']}} ~ {{$v['deadline']}}</p>
                        <p>产品销量：{{$v['count']}}</p>
                        <p>产品价格：{{$v['price']}}</p>
                    </div>
                    <div class="rtMRO">
                        <p>地区：{{$v['address']}}</p>
                        <p>行业：{{$v['industry']}}</p>
                        <p>公司：{{$v['company']}}</p>
                       
                         <a href="/home/productfour/{{$v['uid']}}"><input type="button" value="立即询价"> </a>

                    </div>
                </div>
            @endforeach
        @endif   
               
               
            </div>
        </div>
       
    </div>


@endsection