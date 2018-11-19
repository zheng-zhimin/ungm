<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="/ungmhome/images/icon.png" type="image/x-iocn" rel="shortcut icon" />
    
    <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="/ungmhome/css/header.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/footer.css">
    
    <script src="/ungmhome/js/jquery.js"></script>
    <script src="/ungmhome/bootstrap/js/bootstrap.js"></script>




</head>
<style type="text/css">
    .dropdown:hover .dropdown-menu{
        display: block;
    }
    .xxx{
    color: #3477ff !important;
    background-color: #fff !important;
    border-bottom: 2px solid;
    }
    .blue li a:hover{
       color:#3477ff;
    }
    
</style>

<div class="top">
        <div class="container">
            <!--顶部-->
            <div class="top-left">
                <img class="img-responsive" src="/ungmhome/images/tel.png">
                <img class="img-responsive" src="/ungmhome/images/mail.png">
            </div>
@if( ! Session::has('homeuser') )
            <div class="top-right">
                <span class=""><a href="/home/newlogin/login">登录</a></span>
                <span class="">|</span>
                <span class=""><a href="/home/newlogin/register">注册</a></span>
            </div>
@else
            <div class="top-right">
               <!--  <span class=""><img src="{{Session::get('homeuser')->profile}}" ></span>  -->
                
                
                <span class=""></span>
                @if(Session::get('homeuser')->identity==1)
                <span class=""><a href="/home/userinfo/index">{{Session::get('homeuser')->username}}</a></span>
                @else
                 <span class=""><a href="/home/userinfo/indexed">{{Session::get('homeuser')->username}}</a></span>
                @endif
                <span class="">|</span>
                <span class=""><a href="/home/logout">退出</a></span>
                <span class=""></span>
            </div>
@endif
        </div>
    </div>
<div class="navbar navbar-default" style="margin-bottom:0px;">       
    <div class="container">
        
        <!--第一部分：导航头部=头部+汉堡包-->
        <div class="navbar-header">
            <img class="navbar-brand img-responsive" src="/ungmhome/images/ungm.png" style="padding:0px;margin-top: 4px;height:auto;">
            <a href="#menu" class="navbar-toggle" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <!--第二部分：导航折叠=导航-->
        <div id="menu"class="collapse navbar-collapse">
            <ul class="nav navbar-nav" style="margin-left: 30px;">
                <li class="">
                    <a class="a1 nn-1" href="/">首页</a>
                </li>
                <li class="dropdown">
                    <a class="a2 nn-2" href="/home/gt" >全球贸易</a>
                    <ul class="dropdown-menu">
                        <li><a href="/home/gt/#1">UNGM</a></li>
                        <li><a href="/home/gt/#2">商务数据中心(进出口海关相关)</a></li>
                        <li><a href="/home/gt/#3">政策解读</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="a3 nn-3" href="/home/ct" >国内贸易</a>
                    <ul class="dropdown-menu">
                        <li><a href="/home/ct/#1">商机服务</a></li>
                        <li><a href="/home/ct/#2">展会论坛</a></li>
                        <li><a href="/home/ct/#3">商务热点</a></li>
                        <!-- <li><a href="/home/meeting/list">商务会议</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="a4 nn-4" href="/home/td" >招投标服务</a>
                    <ul class="dropdown-menu">
                   @if(  $_SERVER['REQUEST_URI'] == '/home/td' )
                        <li class="select-ss"><a href="#1">UNGM商机查询 </a></li>
                        <li id="select-s"><a href="#2">招投标信息查询</a></li>   
                   @else
                        <li class="select-ss"><a href="/home/td/#1">UNGM商机查询 </a></li>
                        <li id="select-s"><a href="/home/td/#2">招投标信息查询</a></li>   
                    @endif    
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="a5 nn-5" href="/home/jk" >集客</a>
                   <!--  <ul class="dropdown-menu">
                      <li><a href="/home/jk/#1">1</a></li>
                      <li><a href="/home/jk/#2">2</a></li>
                      <li><a href="/home/jk/#3">3</a></li> 
                   </ul> -->
                </li>
                <li class="dropdown">
                    <a class="a6 nn-6" href="/home/md" >会员发展</a>
                   <!--  <ul class="dropdown-menu">
                       <li><a href="/home/md/#1">1</a></li>
                       <li><a href="/home/md/#2">2</a></li>
                       <li><a href="/home/md/#3">3</a></li>
                   </ul> -->
                </li>
                <li class="dropdown">
                    <a class="a7 nn-7" href="/home/cc" >货币换算</a>
                   
                </li>
            </ul>

           <!--  <div class="search">
           <div class="input-group">
               <input type="text" class="form-control" id="keyword" placeholder="请输入关键字">
               <span class="inp">
                   <button onclick="find()">
                       <img class="img-responsive"src="/ungmhome/images/search.png">
                   </button>
           
                   <script type="text/javascript">
                       function find(){
                           var keyword=$("#keyword").val();
                           $.get('/home/soso',{'keyword':keyword},function (datas) {
                                  alert(datas);
                               },'json',false);
                       }
                   </script>
           
               </span>
           
           </div>   
                   </div> -->


        </div>
        <!--第三部分：搜索-->
    </div>
</div>

<script type="text/javascript">
    $(".a1").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a1").addClass("xxx");
    })
    $(".a2").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a2").addClass("xxx");
    })
    $(".a3").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a3").addClass("xxx");
    })
    $(".a4").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a4").addClass("xxx");
    })
    $(".a5").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a5").addClass("xxx");
    })
    $(".a6").click(function(){
        $(".xxx").removeClass("xxx");
        $(".a6").addClass("xxx");
    })

</script>


            <!-- 中间内容开始 -->
  <body>
        
   
            @section('content')
            @show
 </body>
            <!-- 中间内容结束-->



  


   




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
                    <ul class="blue">
                        <li ><a href="/home/about">关于我们</a><b>|</b></li>
                        <li ><a href="/home/job">招纳贤士</a><b>|</b></li>
                        <li ><a href="/home/contact">联系我们</a><b>|</b></li>
                        <li ><a href="/home/dns">使用协议</a><b>|</b></li>
                        <li ><a href="/home/copy">版权隐私</a><b>|</b></li>
                        <li ><a href="/home/adv">广告服务</a><b>|</b></li>
                        <li ><a href="/home/rank">排名推广</a></li>
                    </ul>
                </div>
                <div class="row info">
                    <p>公司名称：九鼎智成（北京）信息技术股份有限公司</p>
                    <p>地址：北京市通州区万达广场C座</p>
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
                        <span>Copyright@1999-2018 300.cn All Rights Reserved</span>
                        <span>京ICP备111111-1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  


