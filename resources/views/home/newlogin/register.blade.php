<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>注册界面</title>

                    
                    <div class="login_form">
                        <div class="login_title">
                            注册
                        </div>

<!-- 显示错误的信息-->
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li><!-- 做个样式 -->{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <form action="/home/newlogin/doregister" method="post">
                            {{csrf_field()}}
                             <div class="form_text_ipt">
                                <label for="phone"><i ></i></label>
                                <input type="phone" name="phone" id="phone" placeholder="请输入手机号">
                            </div> 

                            <div class="form_text_ipt">
                                <label for="phone_code"><i ></i></label>

                               <input type="text"  id="phone_code" name="phone_code" class="verification"   style="width: 90px;" /> 

                               <input  type="button" value=" 获取 " style="width: 60px;"  onClick="get_mobile_code()">
                            </div> 
                      
                            
                            
                            <div class="form_text_ipt">
                                <input name="password" type="password" placeholder="密码">
                            </div>
                            <div class="ececk_warning"><span>密码不能为空</span></div>
                            <div class="form_text_ipt">
                                <input name="repassword" type="password" placeholder="重复密码">
                            </div>
                            <div class="ececk_warning"><span>重复密码不能为空</span></div>
                            
                            
                            <div class="form_btn">
                                <button type="submit" >注册</button>
                            </div>
                           
                        </form>
                      
                    </div>
                </div>
            </div>
      
        <script type="text/javascript" src="/js/jquery-1.8.3.min.js" ></script>
        <script type="text/javascript" src="/js/common.js" ></script>
        <script type="text/javascript" ></script>
    
    </body>
</html>
<script type="text/javascript">
     function get_mobile_code()
   {
    var  phone=$('#phone').val();
    $.get('/code/phone_code',{'phone':phone},function(msg){
        /*alert(msg);*/
        if(msg.code==2){
            alert('短信发送成功');
        }else{
            alert('短信发送失败');
        }
    },'json')

   }
</script>