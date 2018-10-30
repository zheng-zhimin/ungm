<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>登录界面</title>
      
                            <form>
                            <div class="form_text_ipt">
                                <input name="username" id="u" type="text" value="{{ old('username') }}" placeholder="账号" ><span id="span1" ></span>
                            </div>
                            
                            
                            
                            <div class="form_text_ipt">
                                <input name="password" type="password" value="" id="p" placeholder="密码"><span id="span2"> </span>
                            </div>
                            
                           
                            <div class="form_btn">
                                <button type="submit" onclick="return zzmcheck()" >登录</button>
                            </div>
                            <div class="form_reg_btn">
                                <a href="{{url('/home/newlogin/register')}}">马上注/册</a>
                            </div>
                          </form>  
                
                


    </body>
</html>
<script src="/js/jquery-1.8.3.min.js"></script>
<script src="/js/ajax3.0-min.js"></script>
<script>
    window.onload = function(){
    var oInput = document.getElementById("u");
    oInput.focus();
    }//设置光标初始位置一直在用户名位置目的是为了ajax失去焦点事件

    var userFlag=false;
    var passwordFlag=false;
    $('#u').blur(function(event) {
        var uname=$('#u').val();
        //console.log(uname);
        
        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
        $.post('/home/newajax',{'username':uname},function(msg){
    
            if(msg==1)
            {
                $("#span1").text('欢迎回来请填写密码');
                $("#span1").css("color","green");
                userFlag=true;

            }else{
                $("#span1").text('请填写正确的用户名');
                $("#span1").css("color","red");
                userFlag=false;

            }
        })
    });
       
       function zzmcheck()
        {
            var abc = $(" input[ name='password' ] ").val();
            
             if(!abc=='')
                  {
                    passwordFlag=true;
                  }
                  else{
                    passwordFlag=false;
                  }
            

             if(userFlag && passwordFlag)
                    {   
                        return true;
                    }else{
                        return false;
                    }

                    //发送ajax 
            
         }

    
//--------------new Array()

//----------------------------------------
</script>   
<!--引入layer弹窗开始做登录--> 
<!-- <script type="text/javascript" src="/homelog/layui/layui.all.js"></script> -->
<script type="text/javascript" src="/layui/layui.all.js"></script>
<!-- <script>
//初始化layer一般直接写在一个js文件中
layui.use(['layer', 'form'], function(){
  var layer = layui.layer
  ,form = layui.form;

 /* layer.msg('验证登录引入的layer');*/
});


</script> -->
<!-- 刷新父页面  -->
<script type="text/javascript">

        $('form button[type=submit]').click(function(){
            var username = $("#u").val();
            var password = $("#p").val();
            $.post('/home/newlogin/dologin',{'username':username,'password':password},function(msg){
                console.log(msg)
                
                 
                 if(msg=='success')
                 {
                    layer.msg('登录成功');
                    window.location.href='/'; //直接跳到前台主页
                 }
                
                
                
            });
            return false;
        })

    </script>
    


