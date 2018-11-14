@extends('home.layout.newindex')

@section('title')
   企业资质
@endsection


@section('content')

       
    



    <link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
    <style>
        /*隐藏*/
        .hide{
            display: none !important;
        }
        /*上传的图片*/
        .add{
            width: 120px;
            height: 120px;
        }
        /*显示上传的图片*/
        .show{
            width: 120px;
            height: 120px;
        }
    </style>
</head>
<body>
    <!--1.资料提交-->
    <div class="container">
        <div class="supplierVerify">
            <div class="verifyOne">
                <span>申请供应商资质</span>
            </div>
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
            <div class="verifyTwo">


        <form action="/center/qiye/renzheng" method="post" enctype = "multipart/form-data">
        {{csrf_field()}}
                <ul>
                    <input type="hidden" name="id" value="{{Cache::get('homeuser')->id}}">
                    <li><label for="">公司名称：</label>
                        <input type="text" name="company">

                    </li>

                    <li><label for="">联系方式：</label>
                <input type="text" placeholder="务必填写真实号码，方便客服联系确认！" name="phone">
                    </li>

                    <li><label for="">营业执照编号：</label>
                        <input type="text" name="number">
                    </li>

                    <li><label for="">公司注册地址：</label>
                        <input type="text" name="addr">
                    </li>

                </ul>

                <div class="licensePic text-center">
                   
                        <input type="file" class="form-control myLicensePic" name="pic">
                        <img src="/ungmhome/images/verify1.png" class="add"/>
                        <img class="show hide"/>
                        <p><button type="reset" class="btn btn-default delPic btn-xs hide">删除</button></p>
                   
                    <p>上传营业执照照片</p>
                </div> 

                <input type="submit" value="提交" class="verifyBtn">
        </form>

               
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function()
    {
        //点击上传时实时显示图片
        $(".myLicensePic").change(function()
        {
            var src=getObjectURL(this.files[0]);//获取上传文件的路径
            $(".delPic").removeClass('hide');
            $(".add").addClass('hide');
            $(".show").removeClass('hide');
            $(".show").attr('src',src);//把路径赋值给img标签
        });

        //点击关闭按钮时恢复初始状态
        $(".delPic").click(function()
        {
            $(".delPic").addClass('hide');
            $(".add").removeClass('hide');
            $(".show").addClass('hide');
        });
    });

    //获取上传文件的url
    function getObjectURL(file)
    {
        var url = null;
        if (window.createObjectURL != undefined)
        {
            url = window.createObjectURL(file);
        }
        else if (window.URL != undefined)
        {
            url = window.URL.createObjectURL(file);
        }
        else if (window.webkitURL != undefined)
        {
            url = window.webkitURL.createObjectURL(file);
        }
        return url;
    }
</script>
</html>


@endsection