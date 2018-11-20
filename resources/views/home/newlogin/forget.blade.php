<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="/ungmhome/images/icon.png" type="image/x-iocn" rel="shortcut icon" />
    <title>找回密码</title>

    <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/header.css">
    <link rel="stylesheet" href="/ungmhome/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
    <link href="/ungmhome/css/steps.css" rel="stylesheet">
</head>
<style type="text/css" media="screen">
.forgetpassword .container{
    text-align: center;
    padding-top: 44px;
    padding-bottom: 100px;
}
.forgetpassword  .forpassword{
    width: 1000px;
    height: 491px;
    background-color: #ffffff;
    box-shadow: 2px 4px 4px 0px 
        rgba(0, 0, 0, 0.1);
    padding-top: 36px;
  }
  .forgetpassword  .forpassword h4{
    font-family: MicrosoftYaHei-Bold;
    font-size: 18px;
    font-weight: 600;
    font-stretch: normal;
    line-height: 22px;
    letter-spacing: 0px;
    color: #333333;
    text-align: left;
    margin-left: 40px;
    margin-bottom: 10px;
  }
 .forgetpassword  #eliteregister .active{
    color: #f09b2b !important;
 }
 .container .forgetpas {

 }
  .forgetpas {
    background:#fff;
  }
    .forgetpas img{
    height:31px;
    display:inline;
    }
    .forgetpas a{
    float:right;
    margin-top:6px;
  }
  input::-webkit-input-placeholder { /* WebKit browsers */ 
color: #999; 
} 
input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */ 
color: #999; 
} 
input::-moz-placeholder { /* Mozilla Firefox 19+ */ 
color: #999; 
} 
input:-ms-input-placeholder { /* Internet Explorer 10+ */ 
color: #999; 
} 
</style>
<body>
    <div class="main">
        <!--1.网页头部-->
        <div class="headdddder">
            <div class="top">
                <div class="container">
                <!--------顶部---------->
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
            <!--logo区-->
            <div class="loginNav forgetpas">
                <div class="container">
                    <img src="/ungmhome/images/ungm.png" class="img-responsive" alt="">
                    <a href="/">返回首页</a>
                </div>
            </div>
        </div>
       
        <!--2.登录框-->
        <div class="content forgetpassword">
            <div class="container">
                <div class="forpassword">
                    <h4>找回密码</h4>
                    <hr>
                    <section id="wrapper" class="step-register">
                        <div class="register-box">
                            <div class="">
                                <!-- multistep form -->
                                <form action="/home/forget" id="msform">
                                {{csrf_field()}}
                                    <!-- progressbar -->
                                    <ul id="eliteregister">
                                        <li class="active">输入用户名</li>
                                        <li>验证身份</li>
                                        <li>重置密码</li>
                                        <li>完成</li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <h2 class="fs-title"></h2>
                                        <div style="width: 100%;height: 68px">
                                            <span>手机号：</span>
                                            <input type="text" id = "phone" name="name" value ="" class="inputtext phone" placeholder="请输入手机号" />
                                        </div>
                                        <div style="width: 100%;height: 68px">
                                            <span>验证码：</span>
                                            <input type="text" id = "code01" name="pass" onkeyup="value=value.replace(/[^\d]/g,'')" class="inputtext verification" maxlength="6" placeholder="验证码" />
                                        </div>
                                        <input type="button" id="getcode" name="" class="action-button gain" value="获取验证码" />
                                        <input type="button" id = "next01" name="next" class="next1 action-button verificationDown" value="下一步" />
                                    </fieldset>
                                    <fieldset class="yanzheng" id ="yanzheng" align="center">
                                        <h2 class="fs-title"></h2>
                                        <!-- <img src="/ungmhome/images/forgetpassword-mark.png"> -->
                                        <br>
                                        <br>
                                        <br>
                                        <input type="button" id = "next02" name="next" class="next2 action-button" value="下一步" />
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                    </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title"></h2>
                                        <div style="width: 100%;height: 68px">
                                            <span>设置新密码：</span>
                                            <input type="text" id = "newpassword" name="newpassword" class="inputtext password" placeholder="请输入新密码" />
                                        </div>
                                        <div style="width: 100%;height: 68px">
                                            <span>确认新密码：</span>
                                            <input type="text" id = "renewpassword" name="renewpassword" class="inputtext agpassword" placeholder="请确认新密码" />
                                        </div>
                                       <!--  <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
                                        <input type="button" id = "next03" name="next" class="next3 action-button newpassword" value="下一步" />
                                    </fieldset>
                                    <fieldset id = "sub">
                                        <!-- <img src="/ungmhome/images/forgetpassword-mark.png"> -->
                                        <br>
                                        <br>
                                        <h2 class="fs-title">重置成功，请牢记新的登录密码</h2>
                                       <a href = "/home/newlogin/login"  >修改成功</a>
                                    </fieldset>

                                </form>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--3.网页底部-->
        <!-- <iframe src="footer.html" frameborder="0" class="footer" scrolling="no"></iframe> -->
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
 <script src="/ungmhome/js/jquery.easing.min.js"></script>
    <!-- <script src="/ungmhome/js/register-init.js"></script> -->

<script>
    $(function() {
        $(".gain").click(function(){
        var pho=$(".phone").val();
        var y=$(".verification").val();
        if(!pho.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
            alert("手机号码格式不正确！请重新输入");
       
        }else{

        }
    })
          $("#phone").blur(function(){
        var pho=$(".phone").val();
        if(!pho.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
            alert("手机号码格式不正确！请重新输入");
        }else{
                  // 获取手机号和验证码
                var phone =  $('#phone').val();
                $.post('/home/forgetphone',{'phone':phone,'_token':'{{csrf_token()}}'}, function(data) {
                    if (data.code == 1001) { 
                        alert(data.mes);
                    }
             
               });
        }
    })
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    // $(".next1").click(function(){
    //  verificationDown();
    // });
        //定时器
    $('#getcode').click(function(){

        var time = 60;
        var interval = setInterval(function(){
            //判断
            if(time > 0){
                time--;
                //修改btn的内容
                $('#getcode').val('重新发送：' + time + 's');
                //禁用btn的点击效果  disabled属性 true
                $('#getcode').attr('disabled', true);
            }else{
                //还原btn的内容
                $('#getcode').val('发送验证码');
                //还原btn的点击效果  disabled属性 false
                $('#getcode').attr('disabled', false);
                //清除定时器
                clearInterval(interval);
            }
        }, 1000);
                var  phone=$('#phone').val();
                 $.get('/code/phone_code',{'phone':phone},function(msg){
                        //alert(msg);
                    if(msg.code==2){
                        alert('短信发送成功');
                    }else{
                        alert('短信发送失败');
                    }
                 },'json')
    });
       
                // alert(111);
             
            });
        //复制过来的
    $("#next01").click(function(){
        var pho=$(".phone").val();
        var y=$(".verification").val();
        // var sessioncode = 123456;
        //  $.post('/home/forget',{'phone':pho,'code':y,'_token':'{{csrf_token()}}'}, function(data) {
        //       alert(data.res);
        // });
        // var sessioncode = session('phone_code');
        if(!pho.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
            alert("手机号码格式不正确！请重新输入");
       
        return 0;
        }else if(y==""){
            alert("请输入验证码");
            $(".verification").focus();

        }else{
            $.post('/home/forgetcode',{'phone':pho,'code':y,'_token':'{{csrf_token()}}'}, function(data) {
                if (data.code != 1000) {
                    alert(data.mes);
                     $('#yanzheng').empty();
                         var yanzheng= '<h2 class="fs-title"></h2>\
                                        <br>\
                                        <br>\
                                        <br>\
                                        <br>\
                                        <a href = "/home/forget" class="next2 action-button" value="">返回上一步</a>\
                                        <br>\
                                        <br>\
                                        <br>\
                                        <br>\
                                        <br>\
                                        <br>';
                                    
                $('#yanzheng').append(yanzheng);return;
                }else { 
                    //alert(data.mes,'成功');
                } 
            });
            // if(animating) return false;
            //animating = true;
    
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
    
            //activate next step on progressbar using the index of next_fs
            $("#eliteregister li").eq($("fieldset").index(next_fs)).addClass("active");
            
            //show the next fieldset
            next_fs.show(); 
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale('+scale+')'});
                next_fs.css({'left': left, 'opacity': opacity});
                }, 
                duration: 800, 
                complete: function(){
                    current_fs.hide();
                    animating = false;
                }, 
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });

        }

    });

    $(".next2").click(function next2(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //activate next step on progressbar using the index of next_fs
        $("#eliteregister li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale('+scale+')'});
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
        });

    });
    $('#next03').click(function(){
        // 获取手机号和验证码
        var phone =  $('#phone').val();
        var code =   $('#code01').val();
        var newpassword =  $('#newpassword').val();
        var renewpassword =   $('#renewpassword').val();
        // alert(phone);
        $.post('/home/forget',{'phone':phone,'code':code,'newpassword':newpassword,'renewpassword':renewpassword,'_token':'{{csrf_token()}}'}, function(data) {
             // alert(data.mes);
            if (data.code == '1000') {
                return data.mes;
                // window.location.href=＂/home/newlogin/login";
            }else{
                $('#sub').empty();
                 var sub= '<fieldset>\
                 <img src="/ungmhome/images/forgetpassword-mark.png">\
                                    <br>\
                                    <br>\
                                    <h2 class="fs-title">重置失败，请确认手机号码是否正确</h2>\
                                     <a href = "/home/forget" name="submit" class="submit action-button" value="" >重新修改</a>\
                                    </fieldset>';
                $('#sub').append(sub);
            }
        });
     });

$(".next3").click(function(){
    var pas=$(".password").val();
    var pass=$(".agpassword").val();
    if(!pas.match(/^(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/)){
        alert("密码必须6位数以上且不能是纯字母");
         $(".pass").focus();
         return 0;
    }else if(pas!=pass){
        alert("l两次密码输入不一致！请重新输入");
        $(".pas").focus();
        return 0;
    }else{
        if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    //activate next step on progressbar using the index of next_fs
    $("#eliteregister li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale('+scale+')'});
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
    $(".next2").click();    
        };

});

$(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#eliteregister li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale('+scale+')'});
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });

});


$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#eliteregister li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 

        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})


</script>













    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // 
        // Login and Recover Password 
        // 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
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