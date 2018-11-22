@extends('home.layout.newindex')

@section('title')
    产品信息
@endsection


@section('content')

 <link rel="stylesheet" href="/ungmhome/css/style.css">
 <style>
        input:focus {
            outline: none; 
        }
        .table{
            margin-bottom:0px;
            width:74%;
        }
        th{
            text-align:center;
        }
    </style>

    <div class="main">
        <!--1.网页头部-->
        
        <!--2.图片区-->
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">首页</a></li>
                    <li><a href="">供应信息</a></li>
                    <li><a href="">工业品</a></li>
                    <li><a href="">全部</a></li>
                    <li class="curve1"><a href="">{{$data->title}}</a></li>
                </ul>
            </div> 
        </div>
        <!--4.订单详情页区-->
        <div class="lineItem">
            <div class="container">
                <div class="lineItemone">
                    <div class="oneLt">
                        <div class="ltTop">
                            <img src="/ungmhome/images/purchasing7.png" alt="">
                        </div>
                        <div class="ltBot">
                            <ul>
                                <li><img src="/ungmhome/images/purchasing7.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing7.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing7.png" alt=""></li>
                                <li><img src="/ungmhome/images/purchasing7.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="oneRt">
                        <h1>{{$data->title}}</h1>
                        <div class="rtTop">
                            <span class="rtTop1">价格</span>
                            <span class="rtTop2">{{$data->price}}</span>
                        </div>
                        <div class="rtCen">
                            <ul>
                                <li class="rtCen1"><span>供应总量</span><b>{{$data->num}}</b></li>
                                <li class="rtCen2">
                                    <span style="float:left;">订购信息</span>
                                    <div class="table-responsive text-center">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width:110px;">起订量</th>
                                                <th style="width:110px;">价格</th>
                                                <th>采购量</th>
                                            </tr>
                                            <tr>
                                                <td>暂无数据</td>
                                                <td>暂无数据</td>
                                                <td>
                                                    <input class="btn1 addBtn min" type="button" value="-" />
                                                    <input class="btn2 join-money" type="text" value="1">
                                                    <input class="btn3 addBtn add" type="button" value="+" />
                                                    暂无数据
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                                <li class="rtCen3">
                                    <span class="cen1">总价</span>
                                    <span class="cen2">暂无数据</span>
                                    <span class="cen3">/ 暂无数据</span>
                                </li>
                            </ul>
                        </div>
                        <div class="rtBot">
                            <input type="button" value="加入购物车" class="rtBot1"/>
                            <a href="/home/productcart/{{$data->id}}"><input type="button" value="立即询价" class="rtBot2"/></a>
                               <a onclick="resize_window()"><img border="0" src="http://wpa.qq.com/pa?p=2:837495362:51" alt="点击在线咨询" /></a>
                               <form action="/home/collect" method="post">
                                {{csrf_field()}}
                            <input type="hidden" name = "id" value="{{$data->id}}" />
                            <input type="submit" value="立即收藏" class="rtBot3"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lineItemtwo">
                    <div class="tops">
                        <span class="topOne topColor">商品详情</span>
                        <span class="topTwo">供应商信息</span>
                        <span class="topThree">联系方式</span>
                    </div>
                    <div class="bots">
                        <div class="botOne ulTab">
                            <h4>基本参数</h4>
                            <ul>
                                <li><label for="">产地</label>{{$data->num}}</li>
                                <li><label for="">产品认证</label>暂无数据</li>
                                <li><label for="">驱动方式</label>内燃机驱动</li>
                                <li><label for="">新旧程度</label>暂无数据</li>
                                <li><label for="">用途</label>暂无数据</li>
                                <li><label for="">执行标准</label>暂无数据</li>
                                <li><label for="">是否可定制</label>暂无数据</li>
                                <li><label for="">品牌</label>暂无数据</li>
                                <li><label for="">种类</label>暂无数据</li>
                                <li><label for="">械大小</label>暂无数据</li>
                                <li><label for="">级别</label>暂无数据</li>
                                <li><label for="">类型</label>暂无数据</li>
                                <li><label for="">重量</label>暂无数据</li>
                            </ul>
                            <h4>详细说明</h4>
                            <div class="text-center">
                                <img src="images/lineItem6.png" alt="">
                            </div>
                            <p>
                                {{$data->content}}
                            </p>
                            
                        </div>
                        <div class="botTwo ulTab">
                            <ul>
                                <li><label for="">公司名</label> {{$data->company}}</li>
                                <li><label for="">经营模式</label>{{$data->industry}}</li>
                                <li><label for="">注册资本</label>暂无数据</li>
                                <li><label for="">公司注册时间</label>暂无数据</li>
                                <li><label for="">公司所在地</label>暂无数据</li>
                                <li><label for="">企业类型</label>暂无数据</li>
                                <li><label for="">资料认证</label>暂无数据</li>
                            </ul>
                            <div class="twoUl">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">主营行业</div>
                                            <div class="col-md-10">{{$data -> lanmu}}</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">经营范围</div>
                                            <div class="col-md-10">暂无数据</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="botThree ulTab">
                            <ul>
                                <li><label for="">姓名</label>暂无数据</li>
                                <li><label for="">手机</label>暂无数据</li>
                                <li><label for="">公司名称</label>暂无数据</li>
                                <li><label for="">电话</label>暂无数据</li>
                                <li><label for="">地区</label>暂无数据</li>
                                <li><label for="">详细地址</label>暂无数据</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--5.网页底部-->
       
    </div>

<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.ziyun.com.cn/vclient/?webid=142149";s.parentNode.insertBefore(c,s);})();</script>
<script type="text/javascript">
<script>
$('.ltBot ul li img').click(function(){
    $('.ltTop img').attr('src',$(this).attr('src'));
})

$('.tops span').click(function(){
    var _index = $(this).index();
    $(this).addClass('topColor').siblings().removeClass('topColor');
    $('.bots .ulTab').eq(_index).show().siblings('.ulTab').hide();
})
$('.rtBot1').click(function(){
    alert('加入购物车成功');
})
$('.rtBot3').click(function(){
    alert('收藏成功');
})
$(function(){
    var t = $(".join-money");
    $(".add").click(function() {
         t.val(parseInt(t.val()) + 1); //点击加号输入框数值加1
    });
    $(".min").click(function(){
        t.val(parseInt(t.val())-1); //点击减号输入框数值减1
        if(t.val()<=0){
            t.val(parseInt(t.val())+1); //最小值为1
        }
    });
})
</script>


@endsection