 @extends('home.layout.usercenter')


@section('title')
   个人中心
@endsection

@section('content')



    <link rel="stylesheet" href="/ungmhome/css/style.css">

<body>
    <div class="container">
        <div class="myNewAddress">

        <form action="/center/add/address" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
           <ul> 

                <li class="addressOne">
                    <label for="">具体地区</label>
                    <select name="area">
                       
                        <option value="北京" >北京</option>
                        <option value="上海" >上海</option>
                        <option value="杭州" >杭州</option>
                    </select>
                   
                </li>
            <li>
            <label for="">详细地址</label>
            <input type="text" name="address"></li>
         
            <li>
            <label for="">真实姓名</label>
            <input type="text" name="name">
            </li>
                
               
            <li>
            <label for="">手机号码</label>
            <input type="text" name="phone" class="myPhone"><i></i>
            </li>
              
            </ul>
            <button>添加</button>
            
        </form>
           

        </div>
    </div>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>
<script>
//手机号
$('.myPhone').click(function(){
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
</script>
</html>

@endsection