<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注 册</title>
    <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/header.css">
    <link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
    <link rel="stylesheet" href="/ungmhome/css/footer.css">
   <link href="/ungmhome/images/icon.png" type="image/x-iocn" rel="shortcut icon" />
    <style type="text/css">
        
       /*  input {
           background:url(/ungmhome/images/logImg1.png);
       } */
        input:focus{
            outline:none;
        }
    </style>
</head>
<body>
    <div class="main">
        <!--1.网页头部-->
        <div class="top">
            <div class="container">
            <!--------顶部-->
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
        <!--------logo区---------->
        <div class="logNav">
            <div class="container">
                <img src="/ungmhome/images/ungm.png" alt="" style="height:31px;">
                <a href="/" style="margin-top:6px;">返回首页</a>
            </div>
        </div>
        <!--2.注册框-->   
        <div class="container">
            <div class="logBox">



<!-- 显示错误的信息-->
@if (count($errors) > 0)
    <div  class="alert alert-warning" data-dismiss="alert" aria-label="Close">
        <ul class="text-warning">
            @foreach ($errors->all() as $error)
                <li  class="fa fa-exclamation-triangle">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="logOne">
                    <p>
                        <span>注册睿鹿网会员帐号</span>
                        <span class="one">已有账号，去<a href="/home/newlogin/login">登录</a></span>
                    </p>
                    
                </div>

        <form action="/home/newlogin/doregister" method="post">
                            {{csrf_field()}}
                <div class="logTwo">
                    <ul>
                        <li><!-- {{ old('phone') }} -->
                            <label for=""><span>手机号码 :</span></label>
                            <input type="phone" name="phone" id="phone" value="{{ old('phone') }}" placeholder="手机号码做为登录账号"/> <div></div>
                            <i></i>

                        </li>

                        <li>
                            <label for=""><span>设置密码 :</span></label>
                            <input type="password" name="password" class="" id="password" value="{{ old('password') }}" placeholder="建议使用两种字符组合6位数以上的密码格式"/>
                            <div class="eyeBtn"></div>
                            <i></i>
                        </li>
                        <li>
                            <label for=""><span>确认密码 :</span></label>
                            <input type="password" name="repassword" class="" id="passwordagain" value="{{ old('repassword') }}" placeholder="再次输入密码"/>
                            <div class="eyeBtn"></div>
                            <i></i>
                        </li>

                         <li>
                            <label for="">
                                <span> 验_证_码 :</span>
                            </label>

                            <input type="text" name="code" id="code" value="" style="width:200px;margin-right:10px" placeholder="请填写图中验证码"/>

                            <img src="/code" onclick="rand(this)" title="点击切换验证码" >
                            <i></i>
                        </li>
 <script type="text/javascript">
     function rand(obj)
     {
          obj.src='/code'+'?a='+Math.random();
     }

 </script> 
                        <li>
                            <label for=""><span>短信验证 :</span></label>
                            <input type="text" class="code1" id="phone_code" name="phone_code" value="{{ old('phone_code') }}" placeholder="请输入验证码"/>
                            <input type="button" class="code2" onClick="get_mobile_code()" value="获取验证码">
                        </li>
                    </ul>
                </div>
                <div class="readBtn">
                    <label for="">
                        <input type="checkbox" class="sel" checked="checked"><span>阅读并接受<a href="/home/copy">《睿鹿网网站服务协议》</a></span>
                    </label>
                </div>
                <div class="logBtn">
                    <input type="submit" class="logon loginHide" value="立即注册">
                </div>
        </form>
            </div>
        </div>
        <!--3.网页底部-->
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
                        <li><a href="/home/job">招贤纳士</a><b>|</b></li>
                        <li><a href="/home/contact">联系我们</a><b>|</b></li>
                        <li><a href="/home/dns">使用协议</a><b>|</b></li>
                        <li><a href="/home/copy">版权隐私</a><b>|</b></li>
                        <li><a href="/home/adv">广告服务</a><b>|</b></li>
                        <li><a href="/home/rank">排名推广</a></li>
                    </ul>
                </div>
                <div class="row info">
                    
                    <p style="">地址：北京市通州区万达广场C座</p>
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
                        <span>Copyright@2018 睿鹿网 All Rights Reserved</span>
                        <span>京ICP备16021025号-2</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script>
/*$(".eyesHide1").click(function(){
    if($("#password").attr("type")=="password"){
        $("#password").attr('type','text');
        $(".eyesShow1").show();
        $(".eyesHide1").hide();
    }
});
$(".eyesShow1").click(function(){
    if($("#password").attr("type")=="text"){
        $("#password").attr('type','password');
        $(".eyesShow1").hide();
        $(".eyesHide1").show();
    }
});
$(".eyesHide2").click(function(){
    if($("#passwordagain").attr("type")=="password"){
        $("#passwordagain").attr('type','text');
        $(".eyesShow2").show();
        $(".eyesHide2").hide();
    }
});
$(".eyesShow2").click(function(){
    if($("#passwordagain").attr("type")=="text"){
        $("#passwordagain").attr('type','password');
        $(".eyesShow2").hide();
        $(".eyesHide2").show();
    }
});*/

//输入密码的时候显示小眼睛
$('#password , #passwordagain').keyup(function(){
    $(this).addClass('logImg');
    $(this).siblings('.eyeBtn').show();
})

//点击小眼睛

$('.eyeBtn').click(function(){
    $(this).toggleClass('active');
    var that =$(this);
    if($(this).siblings('input').attr('type') == 'password'){
        that.siblings('input').attr('type','text');
    } else{
        that.siblings('input').attr('type','password');
    }
})
</script>
<script>
$(".logon").click(function(){
    var phone=$("#phone").val();
    var password=$("#password").val();
    var passwordagain=$("#passwordagain").val();
    var code1=$(".code1").val();
    var sel=$(".sel").val();
    var code=$("#code").val();
    if(phone==""||password==""||passwordagain==""||code1==""||code==""){
        alert("请输入完整");
        return false;
    }else if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
        alert("手机号格式不正确！请重新输入");
        
        return false;
    }else if(!password.match(/^(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/)){
        alert("密码必须6位数以上且不能是纯字母！请重新输入");
        $("#password").focus();
        return false;
    }else if(password!=passwordagain){
        alert("两次输入的密码不一致，请重新输入");
        $("#passwordagain").focus();
        return false;
    }else{
       // alert("注册成功");
        //function hello(){ 
        //    window.location = "/";
        //} 
       // window.setTimeout(hello,500);
    }
})
//限制点击
$('.sel').click(function(){
    //alert("请阅读并同意‘全球购网站服务协议’,才能注册成功！");
    if(!$(this).is(':checked')){
        $('.logon').attr('disabled',true).addClass('logonHide');
    } else {
        $('.logon').attr('disabled',false).removeClass('logonHide');
    }
})
    //手机号
$('#phone').blur(function(){
    let $Val = $(this).val();
    let patrn=/^[1][3,4,5,7,8][0-9]{9}$/;
    if(!patrn.test($Val) && $Val != ''){
        $(this).siblings('i').show().addClass('active').text('号码格式不正确');
    } else if($Val == ''){
        return;
    } else {
        $(this).siblings('i').show().removeClass('active').text('');
    }
})
$('#phone').keyup(function(){
    $(this).siblings('i').hide();
})

//设置密码
$('#password').blur(function(){
    let $Val = $(this).val();
    let patrn=/^(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/;
    if(!patrn.test($Val) && $Val != ''){
        $(this).siblings('i').show().addClass('active').text('密码格式不正确');
    } else if($Val == ''){
        return;
    } else {
        $(this).siblings('i').show().removeClass('active').text('');
    }
})
$('#password').keyup(function(){
    $(this).siblings('i').hide();
})

//确认密码
$('#passwordagain').blur(function(){
    let $Val = $(this).val();
    if($Val != $('#password').val()){
        $(this).siblings('i').show().addClass('active').text('密码输入不一致');
    } else if($Val == ''){
        return;
    } else {
        $(this).siblings('i').show().removeClass('active').text('');
    }
})
$('#passwordagain').keyup(function(){
    $(this).siblings('i').hide();
})
</script>

<script type="text/javascript">
    function get_mobile_code()
   {
                    var phone=$("#phone").val();
                    var password=$("#password").val();
                    var passwordagain=$("#passwordagain").val();
                    
                    
                    if(phone==""||password==""||passwordagain==""){
                        alert("请输入完整");
                        return false;
                    }else if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
                        alert("手机号码格式不正确！请重新输入");
                        
                        return false;
                    }else if(!password.match(/^(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/)){
                        alert("密码必须6位数以上且不能是纯字母！请重新输入");
                        $("#password").focus();
                        return false;
                    }else if(password!=passwordagain){
                        alert("两次输入的密码不一致，请重新输入");
                        $("#passwordagain").focus();
                        return false;
                    }

                        //定时器
                      var time = 60;
                         var interval = setInterval(function(){
                        //判断
                        if(time > 0){
                            time--;
                            //修改btn的内容
                            $('.code2').val('重新发送：' + time + 's');
                            //禁用btn的点击效果  disabled属性 true
                            $('.code2').attr('disabled', true);
                        }else{
                            //还原btn的内容
                            $('.code2').val('发送验证码');
                            //还原btn的点击效果  disabled属性 false
                            $('.code2').attr('disabled', false);
                            //清除定时器
                            clearInterval(interval);
                        }
                    }, 1000);
        var  phone=$('#phone').val();
        $.get('/code/phone_code',{'phone':phone},function(msg){
            if(msg.code==2){
                alert('短信发送成功');
            }else{
                alert('短信发送失败');
            }
        },'json')

   }
</script>
</html>