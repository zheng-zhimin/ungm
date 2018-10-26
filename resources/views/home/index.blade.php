
@extends('home.layout.index')
@section('content')
<section class="container pt-20">
    <!--<div class="Huialert Huialert-info"><i class="Hui-iconfont">&#xe6a6;</i>成功状态提示</div>-->
  <!--left-->



    <div class="col-sm-9 col-md-9">
        <!--滚动图-->
        <div class="slider_main">
            <div class="slider">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:923px">
                        <ul style="width: 3692px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -923px;">

                           @foreach($banner as $k => $v)
                            <li style="float: left; width: 923px;"><a href="{{ $v -> advertise_https }}" target="_blank"><img src="{{ $v -> image_path }}"></a></li>
                        @endforeach

                        </ul></div>
                </div>
                <ol class="hd cl dots">
                    <li class="active">1</li>
                    <li class="">2</li>
                </ol>
                <a class="slider-arrow prev" href="javascript:void(0)"></a>
                <a class="slider-arrow next" href="javascript:void(0)"></a>
            </div>
        </div>

        {{--文章导航--}}
        <div class="mt-20 bg-fff box-shadow radius mb-5">
            <div class="tab-category">

                <form class="form-inline " >
                    <a href=""><strong class="current">文章导航</strong></a>
                    <div style="float:right">
                    <div class="form-group" >
                        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                        <div class="input-group">

                            <input type="text" class="form-control" id="exampleInputAmount" placeholder="请输入要搜索的关键字">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">搜索文章</button>
                    </div>
                </form>
            </div>
        </div>
        <br>

        <div>
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="active"><a href="javascript:;">Home</a></li>
                @foreach($cname as $k=>$v)
                <li role="presentation"><a href="javascript:;"> <span class="glyphicon glyphicon-list-alt" >{{ $v->cname }}</span></a></li>
                @endforeach

                <script src="/js/jquery-1.8.3.min.js"></script>
                <script type="text/javascript">

                    $(function () {

                        $('.nav-tabs').children().click(function () {

                            $(this).attr('class','active').siblings().removeAttr('class');

                            var n =$(this).index();

                            var cname=$(this).children().children().html();

                            // $.ajaxSetup({
                            //     async : false
                            // });
                            $.get('/',{'sousuocname':cname},function (datas) {

                                $('.xiangqing').empty();

                                for(var i=0;i<datas.length;i++){
                                    var xiangqing='       <div class="art_content ' +
                                        '">\n' +
                                        '                    <ul class="index_arc">\n' +
                                        '                        <!--遍历最新文章开始-->\n' +
                                        '                        \n' +
                                        '                            <li class="index_arc_item" style="height:160px" >\n' +
                                        '                                <a href="#" class="pic">\n' +
                                        '                                    <img class="lazyload" data-original="temp/art.jpg" alt="应该选" src="'+datas[i].articles_image_path +'" style="display: inline-block;width:165px;height:110px;">\n' +
                                        '                                </a>\n' +
                                        '                                <h4 class="title"><a href="/home/articledetail/'+datas[i].id+'">'+datas[i].title+'</a></h4>\n' +
                                        '                                <div class="date_hits">\n' +
                                        '                                    <span>'+datas[i].author+'</span>\n' +
                                        '                                    <span>'+datas[i].created_at+'</span>\n' +
                                        '   <span><a href="">'+datas[i].title+'</a></span>\n' +
                                        '                                    <p class="commonts"><i class="Hui-iconfont" title="点击量"></i> <span class="cy_cmt_count">'+datas[i].comment+'</span></p>\n' +
                                        '                                </div>\n' +
                                        '                                <div class="desc">'+datas[i].content+'</div>\n' +
                                        '                            </li>\n' +
                                        '                    \n' +
                                        '                    <!--遍历最新文章结束-->\n' +
                                        '\n' +
                                        '                    </ul>\n'

                                    $('.xiangqing').append(xiangqing);
                                }


                            },'json',false);

                            $('.wenzhangdaohang').eq(n).css('display','block').siblings().css('display','none');

                        })
                    })

                </script>
            </ul>

        </div>
        {{--文章导航结束--}}

        {{--文章列表--}}

        <div>
        {{--最新发布--}}
        <div class="wenzhangdaohang" style="display: block">
        <div class="mt-20 bg-fff box-shadow radius mb-5">
            <div class="tab-category">
                <a href=""><strong class="current">最新发布</strong></a>
            </div>
        </div>
        <div class="art_content">
            <ul class="index_arc">
            <!--遍历最新文章开始-->
            @foreach( $articles_new as $k => $v )
                <li class="index_arc_item" style="height:160px" >
                    <a href="#" class="pic">
                        <img class="lazyload" data-original="temp/art.jpg" alt="应该选" src="{{ $v -> articles_image_path }}" style="display: inline-block;width:165px;height:110px;">
                    </a>
                    <h4 class="title"><a href="/home/articledetail/{{$v->id}}">{{$v->title}}</a></h4>
                    <div class="date_hits">
                        <span>{{$v->author}}</span>
                        <span>{{$v->created_at}}</span>
                          <span><a href="/home/article/{{ $v -> column -> id }}">{{$v -> column -> cname}}</a></span>
                        <p class="commonts"><i class="Hui-iconfont" title="点击量"></i> <span class="cy_cmt_count">{{ $v -> comment }}</span></p>
                    </div>
                    <div class="desc">{!! $v->content !!}</div>
                </li>
            @endforeach
            <!--遍历最新文章结束-->

            </ul>
            <!--加载更多开始-->
        <div class="text-c mb-20" id="moreBlog">
            <a class="btn  radius btn-block " href="javascript:;" onclick="moreBlog();">没有更多了</a>
            <a class="btn  radius btn-block hidden" href="javascript:;">加载中……</a>
        </div>
            <!--加载更多结束-->
        </div>
        </div>
        {{--最新发布--}}

        {{--各级文章列表--}}
        @foreach($cname as $k=>$v)
            <div class="wenzhangdaohang" style="display: none">
            <div>
                <div class="mt-20 bg-fff box-shadow radius mb-5">
                    <div class="tab-category">
                        <a href=""><strong class="current">{{ $v->cname }}文章列表</strong></a>
                    </div>
                </div>
                {{--这是插入ajax请求回来数据的入口2--}}
                <div class="xiangqing">

                </div>

                <!--加载更多开始-->
                <div class="text-c mb-20" id="moreBlog">
                <a class="btn  radius btn-block " href="javascript:;" onclick="moreBlog();">没有更多了</a>
                <a class="btn  radius btn-block hidden" href="javascript:;">加载中……</a>
                </div>

            </div>
            </div>
        @endforeach
        {{--各级文章列表--}}

        </div>
        {{--文章列表结束--}}

  </div>

  <!--right-->
  <div class="col-sm-3 col-md-3">

    <!--站点声明-->
        <div class="panel panel-default mb-20">
            <div class="panel-body">
                <i class="Hui-iconfont" style="float: left;">&nbsp;</i>
                <div class="slideTxtBox">
                    <div class="bd">
                        <div class="tempWrap" style="overflow:hidden; position:relative; height:19px"><ul style="top: 0px; position: relative; padding: 0px; margin: 0px;">
                            <li style="height: 19px;"><a href="javascript:void(0);">个人博客测试版上线，欢迎访问</a></li>
                            <li style="height: 19px;"><a href="javascript:void(0);">内容如有侵犯，请立即联系管理员删除</a></li>
                            <li style="height: 19px;"><a href="javascript:void(0);">仅提供学习开源，不做商业用途</a></li>
                        </ul></div>
                    </div>
                </div>
            </div>
        </div>

   <!--博主信息-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>博主们的信息</strong></a>
            </div>
            <div class="tab-category-item">
                <ul class="index_recd">
                    <li class="index_recd_item"><i class="Hui-iconfont"></i>团队人员：郑志民,刘富生,冯毅,杨宇星</li>
                    <li class="index_recd_item"><i class="Hui-iconfont"></i>专业：phpWeb前后端开发</li>
                    <li class="index_recd_item"><i class="Hui-iconfont"></i>邮箱：<a href="mailto:66******88@qq.com">66****88@qq.com</a></li>
                    <li class="index_recd_item"><i class="Hui-iconfont"></i>定位：北京 · 昌平</li>
                </ul>
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
                    <a href="/home/label/{{ $v }}" class="tags{{ $rand }}">{{ $v }}</a>
                @endforeach
                </div>
            </div>
        </div>
        <!--图片-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>扫我关注</strong></a>
            </div>
            <div class="tab-category-item">
                <img data-original="temp/gg.jpg" class="img-responsive lazyload" alt="响应式图片" src="/homeblog/temp/gg.jpg">
            </div>
        </div>

        <!--友情链接-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>隔壁邻居</strong></a>
            </div>
            <div class="tab-category-item">
                @foreach($friend as $k=> $v)
                <span><i class="Hui-iconfont"></i><a href="{{$v->friendly_https}}" class="btn-link">{{$v->title}}</a></span>
                    <br>
              @endforeach
            </div>
        </div>
        <!--最近访客-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>最近访客</strong></a>
            </div>
            <div class="panel-body">
                <ul class="recent">
              @foreach($var as $k=>$v)
                @foreach($v as $kk=>$vv)
                    <div class="item"><img style="width:40px;height:40px" src="{{$vv->profile}}" alt=""></div>
                @endforeach
             @endforeach
                </ul>
            </div>
        </div>

        <!--分享-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>站点分享</strong></a>
            </div>
            <div class="panel-body" style="padding-bottom:15px;margin-left:10px;">
                <div class="bshare-custom icon-medium-plus"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><a class="bshareDiv" onclick="javascript:return false;"></a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
            </div>
        </div>




  </div>

</section>
@endsection



@section('title')
    英雄联盟
@endsection