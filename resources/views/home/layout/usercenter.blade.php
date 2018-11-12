

<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/headeruser.css">
    <link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
     <link href="/ungmhome/images/ungm.png" type="image/x-iocn" rel="shortcut icon" />
    <link rel="stylesheet" href="/ungmhome/css/footer.css">

    



<style type="text/css">
.dropdown:hover .dropdown-menu{
    display: block;
}
.xxx{
    color: #3477ff !important;
    background-color: #00d6bc !important;
    
}
.personalheader .navbar-header img{
    width: 40px;
    height: 40px;
    background-color: #fbb7b7;
    float: left;
    margin-top: 9px;
    margin-right: 10px;
}
.personalheader .navbar-header .navbar-brand{
    font-family: MicrosoftYaHei-Bold;
    font-size: 18px;
    font-weight: 600;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    color: #ffffff;
}
.personalheader .navbar-collapse a{
        color: #ffffff !important;
        font-size: 16px;
        font-weight: 600;
        line-height: 30px;
}
.personalheader{
        background-color:#00b7a1 !important;
        border-color: #00b7a1;
}
.personalheader .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{
        background-color:#00d6bc;
        font-family: MicrosoftYaHei-Bold;
        font-size: 16px;
        font-weight: 600;
        font-stretch: normal;
        line-height: 30px;
        letter-spacing: 0px;
        color: #ffffff;
}
.personalheader .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    background-color: #00d6bc !important;
   
}
.personalheader .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
        color: #ffffff !important;
        background-color: #00d6bc !important;
    
}
.personalheader .navbar-default .navbar-nav li{
       
}
/* -----侧导航------ */
.navbarLeft{
    list-style:none;
}
.navbarLeft a{
    text-decoration: none;
}
.navbarLeft .menuu{
    width: 121px;
}
.navbarLeft .menuu ul li{
    list-style:none;
    
}
.navbarLeft .menuu ul li{
    background-color: #00b7a1;
    padding: 10px 20px;

    font-family: MicrosoftYaHei;
    font-size: 14px;
    font-weight: normal;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    color: #ffffff;
}
.navbarLeft .menuu ul li:hover{
    background-color: #00d6bc;
}
.backcolor{
    background-color: #00d6bc !important;
}
</style>
</head>
<body>
<div class="headdddder">
    <div class="top">

        <div class="container">
            <!--顶部-->
            <div class="top-left">
                <img class="img-responsive" src="/ungmhome/images/tel.png">
                <img class="img-responsive" src="/ungmhome/images/mail.png">
            </div>
@if( ! Cache::has('homeuser') )
            <div class="top-right">
                <span class=""><a href="/home/newlogin/login">登录</a></span>
                <span class="">|</span>
                <span class=""><a href="/home/newlogin/register">注册</a></span>
            </div>
@else
            <div class="top-right">
                <!-- <span class=""><img src="{{Cache::get('homeuser')->profile}}" ></span> -->
                
                
                <span class="">|</span>
                <span class="">{{Cache::get('homeuser')->username}}</span>
                <span class="">|</span>
                <span class=""><a href="/home/logout">退出</a></span>
                <span class="">|</span>
            </div>
@endif
        </div>


    </div>
</div>
<div class="personalheader navbar navbar-default">
    <div class="container">
        <!--第一部分：导航头部=头部+汉堡包-->
        <div class="navbar-header">
            <a href="#" class="navbar-brand">个人中心</a>
            <a href="#menu" class="navbar-toggle" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <!--第二部分：导航折叠=导航-->
        <div id="menu" class="collapse navbar-collapse">
          <!--  <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a data-toggle="dropdown" class="a1" href="/home/userinfo/index" >信息管理</a>
                  
              </li>
              <li class="dropdown">
                  <a data-toggle="dropdown" class="a2" href="/home/userinfo/transaction" >交易管理</a>
                  
              </li>
                     
              <li class="dropdown">
                  <a class="a3" href="" data-toggle="dropdown">账户设置</a>
                  
              </li>
              <li class="dropdown">
                  
                   <a href="/">返回首页</a>
              </li>
                     </ul> --> 
        <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a  class="a1" href="/home/userinfo/index" >信息管理</a>
                  
              </li>
              <li class="dropdown">
                  <a  class="a2" href="/home/userinfo/transaction" >交易管理</a>
                  
              </li>
          
              <li class="dropdown">
                  <a class="a3" href="/home/userinfo/account/{{Cache::get('homeuser')->id}}" >账户设置</a>
                  
              </li>
              <li class="dropdown">
                  
                   <a href="/">返回首页</a>
              </li>
          </ul>  
        </div> 
    </div>
</div>
<!--侧边栏-->
<div class="navbarLeft">
    <div class="container">
        <div class="row">
            
               <!--  <div class="menu1 menuu">
                   <ul class="">
                       <a href="#" ><li class="b1">采购管理</li></a>
                   </ul>
               </div>
               <div class="menu2 menuu">
                   <ul class="">
                       <a href="#" ><li class="b2">我的订单</li></a>
                       <a href="#" ><li class="b3">收货地址</li></a>
                       <a href="#" ><li class="b4">售后</li></a>
                   </ul>
               </div>
               <div class="menu3 menuu">
                   <ul class="">
                       <a href="/home/userinfo/account/{{Cache::get('homeuser')->id}}" ><li class="b5">基本资料</li></a>
                       <a href="#" ><li class="b6">密码管理</li></a>
                   </ul>
               </div> -->
            
            <div class="col-md-10">
                

                        <!-- 父模板中间内容开始 -->

                            @section('content')
                            @show
                        <!-- 父模板中间内容结束 -->

            </div>
        </div>
    </div>
</div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $(".menu2").hide();
    $(".menu3").hide();
    $(".a1").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a1").addClass("xxx");
        $(".menu1").show();
        $(".menu2").hide();
        $(".menu3").hide();
    })
    $(".a2").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a2").addClass("xxx");
        $(".menu1").hide();
        $(".menu2").show();
        $(".menu3").hide();
    })
    $(".a3").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a3").addClass("xxx");
        $(".menu1").hide();
        $(".menu2").hide();
        $(".menu3").show();
    })
    $(".b1").click(function(){
        $(".backcolor").removeClass("backcolor");
        $(".b1").addClass("backcolor");
    })
    $(".b2").click(function(){
        $(".backcolor").removeClass("backcolor");
        $(".b2").addClass("backcolor");
    })
    $(".b3").click(function(){
        $(".backcolor").removeClass("backcolor");
        $(".b3").addClass("backcolor");
    })
    $(".b4").click(function(){
        $(".backcolor").removeClass("backcolor");
        $(".b4").addClass("backcolor");
    })
    $(".b5").click(function(){
        $(".backcolor").removeClass("backcolor");
        $(".b5").addClass("backcolor");
    })
    $(".b6").click(function(){
        $(".backcolor").removeClass("backcolor");
        $(".b6").addClass("backcolor");
    })
    
</script>
</html>









<!-- footer -->
<div class="bot">
    <div class="container" style="padding:0px;">
        <div class="row bot-top">
            <div class="col-md-3">
                <div class="row tel">
                    <img src="/ungmhome/images/icon-phone.png" alt="">
                    <span>+86-10-66111661</span>
                </div>
                <div class="row log">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <div class="col-md-6 bot-last">
                <div  class="row bot-list">
                    <ul>
                        <li><a href="/home/about">关于我们</a><b>|</b></li>
                        <li><a href="/home/job">招纳贤士</a><b>|</b></li>
                        <li><a href="/home/contact">联系我们</a><b>|</b></li>
                        <li><a href="/home/dns">使用协议</a><b>|</b></li>
                        <li><a href="/home/copy">版权隐私</a><b>|</b></li>
                        <li><a href="/home/adv">广告服务</a><b>|</b></li>
                        <li><a href="/home/rank">排名推广</a></li>
                    </ul>
                </div>
                <div class="row info">
                    <p style="margin-bottom:6px;">公司名称：九鼎智成（北京）信息技术股份有限公司</p>
                    <p style="margin-bottom:6px;">地址：北京市通州区万达广场C座</p>
                    <p>邮箱：ungm@ungm.org.cn</p>
                </div>
            </div>
            <div class="col-md-3 qw">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-rt1">
                            <img src="/ungmhome/images/qw1.jpg" alt="">
                        </div>
                        <p style="margin-left:52px;">关注订阅号</p>
                    </div>
                    <div class="col-md-6">
                        <div class="top-rt2">
                            <img src="/ungmhome/images/qw2.jpg" alt="">
                        </div>
                        <p>关注服务号</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="padding:0px;">
                <div class="row">
                    <div class="copy">
                        <span style="padding-left:260px;">九鼎智成（北京）信息技术股份有限公司版权所有</span>
                        <span style="color:#434a66;">Copyright@1999-2018 300.cn All Rights Reserved</span>
                        <span style="color:#434a66;">京ICP备111111-1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
