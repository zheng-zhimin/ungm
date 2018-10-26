@extends('home.layout.index')
@section('content')

@if (count($errors) > 0)
    <script type="text/javascript">
        layui.use(['layer', 'form'], function(){
            var layer = layui.layer
            ,form = layui.form;
            @foreach( $errors -> all() as $error )
                layer.msg('asd');
            @endforeach
        });

    </script>
@endif
<nav class="breadcrumb">
  <div class="container"> <i class="Hui-iconfont"></i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">文章</span> <span class="c-gray en">&gt;</span>  <span class="c-gray">{{$detail->title}}</span></div>
</nav>

<section class="container pt-20">
    <div class="row w_main_row">
        <div class="col-lg-9 col-md-9 w_main_left">
            <div class="panel panel-default  mb-20">
                <div class="panel-body pt-10 pb-10">
                    <h2 class="c_titile">{{$detail->title}}</h2>
                    <p class="box_c"><span class="d_time">发布时间：{{$detail->created_at}}</span><span>编辑：<a href="mailto:wfyv@qq.com">{{$detail->author}}</a></span>
                        @if( session('homeFlag') )
                            @if(!$collect)
                            <a href="/home/addcollection/{{$detail->id}}" style="color:#999"><span id="collect" > + 收藏</span></a>
                          @else
                          <a href="/home/delcollection/{{$detail->id}}"><span id="collect" style="color:#999"> 取消收藏</span></a>
                         @endif

                            @else
                             <a href="javascript:;"><span > </span></a>
                            @endif
                    </p>
                    <ul class="infos">
                             {!!$detail->content!!}

                    </ul>

                    <div class="keybq">
                        <p><span>关键字</span>：
                        @if(!empty($labels))
                        @foreach($labels as $k => $v)
                        <a href="/home/label/{{ $v }}" class="label label-default">{{ $v }}</a>
                        @endforeach
                        @endif
                        </p>
                    </div>



                    <div class="nextinfo">
                    @if($prev)
                        <p class="last">上一篇：<a href="/home/articledetail/{{$prev->id}}">{{$prev->title}} </a></p>
                    @else
                          <p class="last">上一篇：<a href="javascript:;">没有上一篇了 </a></p>
                    @endif


                    @if($next)
                        <p class="next">下一篇：<a href="/home/articledetail/{{$next->id}}">{{$next->title}}</a></p>
                    @else
                        <p class="next">下一篇：<a href="javascript:;">没有下一篇了</a></p>
                    @endif
                    </div>

                </div>
            </div>

            <div class="panel panel-default  mb-20">
                <div class="tab-category">
                <a href=""><strong>评论区</strong></a>
            </div>
            <div class="panel-body">
                <div class="panel-body" style="margin: 0 3%;">
                    <!--用于评论-->
                    <div class="mt-20" id="ct">
                        <div id="err" class="Huialert Huialert-danger hidden radius">成功状态提示</div>
                         <div class="col-md-10" name="comment" style="height:280px" >
                         <!-- 加载编辑器的容器 -->
                            <script id="container" name="content" type="text/plain" style="height:210px;width: 800px;">
                            </script>
                            <!-- 配置文件 -->
                            <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
                            <!-- 编辑器源码文件 -->
                            <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                               var ue = UE.getEditor('container',{
                                    toolbars: [
                                        ['bold', //加粗
                                         'italic', //斜体
                                         'underline', //下划线
                                         'undo', //撤销
                                         'simpleupload', //单图上传
                                         'emotion', //表情
                                        ]
                                    ]
                                });
                            </script>
                            <div id="articles_id" style="display:none;">{{ $detail -> id }}</div>
                            </div>  <div class="wangEditor-container"><div class="wangEditor-menu-container clearfix" style="position: static; top: auto; width: 100%;"><div class="menu-group clearfix"><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-terminal"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-terminal"></i></a></div><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-quotes-left"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-quotes-left"></i></a></div><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-bold"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-bold"></i></a></div></div><div class="menu-group clearfix"><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-picture"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-picture"></i></a></div><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-happy"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-happy"></i></a></div></div><div class="menu-group clearfix"><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-ccw"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-ccw"></i></a></div><div class="menu-item clearfix"><a href="#" tabindex="-1"><i class="wangeditor-menu-img-enlarge2"></i></a><a href="#" tabindex="-1" class="selected" style="display: none;"><i class="wangeditor-menu-img-shrink2"></i></a></div></div></div></div>
                        <div class="text-r mt-10">
                            <input class="btn btn-info" id="tjhf" type="submit" value="提交">
                        </div>
                    </div>
                    <div class="line" style="margin: 10px 0px;"></div>
                    <div class="mb-20">
                        <ul class="commentList" id="commentz">
                            @foreach($comment as $k => $v)
                            @if($v -> pid == 0)
                            <li class="item cl yjhf"> <a href="#"><i class="avatar size-L radius"><img alt="" src="{{ $v -> users -> profile }}"></i></a>
                                <div class="comment-main">
                                    <header class="comment-header">
                                        <div class="comment_id" style="display:none;">{{ $v -> id }}</div>
                                        <div class="comment-meta"><a class="comment-author" href="#">{{ $v -> users -> username }}</a>
                                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">{{ $v -> created_at }}</time>
                                        </div>
                                    </header>
                                    <div class="comment-body">
                                        {{ $v -> content }}
                                        @if( $v -> status != 3 )
                                        <div style="float:right;margin:10px 0px;">
                                            <a href="javascript:;" class="huifu">回复&nbsp;</a>
                                            @if(in_array($v -> id,$jubao))
                                            <a href="javascr:;" class="report" style="color:#ccc; pointer-events:none;opacity: 0.8;">已举报&nbsp;</a>
                                            @else
                                            <a href="javascr:;" class="report">举报&nbsp;</a>
                                            @endif
                                            @if(in_array($v -> id,$up))
                                            <a href="javascr:;" class="up" style="color:#ccc; pointer-events:none;opacity: 0.8;">顶一下&nbsp;</a>
                                            <a href="javascr:;" class="down" style="pointer-events:none;">踩一下</a>
                                            @elseif(in_array($v -> id,$down))
                                            <a href="javascr:;" class="up" style="pointer-events:none;">顶一下&nbsp;</a>
                                            <a href="javascr:;" class="down" style="color:#ccc; pointer-events:none;opacity: 0.8;">踩一下&nbsp;</a>
                                            @else
                                            <a href="javascr:;" class="up">顶一下</a>
                                            <a href="javascr:;" class="down">踩一下</a>
                                            @endif
                                        </div>
                                        @endif
                                        <div class="fmdiv" style="display:none; height:160px;">
                                            <div id="parent_id" style="display:none;">
                                                {{ $v -> id }}
                                            </div>
                                            <textarea class="textarea erjicontent" name="content" style="height:100px;margin-top:10px;" > </textarea>
                                            <button type="button" class="hf f-r btn btn-default size-S mt-10 quxiao" style="margin:10px;">取消回复</button>
                                            <button type="button" class="hf f-r btn btn-default size-S mt-10 erjihuifu">回复</button>
                                        </div>
                                        <ul class="commentList commente">
                                        @foreach($comment as $kk => $vv)
                                        @if($vv -> pid == $v -> id )
                                            <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="{{ $vv -> users -> profile }}"></i></a>
                                                <div class="comment-main">
                                                    <header class="comment-header">
                                                    <div class="comment_id" style="display:none;">{{ $vv -> id }}</div>
                                                        <div class="comment-meta"><a class="comment-author" href="#">{{ $vv -> users -> username }}</a>
                                                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">{{ $vv -> created_at }}</time>
                                                        </div>
                                                    </header>
                                                    <div class="comment-body">
                                                        <p>{{ $vv -> content }}</p>
                                                        @if( $vv -> status != 3 )
                                                        <div style="float:right;margin:10px 0px;">
                                                            @if(in_array($vv -> id,$jubao))
                                                            <a href="javascr:;" class="report" style="color:#ccc; pointer-events:none;opacity: 0.8;">已举报&nbsp;</a>
                                                            @else
                                                            <a href="javascr:;" class="report">举报&nbsp;</a>
                                                            @endif
                                                            @if(in_array($vv -> id,$up))
                                                            <a href="javascr:;" class="up" style="color:#ccc; pointer-events:none;opacity: 0.8;">顶一下&nbsp;</a>
                                                            <a href="javascr:;" class="down" style="pointer-events:none;">踩一下</a>
                                                            @elseif(in_array($vv -> id,$down))
                                                            <a href="javascr:;" class="up" style="pointer-events:none;">顶一下&nbsp;</a>
                                                            <a href="javascr:;" class="down" style="color:#ccc; pointer-events:none;opacity: 0.8;">踩一下&nbsp;</a>
                                                            @else
                                                            <a href="javascr:;" class="up">顶一下</a>
                                                            <a href="javascr:;" class="down">踩一下</a>
                                                            @endif
                                                        </div>
                                                        @endif

                                                    </div>

                                                </div>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        <div class="page dataTables_paginate paging_full_numbers" style="float:right;">
                            {!! $comment->render() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
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

                    <!--图片-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href="javascript:;"><strong>扫我关注</strong></a>
            </div>
            <div class="tab-category-item">
                <img class="img-responsive lazyload" alt="响应式图片" src="/homeblog/temp/gg.jpg" style="display: inline-block;">
            </div>
        </div>

                </div>
            </div>

</section>
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $('#tjhf').live('click',function(){
        var content = UE.getEditor('container').getContent();
        var id = $('#articles_id').html();
        $.get('/home/comment/'+id,{'content':content},function(data){
            if (data) {
                UE.getEditor('container').setContent('');
                alert('评论成功');
                var li = $('<li class="item cl yjhf"> <a href="#"><i class="avatar size-L radius"><img alt="" src="'+data['profile']+'"></i></a><div class="comment-main"><header class="comment-header"><div class="comment_id" style="display:none;">'+data['id']+'</div><div class="comment-meta"><a class="comment-author" href="#">'+data['uname']+'</a><time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">'+data['created_at']+'</time></div></header><div class="comment-body">'+data['content']+'@if( '+$v -> status+' != 3 )<div style="float:right;margin:10px;"><a href="javascript:;" class="huifu">回复&nbsp;</a>@if(in_array('+$v -> id+',$jubao))<a href="javascr:;" class="report" style="color:#ccc; pointer-events:none;opacity: 0.8;">已举报&nbsp;</a>@else<a href="javascr:;" class="report">举报&nbsp;</a>@endif @if(in_array('+$v -> id+',$up))<a href="javascr:;" class="up" style="color:#ccc; pointer-events:none;opacity: 0.8;">顶一下&nbsp;</a><a href="javascr:;" class="down" style="pointer-events:none;">踩一下</a>@elseif(in_array('+$v -> id+',$down))<a href="javascr:;" class="up" style="pointer-events:none;">顶一下&nbsp;</a><a href="javascr:;" class="down" style="color:#ccc; pointer-events:none;opacity: 0.8;">踩一下&nbsp;</a>@else<a href="javascr:;" class="up">顶一下</a><a href="javascr:;" class="down">踩一下</a>@endif</div>@endif<div class="fmdiv" style="display:none; height:160px;"><textarea class="textarea erjicontent" name="content" style="height:100px;margin-top:10px;"></textarea><button type="button" class="hf f-r btn btn-default size-S mt-10 quxiao" style="margin:10px;">取消回复</button><button type="button" class="hf f-r btn btn-default size-S mt-10 erjihuifu">回复</button></div><ul class="commentList commente"></ul></div></div></li>');
                $('#commentz').prepend(li);
            }else{
                alert('评论失败');
            }
        },'json');
    })

    $('.erjihuifu').live('click',function(){
        var n = $('.erjihuifu').index(this);
        var content = $('.erjicontent').eq(n).val();
        var id = $('#articles_id').html();
        var pid = $('.comment_id').eq(n).html();
        $.get('/home/recomment/'+id,{'content':content,'pid':pid},function(data){
            if (data) {
                $('.erjicontent').eq(n).val('');
                alert('评论成功');
                var li = $('<li class="item cl zjli"><a href="#"><i class="avatar size-L radius"><img alt="" src="'+data['profile']+'"></i></a><div class="comment-main zjcomment"><header class="comment-header commentheader"><div class="comment_id" style="display:none;">'+data['id']+'</div><div class="comment-meta"><a class="comment-author" href="#">'+data['uname']+'</a><time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">'+data['created_at']+'</time></div></header><div class="comment-body">'+data['content']+'@if( '+$vv -> status+' != 3 )<div style="float:right;margin-top:10px;">@if(in_array('+$vv -> id+',$jubao))<a href="javascr:;" class="report" style="color:#ccc; pointer-events:none;opacity: 0.8;">已举报&nbsp;</a>@else<a href="javascr:;" class="report">举报&nbsp;</a>@endif @if(in_array('+$v -> id+',$up))<a href="javascr:;" class="up" style="color:#ccc; pointer-events:none;opacity: 0.8;">顶一下&nbsp;</a><a href="javascr:;" class="down" style="pointer-events:none;">踩一下</a>@elseif(in_array('+$v -> id+',$down))<a href="javascr:;" class="up" style="pointer-events:none;">顶一下&nbsp;</a><a href="javascr:;" class="down" style="color:#ccc; pointer-events:none;opacity: 0.8;">踩一下&nbsp;</a>@else<a href="javascr:;" class="up">顶一下</a><a href="javascr:;" class="down">踩一下</a>@endif</div>@endif</div></div></li>');
                $('.commente').eq(n).prepend(li);
            }else{
                alert('评论失败');
            }
        },'json');
    })

    $('.report').live('click',function(){
        var n = $('.report').index(this);
        var id = $('#articles_id').html();
        var cid = $('.comment_id').eq(n).text();
        $.get('/home/myreport/'+id,{'cid':cid},function(data){
            if (data == '1') {
                alert('举报成功!');
                $('.report').eq(n).css('color','#ccc');
                $('.report').eq(n).css('pointerEvents','none');
                $('.report').eq(n).css('opacity','0.8');
                $('.report').eq(n).html('已举报&nbsp;');
            }else if(data == '3'){
                alert('已举报,请不要重复举报!');
            }else{
                alert('举报失败');
            }
        });
    })

    $('.up').live('click',function(){
        var n = $('.up').index(this);
        var id = $('#articles_id').html();
        var cid = $('.comment_id').eq(n).text();
        $.get('/home/myup/'+id,{'cid':cid},function(data){
            if (data == 1) {
                alert('点赞成功!');
                $('.up').eq(n).css('color','#ccc');
                $('.up').eq(n).css('pointerEvents','none');
                $('.up').eq(n).css('opacity','0.8');
                $('.down').eq(n).css('pointerEvents','none');
            }else{
                alert('点赞失败!');
            }
        });
    })

    $('.down').live('click',function(){
        var n = $('.down').index(this);
        var id = $('#articles_id').html();
        var cid = $('.comment_id').eq(n).text();
        $.get('/home/mydown/'+id,{'cid':cid},function(data){
            if (data == 1) {
                alert('讨厌成功!');
                $('.down').eq(n).css('color','#ccc');
                $('.down').eq(n).css('pointerEvents','none');
                $('.down').eq(n).css('opacity','0.8');
                $('.up').eq(n).css('pointerEvents','none');
            }else{
                alert('讨厌失败!');
            }
        });
    })

    $('.huifu').live('click',function(){
        var n = $('.huifu').index(this);
        $('.fmdiv').css('display','none');
        $('.fmdiv').eq(n).css('display','');
        $('.huifu').css('display','');
        $('.huifu').eq(n).css('display','none');
    })

    $('.quxiao').live('click',function(){
        $('.fmdiv').css('display','none');
        $('.huifu').css('display','');
    })
</script>
@endsection

@section('title')
    英雄联盟
@endsection