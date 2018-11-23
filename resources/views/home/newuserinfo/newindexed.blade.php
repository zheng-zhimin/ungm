@extends('home.layout.usercenter')


@section('title')
个人中心
@endsection

@section('content')



        <!-- {{$user->id}}
               
               {{$userdetail[0]->email}} -->


    <link rel="stylesheet" href="/ungmhome/css/style.css">
<style type="text/css" media="screen">
         .myUpload
            {
                position: absolute;
                width: 120px;
                height: 120px;
                opacity: 0;
                z-index: 100;
            }
        /*隐藏*/
            .hide
            {
                display: none !important;
            }
            /*上传的图片*/
            .add
            {

                width: 120px;
                height: 120px;
            }
            /*显示上传的图片*/
            .show
            {

                width: 120px;
                height: 120px;
            }
            .closes
            {

                width: 37px;
                height: 22px;
                left: 110px;
                z-index: 200;
                cursor: pointer;
            }
.hidden-xs-down{
    font-family: MicrosoftYaHei;
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
    color: #00b7a1 !important;
}

.puma-addPurchasing .container .top-menu ul a:last-child {
    float: right;
    font-family: MicrosoftYaHei;
    font-size: 16px;
    font-weight: 600;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
}
.puma-addPurchasing{

}
.active a{
    color:#00b7a1 !important;
}
.puma-addPurchasing .tab-pane .text{
    font-family: MicrosoftYaHei;
    margin:40px 40px;
    padding:14px 0;
    height: 500px;
    background-color: #ffffff;
    box-shadow: 0 0 15px 1px 
        rgba(0, 0, 0, 0.1);
}
.puma-addPurchasing .tab-pane .text p{
    font-size: 24px;
    letter-spacing: 4px;
    font-weight: 600;
    color: #00b7a1;
    text-align:center;
    padding-top:124px;
} 

.puma-addPurchasing .menuu{
    width: 121px;
}
.puma-addPurchasing .menuu ul li{
    list-style:none;
    
}
.puma-addPurchasing .menuu ul li{
    background-color: #00b7a1;
    padding: 10px 20px;

    font-family: MicrosoftYaHei;
    font-size: 14px;
    font-weight: normal;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    color: #ffffff;
}
.bac{
    background-color: #00d6bc !important;
}
.puma-addPurchasing .menuu ul li:hover{
    background-color: #00d6bc;
}
/* ---- */
.backcolor{
    background-color: #00d6bc !important;
}
.top-menu ul li a{
    height:63px;
}
.supplierReleaseOrder{}

.tab-content{
    overflow:auto;
    margin-top:0px !important;
}

 .puma-addPurchasing .top-menu-3, .puma-addPurchasing .top-menu-4{
        padding-left: 30px;
        padding-top: 10px;
        padding-right: 30px;
    }
    .puma-addPurchasing .top-menu-3 .row, .puma-addPurchasing .top-menu-4 .row{
        margin: 0 auto !important;
    }
    .puma-addPurchasing .top-menu-3 h3, .puma-addPurchasing .top-menu-4 h3{
        font-family: MicrosoftYaHei;
        font-size: 16px;
        font-weight: normal;
        font-stretch: normal;

        letter-spacing: 0px;
        color: #3477ff;
        margin-bottom: 38px;
        
    }
    .puma-addPurchasing .top-menu-3 .row .col-md-1 span, .puma-addPurchasing .top-menu-4 .row .col-md-1 span{
        font-family: MicrosoftYaHei;
        font-size: 12px;
        font-weight: normal;
        font-stretch: normal;

        letter-spacing: 0px;
        color: #ffffff;
    }
    .puma-addPurchasing .top-menu-3 .row .tex-1 label, .puma-addPurchasing .top-menu-3 .row .tex-1 input, .puma-addPurchasing .top-menu-4 .row .tex-1 label, .puma-addPurchasing .top-menu-4 .row .tex-1 input{
        margin: 0px;
    }
    .puma-addPurchasing .top-menu-3 .row .tex-2, .puma-addPurchasing .top-menu-4 .row .tex-2{
        font-family: MicrosoftYaHei-Bold;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;

    }
    .puma-addPurchasing .top-menu-3 .row .tex-2{
        color: #ffffff;
    }
    .puma-addPurchasing .top-menu-3 .row .tex-2{
        color: #fff;
    }
    .puma-addPurchasing .top-menu-3 .row .tex-2, .puma-addPurchasing .top-menu-3 .row .col-md-1{
        background-color: #00b7a1;
    }
    .puma-addPurchasing .top-menu-3 .row .col-md-1, .puma-addPurchasing .top-menu-3 .row .col-md-6, .puma-addPurchasing .top-menu-3 .row .col-md-2, .puma-addPurchasing .top-menu-3 .row .col-md-3, .puma-addPurchasing .top-menu-3 .row .col-md-12{
        padding-bottom: 20px;
        padding-top: 20px;
        
    }

    .puma-addPurchasing .top-menu-3 .companyName{
        font-family: MicrosoftYaHei;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;

        letter-spacing: 0px;
        color: #333333;
        padding-bottom: 15px;
        padding-top: 15px;
        height: 56px;
    }
    .puma-addPurchasing .top-menu-3 .commodityContent{

        border-radius: 4px;
        border: solid 1px #d8d8d8;

    }
    .puma-addPurchasing .top-menu-3 .commodityContent .col-md-7{
        padding-top: 20px;
    }
    .puma-addPurchasing .top-menu-3 .commodityContent .col-md-7 img{
        width: 100px;
        height: 100px;
    }
    .puma-addPurchasing .top-menu-3 .commodityContent .may{

        font-family: MicrosoftYaHei;
        font-size: 20px;
        font-weight: normal;
        font-stretch: normal;
        line-height: 30px;
        letter-spacing: 0px;
        color: #00b7a1;
        padding-top: 40px;

    }
    .puma-addPurchasing .top-menu-3 .commodityContent .may i{
        color: #d8d8d8;
    }
    .puma-addPurchasing .top-menu-3 .commodityContent .col-md-2{
        height: 140px;
        border-left: 1px solid #d8d8d8;
        border-right: 1px solid #d8d8d8;
    }
    .puma-addPurchasing .top-menu-3 .row .line p{
        float: right;
    }


    .puma-addPurchasing .top-menu-4 .btn{
         height: 33px;
        background-color: #00b7a1;
        color: #fff;
    }
    .puma-addPurchasing .top-menu-4 .btn2{
        height: 33px;
        width: 50px;
    }
    .puma-addPurchasing .top-menu-4 .form-control{
        width: 270px;

        border-radius: 4px;
        border: solid 1px #d8d8d8;
        display: inline; 
        margin-left: 30px;
        margin-right: 10px;
    }
    .puma-addPurchasing .top-menu-4 .row-headline{
        background-color: #f4f4f4;
        font-family: MicrosoftYaHei-Bold;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #666666;
        margin-top: 30px !important;
    }
    .puma-addPurchasing .top-menu-4 .row-content{
        border-bottom: 1px solid #d8d8d8;
        font-family: MicrosoftYaHei;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        line-height: 30px;
        letter-spacing: 0px;
        color: #666666;
    }
    .puma-addPurchasing .top-menu-4 .row .col-md-1, .puma-addPurchasing .top-menu-4 .row .col-md-6, .puma-addPurchasing .top-menu-4 .row .col-md-2, .puma-addPurchasing .top-menu-4 .row .col-md-3, .puma-addPurchasing .top-menu-4 .row .col-md-12{
        padding-bottom: 10px;
        padding-top: 10px;
        
    }
    .puma-addPurchasing .top-menu-4 .row .col-md-4{
        padding-top: 10px;
    } 






</style>

<body>

    <!---采购商内容开始-->
    <div class="content puma-addPurchasing">      
        <div class="container">   
        @if(isset($vip) && $vip==1 )
                <!-- 显示发布提交的信息-->
                @if ( isset($counting) && $counting >=1 )
                 
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                           
                                 <span ><p class="text-center">您发布的采购数量已经达到免费会员上限1条,如需发布更多求购信息请升级会员等级</p></span>
                          
                        </ul>
                    </div>
                  
                @endif

                 @if ( isset($scounting) && $scounting >=1 )
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                           
                                 <span ><p class="text-center">您发布的产品数量已经达到免费会员上限1条,如需发布更多产品信息请升级会员等级</p></span>
                          
                        </ul>
                    </div>
                @endif
        @endif
           
                  <!-- 显示错误的信息-->
                @if (count($errors) > 0)
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                            @foreach ($errors->all() as $error)
                                
                                 <span ><p class="text-center">{{ $error }}<p></span>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="" style="float: left;">

                <div class="menu1 menuu">
                    <ul class="">
                        <a href="#" ><li class="b1 bac">采购管理</li></a>
                        <a href="#" ><li class="b2 ">供应管理</li></a>
                        <a href="#" ><li class="b3 ">我的收藏</li></a>
                        <a href="#" ><li class="b4 ">我的购物车</li></a>
                    </ul>
                </div>
            </div>
               
            <div class="top-menu row top-menu-1" style="width:960px;">
      <!-->
            <!- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist" style="height: 63px;">
                                    <li class="nav-item nav-item-1 active"> 
                                        <a class="nav-link " data-toggle="tab" href="#addProcurement" role="tab" align="center"><span class="zzzzz" style="font-weight: 600;">添加采购<span></span></span></a> 
                                    </li>
                                    <li class="nav-item nav-item-2"> 
                                        <a class="nav-link" data-toggle="tab" href="#released" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">已发布（<span>{{$counted}}</span>）</span></a> 
                                    </li>
                                    <li class="nav-item nav-item-3"> 
                                        <a class="nav-link " data-toggle="tab" href="#inReview" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">审核中（<span>{{$counting}}</span>）</span></a> 
                                    </li>
                                    <li class="nav-item nav-item-4"> 
                                        <a class="nav-link" data-toggle="tab" href="#notPass" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">未通过（<span>{{$countun}}</span>）</span></a> 
                                    </li>
                                    <li class="nav-item nav-item-5"> 
                                        <a class="nav-link " data-toggle="tab" href="#expired" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">已过期（<span>{{$countold}}</span>）</span></a> 
                                    </li>
                                </ul>

                                                 <!-- Tab panes -->
                    <form action="/home/userinfo/adduser2" method="post" enctype="multipart/form-data" >
                       {{ csrf_field() }}
                       <div class="tab-content tabcontent-border" style="margin-top: 20px;">
                        <div class="tab-pane active" id="addProcurement" role="tabpanel">

                            <div class="two row">
                                <from>
        <select class="form-control" id="category" name="category"  style="margin-right:10px;">
                <option value="0">行业分类</option>
                  @foreach($column as $v)
                <option value="{{$v->id}}">{{$v->cname}}</option>
                @endforeach
               
        </select>
        <select class="form-control" id="kind" name="kind" style="width:140px;">
                <option value="0">类别</option>
        </select>
    </from>
                                <input type="text" class="form-control l-b" maxlength="20" name ="project" placeholder="点击输入文字">
                                <b>(2-30个字)</b>
                            </div>
                            <div class="explain row">
                                <span class="tex col-md-1">详细说明</span>
                                <textarea name="descript" placeholder="点击输入商品详细信息" class="form-control col-md-10"></textarea>
                            </div>


                            <div class="row">
                                <span class="tex col-md-1"><p>产品图片</p><p style="color:#666666">非必填项</p> </span>
                                <div class="tex-r uploading col-md-10">`
                                    <div class="col-md-2">
                                        <label for="test" >
                                          <input type="file" class="form-control myUpload" id="test" name="img">
                                          <img src="/ungmhome/images/个人中心1.png" class="add"/>
                                          <img class="show hide"/>
                                          <p>点击上传</p>
                                        </label>

                                      <p><button type="button" class="btn btn-default btn-xs">上传记录</button><button type="reset" class="btn btn-default closes btn-xs hide">删除</button></p>

                                  </div>
                                  <div class="col-md-2">
                                    <img src="/ungmhome/images/个人中心2.png"/>
                                    <p>点击上传</p>
                                    <p><button type="button" class="btn btn-default btn-xs">申请开通</button><button type="reset" class="btn btn-default btn-xs">删除</button></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="/ungmhome/images/个人中心2.png"/>
                                    <p>点击上传</p>
                                    <p><button type="button" class="btn btn-default btn-xs" >申请开通</button><button type="reset" class="btn btn-default btn-xs">删除</button></p>
                                </div>
                                <div class="col-md-12">
                                    <p>1、最佳图片长宽比为<span>1:1</span>，最小图片尺寸为<span>250PX*250PX</span> </p>
                                    <p>2、要求图片格式：JPG,PNG,GIF高清图片.</p>
                                    <p>3、上传实拍产品图和丰富产品详情，让产品更具吸引力，获得好排名，帮助目标客户直接了解产品细节！</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">  

                            <span class="tex col-md-1">过期时间</span>

                            <div class="tex-r col-md-10">
                             <div class="l-r-tex">
                            <span>不选默认长期有效</span>
                            <input type="date" name="deadline" class="form-control">
                            </div>
                          
                           
                           
                           
                            <div>
                            <span>价格要求:</span>
                               <input type="" name="price" class="form-control">
                            </div>

                             <div>
                            <span>数量信息:</span>
                            <input type="text" name="count" class="form-control">
                            </div>

                            <div>
                            <span>地点信息:</span>
                            <input type="text" name="address" class="form-control">
                            </div>
                           
                            <p>建议详细填写交易条件，以便符合要求的卖家与您取得联系</p>
                            <p>点击提交表示您已阅读并同意<a href="/home/dns">《睿鹿网服务协议》</a></p>
                            <button type="" class="btn btn-danger">提交</button>
                        </div>
                    </div>
                
                </div>



                     <div class="tab-pane" id="released" roleinReview="tabpanel">
                      
                      <div class="text"><p>您当前暂无订单交易</p></div>
                   

                     </div>

                     <div class="tab-pane" id="inReview" role="tabpanel">
                        <div class="text"><p>您当前暂无订单交易</p></div>
                    </div>
                    <div class="tab-pane" id="notPass" role="tabpanel">
                        <div class="text"><p>您当前暂无订单交易</p></div>
                    </div>
                    <div class="tab-pane" id="expired" role="tabpanel">
                        <div class="text"><p>您当前暂无订单交易</p></div>
                    </div>
            
                </div>

            </div>
</form>


            <div class="top-menu row top-menu-2" style="width:960px;">
      <!--->
            <!- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist" style="height: 63px;">
                                    <li class="nav-item nav-item-1 active"> 
                                        <a class="nav-link " data-toggle="tab" href="#addProcurement-2" role="tab" align="center"><span class="zzzzz" style="font-weight: 600;">发布产品<span></span></span></a> 
                                    </li>
                                    <li class="nav-item nav-item-2"> 
                                        <a class="nav-link" data-toggle="tab" href="#released-2" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">已发布（<span>{{$scounted}}</span>）</span></a> 
                                    </li>
                                    <li class="nav-item nav-item-3"> 
                                        <a class="nav-link " data-toggle="tab" href="#inReview-2" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">审核中（<span>{{$scounting}}</span>）</span></a> 
                                    </li>
                                    <li class="nav-item nav-item-4"> 
                                        <a class="nav-link" data-toggle="tab" href="#notPass-2" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">未通过（<span>{{$scountun}}</span>）</span></a> 
                                    </li>
                                    <li class="nav-item nav-item-5"> 
                                        <a class="nav-link " data-toggle="tab" href="#expired-2" role="tab" align="center"><span class="hidden-xs-down" style="font-weight: 600;">已过期（<span>{{$countold}}</span>）</span></a> 
                                    </li>
                                </ul>

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
                        <form action="/home/userinfo/addselleruser2" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                       
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border" style="margin-top: 20px;">
                                    <div class="tab-pane active" id="addProcurement-2" role="tabpanel">
                                        <div class="two row">
                                           <from>
        <select class="form-control" id="category1" name="category" style="margin-right:10px;">
                <option value="0">行业分类</option>

                @foreach($column as $v)
                <option value="{{$v->id}}">{{$v->cname}}</option>
                @endforeach

              
        </select>
        <select class="form-control" id="kind1" name="kind" style="width:140px;">
                <option value="0">类别</option>
        </select>
    </from>
                                            <input type="text" class="form-control l-b" maxlength="20" name ="project" placeholder="点击输入文字">
                                            <b>(2-30个字)</b>
                                        </div>

                                       <div class="explain row">
                                            <span class="tex col-md-1">详细说明</span>
                                            <textarea name="descript" placeholder="点击输入商品详细信息" class="form-control col-md-10"></textarea>
                                        </div>

                                        <!-- <div class="row">
                                            <span class="tex col-md-1">产品图片 </span>
                                            <div class="tex-r uploading col-md-10">
                                                <div class="col-md-2">
                                                    <label for="test" >
                                                      <input type="file" class="form-control myUpload" id="test" name="img">
                                                      <img src="/ungmhome/images/个人中心1.png" class="add"/>
                                                      <img class="show hide"/>
                                                      <p>点击上传</p>
                                                    </label>
                                        
                                                  <p><button type="button" class="btn btn-default btn-xs">上传记录</button><button type="reset" class="btn btn-default closes btn-xs hide">删除</button></p>
                                        
                                              </div> -->

                                              <div class="row">
                                <span class="tex col-md-1">产品图片 </span>
                                <div class="tex-r uploading col-md-10">
                                    <div class="col-md-2">
                                        <label for="test" >
                                          <input type="file" class="form-control myUpload" id="test" name="img">
                                          <img src="/ungmhome/images/个人中心1.png" class="add"/>
                                          <img class="show hide"/>
                                          <p>点击上传</p>
                                        </label>

                                      <p><button type="button" class="btn btn-default btn-xs">上传记录</button><button type="reset" class="btn btn-default closes btn-xs hide">删除</button></p>

                                  </div>
                                                <div class="col-md-2">
                                                    <img src="/ungmhome/images/个人中心2.png"/>
                                                    <p>点击上传</p>
                                                    <p><button type="" class="btn btn-default btn-xs">申请开通</button><button type="reset" class="btn btn-default btn-xs">删除</button></p>
                                                </div>
                                                <div class="col-md-2">
                                                    <img src="/ungmhome/images/个人中心2.png"/>
                                                    <p>点击上传</p>
                                                    <p><button type="" class="btn btn-default btn-xs" >申请开通</button><button type="reset" class="btn btn-default btn-xs">删除</button></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>1、最佳图片长宽比为<span>1:1</span>，最小图片尺寸为<span>250PX*250PX</span> </p>
                                                    <p>2、要求图片格式：JPG,PNG,GIF高清图片.</p>
                                                    <p>3、上传实拍产品图和丰富产品详情，让产品更具吸引力，获得好排名，帮助目标客户直接了解产品细节！</p>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">  

                                                <span class="tex col-md-1">过期时间</span>
                                                
                                                <div class="tex-r col-md-10">
                                                 <div class="l-r-tex">
                                                <span>不选默认长期有效</span>
                                                <input type="date" name="deadline" class="form-control">
                                                </div>
                                              
                                               
                                               
                                               
                                                <div>
                                                <span>价格要求:</span>
                                                   <input type="" name="price" class="form-control">
                                                </div>

                                                 <div>
                                                <span>数量信息:</span>
                                                <input type="text" name="count" class="form-control">
                                                </div>

                                                <div>
                                                <span>地点信息:</span>
                                                <input type="text" name="address" class="form-control">
                                                </div>

                                                <div>
                                                <span>公司名称:</span>
                                                <input type="text" name="company" class="form-control">
                                                </div>

                                                <div>
                                                <span>行业名称:</span>
                                                <input type="text" name="industry" class="form-control">
                                                </div>
                                               
                                                <p>建议详细填写交易条件，以便符合要求的卖家与您取得联系</p>
                                                <p>点击提交表示您已阅读并同意<a href="/home/dns">《睿鹿网服务协议》</a></p>
                                                <button type="submit" class="btn btn-danger">提交</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>

                                    <div class="tab-pane" id="released-2" roleinReview="tabpanel">
                                       <div class="text"><p>您当前暂无订单交易</p></div>
                                    </div>
                                    <div class="tab-pane" id="inReview-2" role="tabpanel">
                                        <div class="text"><p>您当前暂无订单交易</p></div>
                                    </div>
                                    <div class="tab-pane" id="notPass-2" role="tabpanel">
                                        <div class="text"><p>您当前暂无订单交易</p></div>
                                    </div>
                                    <div class="tab-pane" id="expired-2" role="tabpanel">
                                        <div class="text"><p>您当前暂无订单交易</p></div>
                                    </div>
                                </div>

            </div>
            <div class="top-menu row top-menu-3" style="width:960px;">
                <h3>我的购物车</h3>
                <div class="row">
                    <div class="row" style="height: 60px;">
                        <div class="col-md-1 tex-1 ">
                            <label><input type="checkbox" name="" value=""><span style="color: #fff;"> 全选 </span></label>
                        </div>
                        <div class="col-md-6 tex-2"><span style="margin-left: 165px;"> 货品 </span></div>
                        <div class="col-md-2 tex-2"><span style="margin-left: 31px;"> 单价(元) </span></div>
                        <div class="col-md-3 tex-2"><span style="margin-left: 31px;"> 金额 </span></div>
                    </div>
                    <div class="row" style="height: 60px;">
                        <div class="col-md-12 companyName" >
                            <label><input type="checkbox" name="" value=""><span style="color:#333333;"> 济宁山重新能源有限公司</span></label>
                        </div>
                    </div>
                    <div class="row commodityContent">
                        <div class="col-md-7">
                            <label style="padding-bottom: 0px;">
                                <input type="checkbox" name="" value="">
                                <img src="/ungmhome/images/挖掘机.png">
                                <span style="color:#666666;"> 山重建机GC498 全新液压履带挖掘机</span>
                            </label>
                        </div>
                        <div class="col-md-2 "><span class="may" style="margin-left: 31px;"> 面议 </span></div>
                        <div class="col-md-3 "><span class="may" style="margin-left: 31px;"> 面议 </span><i style="float: right;" class="glyphicon glyphicon-remove"></i></div>
                    </div>
                    
                    <div class="col-md-12 line">
                        <label><input type="checkbox" name="" value="">全选<span style="color:#999999;"> 删除选中商品</span></label>
                        <p>共计 <span style="color:#00b7a1;">1</span> 件货品 (  不含运费 ）：价格面议</p>
                    </div>
                </div> 
            </div>
            <!---->
            <div class="top-menu row top-menu-4" style="width:960px;">
                <h3>我的收藏</h3>
                <p><button class="btn">商品搜索</button><input class="form-control" placeholder="商品名称/订单号"><button class="btn btn2"><i class="glyphicon glyphicon-search"></i></button></p>
                <div class="row">
                    <div class="row row-headline" style="height: 40px;">
                        <div class="col-md-2 tex-1 ">
                            <label><input type="checkbox" name="" value=""><span style=""> 全选 </span></label>
                        </div>
                        <div class="col-md-6 tex-2"><span style=""> 标题 </span></div>
                        <div class="col-md-4 tex-2"><span style=""> 添加时间 </span></div>
                    </div>
                    <div class="row row-content" style="height: 55px;">
                        <div class="col-md-2 tex-1 ">
                            <label><input type="checkbox" name="" value=""><span style=""> 产品 </span></label>
                        </div>
                        <div class="col-md-6 tex-2"><span style=""> 山重建机GC498 全新液压履带挖掘机 </span></div>
                        <div class="col-md-4 tex-2"><span style=""> 2018-11-20 &nbsp; 13:33 </span></div>
                    </div>
                    
                    <div class="col-md-12 line">
                        <p>当前选中：   <span style="">0/1</span> <span style="color:#00b7a1;margin-left: 20px;">删除</span></p>
                    </div>
                </div> 
            </div>
            
        </div> 
    </div>
    <!--内容结束-->

    

</body>

<script type="text/javascript" src="/ungmhome/js/jquery.js"></script>
<script >
         
       
        $("#category").change(function(){
            var url = '/center/column';
            var data = $(this).val();
                $.ajax({
                url : url,
                type : 'post',
                datatype : 'json',
                data : {
                    data,
                    '_token':'{{csrf_token()}}',
                },
                success : function(data){
                    var status = data.code; //获取返回值
                    var column = data.data;
                    // alert(status);
                    if (status == 10000) {
                        var option = '';
                        for(var i=0;i<column.length;i++){  //循环获取返回值，并组装成html代码
                            // alert(column[i]['id']);
                        option +='<option value='+column[i]['id']+'>'+column[i]['cname']+'</option>';
                        }
                    }else{
                        var option = '<option>请选择</option>';  //默认值
                    }
                    $("#kind").html(option);  //js刷新第二个下拉框的值
                }
            });
        });
                
         $("#category1").change(function(){
            var url = '/center/column';
            var data = $(this).val();
                $.ajax({
                url : url,
                type : 'post',
                datatype : 'json',
                data : {
                    data,
                    '_token':'{{csrf_token()}}',
                },
                success : function(data){
                    var status = data.code; //获取返回值
                    var column = data.data;
                    // alert(status);
                    if (status == 10000) {
                        var option = '';
                        for(var i=0;i<column.length;i++){  //循环获取返回值，并组装成html代码
                        option +='<option value='+column[i]['id']+'>'+column[i]['cname']+'</option>';
                        }
                    }else{
                        var option = '<option>请选择</option>';  //默认值
                    }
                    $("#kind1").html(option);  //js刷新第二个下拉框的值
                }
            });
        });
    </script>
  
<script>
    $(document).ready(function()
    {
        //点击上传时实时显示图片
        $(".myUpload").change(function()
        {
            var src=getObjectURL(this.files[0]);//获取上传文件的路径
            $(".closes").removeClass('hide');
            $(".add").addClass('hide');
            $(".show").removeClass('hide');
            $(".show").attr('src',src);//把路径赋值给img标签
        });

        //点击关闭按钮时恢复初始状态
        $(".closes").click(function()
        {
            $(".closes").addClass('hide');
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

    $(".top-menu-2").hide();
    $(".top-menu-3").hide();
        $(".top-menu-4").hide();
    $(".b1").click(function(){
     $(".bac").removeClass("bac");
        $(".backcolor").removeClass("backcolor");
        $(".b1").addClass("backcolor");
        $(".top-menu-1").show();
        $(".top-menu-2").hide();
        $(".top-menu-3").hide();
        $(".top-menu-4").hide();
    })
    $(".b2").click(function(){
$(".bac").removeClass("bac");
        $(".backcolor").removeClass("backcolor");
        $(".b2").addClass("backcolor");
        $(".top-menu-2").show();
        $(".top-menu-1").hide();
        $(".top-menu-3").hide();
        $(".top-menu-4").hide();
    })
    $(".b3").click(function(){
$(".bac").removeClass("bac");
        $(".backcolor").removeClass("backcolor");
        $(".b3").addClass("backcolor");
        $(".top-menu-3").show();
        $(".top-menu-2").hide();
        $(".top-menu-1").hide();
        $(".top-menu-4").hide();
    })
    $(".b4").click(function(){
$(".bac").removeClass("bac");
        $(".backcolor").removeClass("backcolor");
        $(".b4").addClass("backcolor");
        $(".top-menu-4").show();
        $(".top-menu-2").hide();
        $(".top-menu-3").hide();
        $(".top-menu-1").hide();
    })
</script>
</html>

             

@endsection
