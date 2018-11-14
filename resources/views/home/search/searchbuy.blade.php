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
                    <li><a href="javascript:;">已匹配的信息</a></li>
                    
                </ul>
            </div> 
        </div>
        <!--4.关键字搜索区-->
        <div class="supplierMRO supplierPEKS">
            <div class="container">
              

            @foreach($data as $v)
                <div class="oneMRO">
                    <img src="{{$v['img']}}" alt="">
                </div>
                 <div class="twoMRO">
                    <div class="ltMRO">
                        <h1 class="slh"><a href="javascript:;">{{$v['project']}}</a></h1>
                        <p>采购时间:{{$v['published']}} ~ {{$v['deadline']}}</p>
                        <p>采购数量：{{$v['count']}}</p>
                        <p>采购价格：{{$v['price']}}</p>
                    </div>
                    <div class="rtMRO">
                        <p>地区：{{$v['address']}}</p>
                        <p>行业：{{$v['industry']}}</p>
                        <p>公司：{{$v['company']}}</p>
                        <a href="/home/buymessagefour/{{$v['uid']}}"><input type="button" value="立即报价"></a>
                    </div>
                </div>
            @endforeach
                
               
               
            </div>
        </div>
       
    </div>


@endsection