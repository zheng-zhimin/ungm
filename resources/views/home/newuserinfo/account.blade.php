
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
                   @if($data->sex ==1)
                   <img src="/ungmhome/images/man.png" alt="" class="myImg"/>
                   @else
                    <img src="/ungmhome/images/woman.png" alt="" class="myImg"/>
                   @endif
                </li> 
               
               <li class="myOne">
               <label for="">ID</label>
               <input type="span" name="onlyID" value="{{$onlyID}}" disabled style="border:1px;background:#fff;">
               </li>

               <li class="myOne">
               <label for="">会员昵称</label>
               <input type="text" name = "vipname" value="{{$data->vipname}}">
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
                   <input type="radio" checked="checked" name="sex" id="radio" value="1"/ onclick="changeImg1()"><span>先生</span>
                   <input type="radio"  name="sex" id="radio" value="2"/ onclick="changeImg2()"><span>女士</span>
                @else
                     <input type="radio"  name="sex" id="radio" value="1" onclick="changeImg1()"/><span>先生</span>
                    <input type="radio" checked="checked" name="sex" id="radio" value="2" onclick="changeImg2()"/><span>女士</span>
                @endif
                  
               </li>
               
                <li class="myCity">
                    <label for="" style="float:left;">所在地区</label>
                    <select class="form-control" id="province" name="province" style="float:left;">
                        <option value="-1">省份</option>
                        @foreach ($address as $add)
                            <option value="{{$add->id}}" {{ $add->id == explode('-',$data->area)[0] ? 'selected' : ''  }}>{{ $add->name }} </option>
                        @endforeach
                    </select>
                    <input type="hidden" id="oldcity" value="{{substr($data->area,strripos($data->area,"-")+1)}}">
                    <select class="form-control myTwo" id="city" name="city">
                        <option value="-1">城市</option>

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
                <input type="hidden" name="homeuser" value="{{Session::get('homeuser') }}" placeholder="">
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
                    <input type="hidden" name="id" value="{{Session::get('homeuser')->id}}">
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
                <button >保存</button>
             
            </form>
                

            </div>
        </div>
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
  function changeImg1(){
        $(".myImg").attr("src","/ungmhome/images/man.png");
    }
  function changeImg2(){
    $(".myImg").attr("src","/ungmhome/images/woman.png");
  }


</script>
<script >
$(function(){
    var oldaddress = '{{$data->area}}';
    if(oldaddress != ''){
        if(oldaddress){
            var city = $('#oldcity').val();
        }

        //发送一个post请求
        $.ajax({
            type:'post',
            url:'/center/area',
            data:{key:$('#province').val()},
            dataType:'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){  //请求成功回调函数
                var status = data.status; //获取返回值
                var address = data.data;
                if(status == 200){  //判断状态码，200为成功
                    var option = '';
                    for(var i=0;i<address.length;i++){  //循环获取返回值，并组装成html代码
                        if( address[i]['id'] == city ){
                            option +='<option value='+address[i]['id']+' '+'selected >'+address[i]['name']+'</option>';
                        }else{
                            option +='<option value='+address[i]['id']+' >'+address[i]['name']+'</option>';
                        }

                    }
                }else{
                    var option = '<option>请选择城市</option>';  //默认值
                }

                $("#city").html(option);  //js刷新第二个下拉框的值
            },
        });
    }



    //初始化数据
    var url = '/center/area';
    $("#province").change(function(){
        var address = $(this).val();
        //发送一个post请求
        $.ajax({
            type:'post',
            url:url,
            data:{key:address},
            dataType:'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){  //请求成功回调函数
                var status = data.status; //获取返回值
                var address = data.data;
                if(status == 200){  //判断状态码，200为成功
                    var option = '';
                    for(var i=0;i<address.length;i++){  //循环获取返回值，并组装成html代码
                        option +='<option value='+address[i]['id']+'>'+address[i]['name']+'</option>';
                    }
                }else{
                    var option = '<option>请选择城市</option>';  //默认值
                }

                $("#city").html(option);  //js刷新第二个下拉框的值
            },
        });
    });
});
</script>
   
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