

    <!-- 这里放大网站header的html -->
    <!DOCTYPE html>
    <html>
    <head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="keywords" content="采购出口贸易">
<meta name="description" content="货源出口贸易买卖网站。">
<meta name="csrf-token" content="{{ csrf_token() }}">
<LINK rel="Bookmark" href="/homeblog/favicon.ico" >
<LINK rel="Shortcut Icon" href="/homeblog/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    </head>
  
    <div>
        <img src="/newhome/img/1.jpg" alt="">
    </div>

            <!-- 中间内容开始 -->
  <body>
        
   
            @section('content')
            @show
 </body>
            <!-- 中间内容结束-->




   <div>
        <img src="/newhome/img/2.jpg" alt="">
    </div>
   <!--  这里放大网站fotter 的html-->
 </html> 