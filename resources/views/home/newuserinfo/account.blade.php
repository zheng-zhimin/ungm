
 @extends('home.layout.usercenter')


@section('title')
   个人中心
@endsection

@section('content')

    <link rel="stylesheet" href="/ungmhome/css/style.css">

<body>
    <div class="container">

       <!-- 显示错误的信息-->
                @if (count($errors) > 0)
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                            @foreach ($errors->all() as $error)
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                 <span >{{ $error }}</span>
                            @endforeach
                        </ul>
                    </div>
                @endif

        <div class="settingBtn">
            <p class="btnColor">基本资料</p>
            <p>密码管理</p>
        </div>
        <div class="accountSetting">
            <div class="personalData settingUl">
                <p>个人资料</p>

                <form action="/center/update" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
                {{csrf_field()}}
               <ul>

                
                <li>
                   <label for="test1" style="padding-left:200px;padding-top:50px;">
                    <input type="file" style="display:none"  id="test1" name="head" > 
                     <img src="{{$data->head}}" style="width:127px;height:127px;cursor:pointer;" title="点击更换头像" >
                    </label>
                </li> 
               
               <li class="myOne">
               <label for="">会员名</label>
               <input type="text" name="vipname" value="{{$data->vipname}}">
               </li>

               <li class="myOne">
               <label for="">会员昵称</label>
               <input type="text" name = "nicename" value="{{$data->nicename}}">
               <a href="">【修改】</a>
               </li>
               
               <li class="myOne">
               <label for="">邮箱</label>
               <!-- <input type="email" value="1234567890@qq.com"> -->
                <input type="email" name="email" value="{{$data->email}}">
               <a href="">【修改】</a></li>
               
               <li class="myName">
               <label for="">姓名</label>
               <input type="text" name = "name" value="{{$data->name}}">
               </li>
               
               <li class="mySex">
                   <label for="">性别</label>
               @if($data->sex ==1)
                   <input type="radio" checked="checked" name="sex" id="radio" value="1"/><span>先生</span>
                   <input type="radio"  name="sex" id="radio" value="2"/><span>女士</span>
                @else
                     <input type="radio"  name="sex" id="radio" value="1"/><span>先生</span>
                    <input type="radio" checked="checked" name="sex" id="radio" value="2"/><span>女士</span>
                @endif
                  
               </li>
               
               <li class="myCity">
                   <label for="">所在地区</label>
                   <select>
                       <option value="bj">北京</option>
                       <option value="sh">上海</option>
                       <option value="hz">杭州</option>
                   </select>
                   <select class="myTwo">
                       <option value="xz">请选择</option>
                   </select>
               </li>
               
               <li class="mySite">
               <label for="">联系地址</label>
               <input type="text" name="addr" value="{{$data->addr}}">
               </li>
               
               
               
               <li>
               <label for="">手机号码</label>
               <input type="phone" name="phone" value="{{$data->phone}}">
               </li>
               
               <li>
               <label for="">邮政编码</label>
               <input type="text" name="postcode" value="{{$data->postcode}}">
               </li>
               
               <li>
               <label for="">部门</label>
               <input type="text" name="department" value="{{$data->department}}">
               </li>
               
               <li>
               <label for="">职位</label>
               <input type="text" name="position" value="{{$data->position}}">
               </li> 

                <li>
                <label for="">QQ</label>
                <input type="text" name="qq" value="{{$data->qq}}">
                </li>

                <li>
                <label for="">微信</label>
                <input type="text" name="vx" value="{{$data->vx}}">
                </li>
                <input type="hidden" name="homeuser" value="{{Cache::get('homeuser') }}" placeholder="">
            </ul>

            <button type="submit">保存</button>

            </form>


            </div>

            <div class="lastPass settingUl">
                <p>密码管理</p>
            <form action="/center/pwd" method="post" accept-charset="utf-8">
            {{csrf_field()}}
                <ul>
                    
                    <li class="myRed">
                    <label for="">原密码</label>
                    <input type="hidden" name="id" value="{{Cache::get('homeuser')->id}}">
                    <input type="password" name="oldpwd">

                    <span>如要更改密码，需输入现有密码</span>
                    </li>

                    <li class="myLi">
                    <label for="">新密码</label>

                    <input type="password" class="newPwd" name="newpwd">

                    <span>如不更改密码,请留空(8-20个字符，区分大小写，推荐使用数字、字母和特殊符号组合,至少含有数字、字母)</span>
                    </li>

                    <li>
                    <label for="">确认新密码</label>

                    <input type="password" class="redoPwd" name="renewpwd">

                    <i></i>
                    </li>

                    

                   
                </ul>
                <button>保存</button>
             
            </form>
                

            </div>
        </div>
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script>
//手机号
$('.myPhone').blur(function(){
    let $Val = $(this).val();
    let patrn=/^[1][3,4,5,7,8][0-9]{9}$/;
    if(!patrn.test($Val) && $Val != ''){
        $(this).siblings('i').show().addClass('active').text('号码格式不正确');
        $(this).val('');
    } else if($Val == ''){
        $(this).siblings('i').show().addClass('active').text('');
    } else {
        $(this).siblings('i').show().removeClass('active').text('');
    }
})
//确认密码
$('.redoPwd').blur(function(){
    let $Val = $(this).val();
    if($Val != $('.newPwd').val()){
        $(this).siblings('i').show().addClass('active').text('密码输入不一致');
        //$(this).val('');
    } else if($Val == ''){
        $(this).siblings('i').show().addClass('active').text('');
    } else {
        $(this).siblings('i').show().removeClass('active').text('');
    }
})
$('.settingBtn p').click(function(){
    var _index = $(this).index();
    $(this).addClass('btnColor').siblings().removeClass('btnColor');
    $('.accountSetting .settingUl').eq(_index).show().siblings('.settingUl').hide();
})
</script>
</html>








@endsection