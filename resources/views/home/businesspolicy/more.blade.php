
@extends('home.layout.newindex')

@section('title')
    政策解读
@endsection


@section('content')


    <link rel="stylesheet" href="/ungmhome/css/style.css">
</head>
<body>
    <div class="main">
       
       <!--2.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="/home/gt">全球贸易</a></li>
                    <li class="curve1"><a href="">政策解读</a></li>
                </ul>
            </div> 
        </div>
        <!--3.商务热点区--> 
        <div class="businessMore">

            <div class="container">
                <div class="text-center">
                    <img src="/ungmhome/images/globalTrade8.png" alt="">
                </div>
                <div class="businessMoreUl">
                    <ul>

                         @foreach($data as $k => $v)
                        <li>
                            <img src="/ungmhome/images/businessMore1.png" alt="">
                            <a href="/home/article/businesspolicy/{{$v->id}}"><span>{{ $v -> title }}</span></a>
                            <span class="businessMoreLi">{{ $v -> created_at }}</span>
                        </li>
                         @endforeach


                    </ul>

           

                </div>
                     <div class="page dataTables_paginate paging_full_numbers">
                     {!! $data->render() !!}
                     </div>
                </div>
        </div>
       
    </div>

 

@endsection