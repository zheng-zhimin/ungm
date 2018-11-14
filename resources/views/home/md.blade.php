@extends('home.layout.newindex')

@section('title')
    会员发展
@endsection


@section('content')

       
<style>
    .nn-6{
    color: #3477ff !important;
    border-bottom: 2px solid #3477ff;
}
  </style>
    <link rel="stylesheet" href="/ungmhome/css/style.css">
</head>
<body>
    <div class="main">
      
        <!--2.图片区-->
        <div class="img-responsive pic">
            <img src="/ungmhome/images/member6.jpg" alt="">
        </div>
        <!--3.会员区--> 
        <div class="members">
            <div class="contactWay">
                <img src="/ungmhome/images/member5.png" alt="">
            </div>
            <div class="container">
                <div class="text-center">
                    <img src="/ungmhome/images/member1.png" alt="">
                </div>
                <div class="member">
                    <ul class="memberUl">
                        <li class="memberLi">
                            <span class="memberOne">特权对比</span>
                            <span>优先排名</span>
                            <span>优先审核</span>
                            <span>黄金展位</span>
                            <span>每日报价次数</span>
                            <span>每日询盘次数</span>
                            <span>发布产品数量</span>
                            <span>搜索结果竞价广告</span>
                            <span>首页产品轮播图推荐</span>
                        </li>
                        <li>
                            <span class="memberTwo memberOne">普通用户</span>
                            <span><img src="/ungmhome/images/member2.png" alt=""></span>
                            <span>3个工作日</span>
                            <span>积分购买</span>
                            <span>3次/天</span>
                            <span>10次/天</span>
                            <span>1</span>
                            <span>积分购买</span>
                            <span><img src="/ungmhome/images/member2.png" alt=""></span>
                        </li>
                        <li>
                            <span class="memberThree memberOne">高级会员</span>
                            <span><img src="/ungmhome/images/member3.png" alt=""></span>
                            <span>2个工作日</span>
                            <span>积分购买</span>
                            <span>30次/天</span>
                            <span>50次/天</span>
                            <span>5</span>
                            <span>积分购买</span>
                            <span>1/次</span>
                            <div class="memberBtn1">
                                <input type="button" value="立即联系">
                                <p><img src="/ungmhome/images/member4.png" alt="">+86-10-66111661</p> 
                            </div>
                        </li>
                        <li>
                            <span class="memberFour memberOne">超级会员</span>
                            <span><img src="/ungmhome/images/member3.png" alt=""></span>
                            <span>1个工作日</span>
                            <span>积分购买</span>
                            <span>50次/天</span>
                            <span style="color:#59c55b;">不限</span>
                            <span style="color:#59c55b;">不限</span>
                            <span>积分购买</span>
                            <span>5/次</span>
                            <div class="memberBtn2">
                                <input type="button" value="立即联系">
                                <p><img src="/ungmhome/images/member7.png" alt="">+86-10-66111661</p> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
       
    </div>
</body>

<script>
    $('ul li').mouseenter(function(){
        $(this).children('.memberBtn1').show();
    })
    $('ul li').mouseleave(function(){
        $(this).children('.memberBtn1').hide();
    })
    $('ul li').mouseenter(function(){
        $(this).children('.memberBtn2').show();
    })
    $('ul li').mouseleave(function(){
        $(this).children('.memberBtn2').hide();
    })
</script>
</html>

@endsection