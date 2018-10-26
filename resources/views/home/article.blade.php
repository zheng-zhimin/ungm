@extends('home.layout.index')
@section('content')

<nav class="breadcrumb">
    <div class="container">
        <i class="Hui-iconfont"></i><a href="/" class="c-primary">首页</a>
       <!--  <span class="c-gray en">&gt;</span> <a href="article.html" class="c-primary">学无止尽</a> -->
        <span class="c-gray en">&gt;</span> <span class="c-gray">文章</span>
    </div>
</nav>

<section class="container">
    <!--left-->
    <div class="col-sm-9 col-md-9 mt-20">

    <!--article list-->
            <ul class="index_arc">
                @foreach($data as $k => $v)
                <li class="index_arc_item" style="height:150px">
                    <a href="#" class="pic">
                        <img class="lazyload" data-original="temp/art.jpg" alt="图片" src="{{ $v -> articles_image_path }}" style="display: inline-block;width:165px;height:160px;">
                    </a>
                    <h4 class="title"><a href="/home/articledetail/{{$v->id}}">{{ $v -> title }}</a></h4>
                    <div class="date_hits">
                        <span>{{ $v -> author }}</span>
                        <span>{{ $v -> created_at }}</span>
                        <span><a href="/article-lists/10.html">程序人生</a></span>
                        <p class="hits"><i class="Hui-iconfont" title="点击量"></i> 276° </p>
                        <p class="commonts"><i class="Hui-iconfont" title="点击量"></i> <span class="cy_cmt_count">20</span></p>
                    </div>
                    <div class="desc">{!! $v -> content !!}</div>
                </li>
                @endforeach
            </ul>
       <div class="page dataTables_paginate paging_full_numbers">
                {!! $data->render() !!}
            </div>
  </div>

  <!--right-->
  <div class="col-sm-3 col-md-3 mt-20">

    <!--导航-->
   <div class="panel panel-primary mb-20">
            <div class="panel-body">
                @foreach($column as $k => $v)
                <a href="/home/article/{{ $v -> id }}" class="btn btn-primary radius nav-btn">{{ $v -> cname }}</a>
                @endforeach
            </div>
        </div>

    <!--热门推荐-->
    <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>热门推荐</strong></a>
            </div>
            <div class="tab-category-item">
                <ul class="index_recd">
                   @foreach($hot as $k => $v)
                    <li>
                        <a href="/home/articledetail/{{$v->id}}">{{ $v -> title}}</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量"></i> {{ $v -> comment}} </p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

<!--标签-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>标签云</strong></a>
            </div>
            <div class="tab-category-item">
               <div class="tags">
                @foreach($mylabels as $k => $v)
                    <a href="/home/label/{{ $v }}" class="tags{{$rand}}">{{ $v }}</a>
                @endforeach
                </div>
            </div>
        </div>
  </div>

</section>

@endsection



@section('title')
    英雄联盟
@endsection
