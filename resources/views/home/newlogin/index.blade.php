<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>登 录</title>
    <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/header.css">
    <link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
      <link href="/ungmhome/images/icon.png" type="image/x-iocn" rel="shortcut icon" />
    <link rel="stylesheet" href="/ungmhome/css/footer.css">
  
    
</head>
<style type="text/css" media="screen">
    .loginNav{
        height: 70px;
        background-color: #ffffff; 
        padding-top: 25px;
        padding-bottom:25px;
    }
    .loginNav .container{
        padding:0px;
    }
    .loginNav img{
        display: inline;

    }
    .loginNav a{
       float: right;
    }
    .loginPage{
        background: url(/ungmhome/images/log-bg.png) ;
        padding-top: 222px;
        padding-bottom: 164px;
        height: 750px !important;
    }
    .login{
        width: 370px;
        height: 364px;
        background-color:#ffffff;
        padding: 40px 45px;
        float: right;
        text-align: center;
    }
    .login h3{
        font-family: MicrosoftYaHei-Bold;
        font-size: 20px;
        font-weight: 600;
        font-stretch: normal;
        line-height: 22px;
        letter-spacing: 0px;
        color: #00b7a1;
        margin-bottom: 25px;
    }
    .login ul li{
        width: 100%;
        margin:15px 0px ;
    }

    .login ul li .form-control{
        border: 1px solid #d8d8d8;
        width: 238px;
        display: inline;
        height: 40px;
        border-left: none;
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
    }
    .login ul li button{
        float: left;
        width: 42px;
        height: 40px;
        border-radius: 4px 0px 0px 4px;
        border: solid 1px #d8d8d8;
        background: #ffffff;
    }
    .login .loginBtn button{
        width: 100%;
        margin-bottom: 33px;
        font-size: 14px;
        height: 38px;
        border-radius: 4px;
    }
    .login .loginBtn .a1{
        float: left;
        color: #00b7a1;
    }
    .login .loginBtn .a2{
        float: right;
    }
    .login .loginBtn img{
        margin-right: 10px;
    }
    .login .btn-success{
        background-color: #00b7a1;
    }
.loginNav img{
    height:30px;
}
.loginNav{
    padding-top: 8px;
    height:46px;
}
</style>
<body>
    <div class="main">
        <!--1.网页头部-->
        <div class="headdddder">
            <div class="top">
                <div class="container">
                <!--顶部-->
                    <div class="top-left">
                        <img class="img-responsive" src="/ungmhome/images/tel.png">
                        <img class="img-responsive" src="/ungmhome/images/mail.png">
                    </div>
                    <div class="top-right">
                        <span class=""><a href="/home/newlogin/login">登录</a></span>
                        <span class="">|</span>
                        <span class=""><a href="/home/newlogin/register">注册</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!--logo区-->
        <div class="loginNav">
            <div class="container">
                <img src="/ungmhome/images/ungm.png" class="img-responsive" alt="">
                <a href="/" style="margin-top:6px;">返回首页</a>
            </div>
        </div>
        <!--2.登录框-->
        <div class="loginPage" style="height: 750px;">
            <div class="container">
                <div class="login">
                    <h3>账号登录</h3>
        
                    <ul>
                        <li>
                        <button type="">
                        <img src="/ungmhome/images/log-u.png">
                        </button>
        
        <input  class="form-control phone" name="username" placeholder="请输入手机号" id="u" type="text" value="{{ old('username') }}" placeholder="账号" >
                        </li>
                        <li>
                        <button>
                        <img src="/ungmhome/images/log-p.png">
                        </button>
        
        <input class="form-control pass" name="password" type="password" value="" id="p" placeholder="请输入密码">
                        </li>
                    </ul>

                    <div class="loginBtn">
                        <div class="">
       <button type="button"   value="" onclick="send()" class="btn btn-lg btn-success log" id="id8s">立即登录</button>
                        </div>
        

                        <div class="">
                            <a href="{{url('/home/newlogin/register')}}" class="a1"><img src="/ungmhome/images/log-u.png">立即注册</a>
                            <a href="/home/forget" class="a2"><img src="/ungmhome/images/log-p.png">忘记密码</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--3.网页底部-->
       
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/layui/layui.all.js"></script>
<script type="text/javascript">
    
 function send()
 {
    var username = $("#u").val();
    var password = $("#p").val();
            $.post('/home/newlogin/dologin',{'_token':'{{csrf_token()}}','username':username,'password':password },function(msg){
                console.log(msg)
                
                
                if(msg=='success')
                 {
                    layer.msg('登录成功');
                    window.location.href='/#1'; //直接跳到前台主页的#1这个锚点上
                 }else{
                    layer.msg('登录失败');
                 }
                
                
                
            });
            
 }

</script>



<script>
   var H = $(window).height()-390;
    $('.loginPage').height(H);
    $(".log").click(function(){
        var pho=$(".phone").val();
        var pass=$(".pass").val();
        if(!pho.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
            alert("手机号码格式不正确！请重新输入");
        
        $(".phone").focus();
        return false;
        }else if( !pass.match(/^(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/) ) 
            {
                 alert("密码必须6位数以上且不能是纯字母！请重新输入");

                $(".pass").focus();
                return false;

            }else{
              // alert("登录成功");
               // function hello(){ 
                //window.location = "index.html"
                //} 
                //window.setTimeout(hello,500);
            }
    })


</script>


 

    








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
                   <p>邮箱：ruilu@51ruilu.com</p>
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
                        <span >Copyright@1999-2018 300.cn All Rights Reserved</span>
                        <span >京ICP备111111-1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
