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
</style>

<body>

    <!---采购商内容开始-->
    <div class="content puma-addPurchasing">      
        <div class="container"> 
        <!-- 显示完善资料的信息-->
                @if ( isset($identity) && $identity==1 )
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                           
                                 <span ><p class="text-center">建议完善资料,以便客户与您联系</p></span>
                          
                        </ul>
                    </div>
               
                @endif  

                @if(isset($vip) && $vip==1 )
                <!-- 显示发布提交的信息-->
                @if ( isset($counting) && $counting >=1 )
                 
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                           
                                 <span ><p class="text-center">您发布的采购数量已经达到免费会员上限1条,如需发布更多求购信息请升级会员等级</p></span>
                          
                        </ul>
                    </div>
                  
                    @endif

              
            @endif
                  <!-- 显示错误的信息-->
                @if (count($errors) > 0)
                    <div  class="alert alert-danger" data-dismiss="alert" aria-label="Close">
                        <ul class="text-warning">
                            @foreach ($errors->all() as $error)
                                 <span ><p class="text-center">{{ $error }}</p></span>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="" style="float: left;">

                <div class="menu1 menuu">
                    <ul class="">
                        <a href="#" ><li class="b1 bac">采购管理</li></a>
                        <a href="#" ><li class="b2 ">供应管理</li></a>
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
        <select class="form-control" id="category" name="category" onchange="getcategory()" style="margin-right:10px;">
                <option value="-1">行业分类</option>
                <option value="28">工业品</option>
                <option value="47">原材料</option>
                <option value="58">消费品</option>
                <option value="73">绿色食物</option>
                <option value="84">商务服务</option>
        </select>
        <select class="form-control" id="kind" name="kind" style="width:140px;">
                <option value="-1">类别</option>
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
                            <p>点击提交表示您已阅读并同意<a href="#">《睿鹿网网服务协议》</a></p>
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
                                    
                                </div>
                            </form>

                                    <div class="tab-pane" id="released-2" roleinReview="tabpanel">
                                       <div class="text" ><a href="/home/check/authentication"><p>您暂无供应权限,请点击此链接前往提交企业认证资料</p></a></div>
                                    </div>
                                </div>

            </div>

            
        </div> 
    </div>
    <!--内容结束-->

    

</body>

<script type="text/javascript" src="/ungmhome/js/jquery.js"></script>
<script >
    /*
    var arr=new Array;
    arr[0]=[new Option("市",'-1')];
    arr[1]=[new Option("")]
    function change(index){
        var s=
        */
        var kind=[
        ["机械及行业设备","仪器仪表", "照明工业", "安全防护","电工电气","电子元器件","五金工具","包装","环保","家装、建材","交通运输",
        "印刷","二手设备转让","加工","LED","个人防护","专用设备","其他"],
        ["纸业","纺织及皮革", "化工","精细化学品","橡塑","家纺家饰","能源 ","家用电器","冶金矿产","钢铁","其他"],
                ["汽车用品","办公文教", "电脑数码类产品", "箱包皮具","日用百货","母婴用品","美妆日化","家用电器","工艺品及礼品","气摩及配件","食品及饮料",
                "玩具","运动户外","服装鞋帽","其他"],
                ["特色农产品","生鲜蔬果", "粮油/干货", "调味品类","茗茶/冲饮","营养保健食品","休闲零食","饮料","牛奶乳品","美酒佳酿","其他"],
                ["广电传媒","商务服务", "项目合作","代理","其他"]
        ];
    
    
    function getcategory(){
    /*
    var sltCity = document.getElementById('s2') ;
        sltCity.innerHTML='';
        for(i=0;i<city[index].length;i++){
            sltCity.options[sltCity.options.length]=city[index][i];
        }
    
    */
        var sltCategory = document.getElementById("category") ;        
        var sltKind = document.getElementById("kind") ;
        var categoryKind = kind[sltCategory.selectedIndex - 1];         
        sltKind.length = 1 ;
        for ( i = 0 ; i < categoryKind.length ; i++ ) {
            sltKind[i + 1] = new Option(categoryKind[i], categoryKind[i]) ;
        }
    }
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
    $(".b1").click(function(){
        $(".bac").removeClass("bac");
        $(".backcolor").removeClass("backcolor");
        $(".b1").addClass("backcolor");
        $(".top-menu-1").show();
        $(".top-menu-2").hide();
    })
    $(".b2").click(function(){
        $(".bac").removeClass("bac");
        $(".backcolor").removeClass("backcolor");
        $(".b2").addClass("backcolor");
        $(".top-menu-2").show();
        $(".top-menu-1").hide();
    })
</script>
</html>

             

@endsection
