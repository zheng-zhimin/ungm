 @extends('home.layout.usercenter')


@section('title')
   个人中心
@endsection

@section('content')



        
    <link rel="stylesheet" href="/ungmhome/css/style.css">

<body>
    <div class="container">
        <div class="myNewAddress">
                <!-- 显示错误的信息-->
@if (count($errors) > 0)
    <div  class="alert alert-warning" data-dismiss="alert" aria-label="Close">
        <ul class="text-warning">
            @foreach ($errors->all() as $error)
                 <span>{{ $error }}</span>
            @endforeach
        </ul>
    </div>
@endif
        <form action="/center/updateaddress" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
           <ul> 

                <li class="addressOne">
                    <label for="">具体地区</label>
                    <select name="area" >
                            
                           <option value="{{$data['area']}}" >{{$data['area']}}</option>
                            <option value="北京" >北京</option>
                           <option value="广东省">广东省 </option>
                           <option value="上海市" >上海市 </option>
                           <option value="天津市">天津市 </option>
                           <option value="重庆市">重庆市 </option>
                           <option value="辽宁省" >辽宁省</option>
                           <option value="江苏省" >江苏省</option>
                           <option value="湖北省" >湖北省</option>
                           <option value="四川省" >四川省</option>
                           <option value="陕西省" >陕西省</option>
                           <option value="河北省" >河北省</option>
                           <option value="山西省" >山西省</option>
                           <option value="河南省" >河南省</option>
                           <option value="吉林省" >吉林省</option>
                           <option value="黑龙江" >黑龙江</option>
                           <option value="内蒙古" >内蒙古</option>
                           <option value="山东省" >山东省</option>
                           <option value="安徽省" >安徽省</option>
                           <option value="浙江省" >浙江省</option>
                           <option value="福建省" >福建省</option>
                           <option value="湖南省" >湖南省</option>
                           <option value="广西省" >广西省</option>
                           <option value="江西省" >江西省</option>
                           <option value="贵州省" >贵州省</option>
                           <option value="云南省" >云南省</option>
                           <option value="西藏" >西藏</option>
                           <option value="海南省" >海南省</option>
                           <option value="甘肃省" >甘肃省</option>
                           <option value="宁夏" >宁夏</option>
                           <option value="青海省" >青海省</option>
                           <option value="新疆" >新疆</option>
                           <option value="香港" >香港</option>
                           <option value="澳门" >澳门</option>
                           <option value="台湾" >台湾</option>
                           <option value="海外" >海外</option>
                           <option value="其他" >其他</option>

                    </select>
                   
                </li>
            <li>
            <label for="">详细地址</label>
            <input type="text" name="address" value="{{$data['address']}}"></li>
            
            <li>
            <label for="">姓名昵称</label>
            <input type="text" name="name" value="{{$data['name']}}" >
            </li>
            
            <input type="hidden" value="{{$data['id']}}" name="id">
               
            <li>
            <label for="">手机号码</label>
            <input type="text" name="phone" class="myPhone" value="{{$data['phone']}}"><i></i>
            </li>
              
            </ul>
            <button>修改</button>
            
        </form>
           

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
        //$(this).val('');
    } else if($Val == ''){
        $(this).siblings('i').show().addClass('active').text('');
    } else {
        $(this).siblings('i').show().removeClass('active').text('');
    }
})
</script>
</html>

@endsection