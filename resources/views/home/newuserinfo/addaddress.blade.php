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
        <form action="/center/add/address" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
           <ul> 

                <li class="addressOne">
                    <label for="" style="float:left;">具体地区</label>
            <select class="form-control" id="province" name="area" onchange="getcity()" style="float:left;">
                <option value="-1">省份</option>
               @foreach ($address as $add)
                   <option value="{{ $add->id }}">{{ $add->name }} </option>
                   @endforeach
            </select>
            <select class="form-control" id="city" name="city">
                <option value="-1">城市</option>
            </select>
                   
                </li>
            <li>
            <label for="">详细地址</label>
            <input type="text" name="address" style="width:400px;"></li>
         
            <li>
            <label for="">真实姓名</label>
            <input type="text" name="name">
            </li>
                
               
            <li>
            <label for="">手机号码</label>
            <input type="text" name="phone" class="myPhone"><i></i>
            </li>
              
            </ul>
            <button type="submit">添加</button>
            
        </form>
           

        </div>
    </div>



</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script>
    $(function(){
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