<!DOCTYPE html>
<html>

    @extends('home.layout.newindex')

</html>


@section('title')
    首页
@endsection


@section('content')

 

  <!--   <title>全球采购信息服务网</title> -->
   <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
   <link rel="stylesheet" href="/ungmhome/css/style.css">
   <!--  <link rel="stylesheet" href="/ungmhome/css/style.min.css">  -->
   <link rel="stylesheet" type="text/css" href="/ungmhome/css/CSSreset.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="/ungmhome/css/als_demo.css" />
  <link rel="stylesheet" href="/ungmhome/css/swiper.min.css"> 

<style type="text/css" media="screen">
    .als-item div{
        width: 250px;
    }
    .viewPager img{
            width:100%;
            height:600px;}
</style>

<body>
    <!--1.网页头部-->

   
    <div class="main">
        <div class="viewPager">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="/ungmhome/images/banner1.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="/ungmhome/images/banner2.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="/ungmhome/images/banner3.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="/ungmhome/images/banner4.jpg" alt=""></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
              </div>
        </div>
    </div>
     <!--1.内容-->
    <div class="container">
        <div class="tex" align="center">
            <h3>一触即达的全球贸易</h3>
            <img src="/ungmhome/images/GL.png"  alt="">
        </div>
        <div class="globalTrade content">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item nav-item-left active"> <a class="nav-link " data-toggle="tab" href="#SUPPLIER" role="tab" align="center"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down" style="font-weight: 600;">供应商&nbsp;&nbsp;<span>SUPPLIER</span></span></a> </li>
                                    <li class="nav-item nav-item-right"> <a class="nav-link" data-toggle="tab" href="#BUYERS" role="tab" align="center"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down" style="font-weight: 600;">采购商&nbsp;&nbsp;<span>BUYERS</span></span></a> </li>
                                   
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="SUPPLIER" role="tabpanel">
                                        <div class="row">
                                           <div class="col-md-8"> 
                                               <div class="row">
                                                    <div class="col-md-10"><input class="form-control" type="text" placeholder="请输入您的产品名称，为您匹配对应采购商" name=""></div>
                                                    <div class="col-md-2" style="padding-right: 0px;"><button type="" class="btn btn-lg btn-block btn-s btn-success" ><i class="glyphicon glyphicon-search"></i></button></div>
                                               </div>
                                               <div class="row row-down">
                                                    <div class="col-md-4" align="center">
                                                        <div class="padd">
                                                            <h4>快恢复二极管&nbsp;GP30KL</h4>
                                                            <p>采购数量：大量</p>
                                                            <hr>
                                                            <ul align="left">
                                                                <li>发布时间：<span>2018-10-25</span></li>
                                                                <li>戒指日期：<span>长期有效</span></li>
                                                                <li>采购类型：<span>二极管</span></li>
                                                                <li>已有报价：<span>0条</span></li>
                                                            </ul>
                                                            <button type="" class="btn btn-lg btn-block btn-success">立即沟通</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" align="center">
                                                        <div class="padd">
                                                            <h4>快恢复二极管&nbsp;GP30KL</h4>
                                                            <p>采购数量：大量</p>
                                                            <hr>
                                                            <ul align="left">
                                                                <li>发布时间：<span>2018-10-25</span></li>
                                                                <li>戒指日期：<span>长期有效</span></li>
                                                                <li>采购类型：<span>二极管</span></li>
                                                                <li>已有报价：<span>0条</span></li>
                                                            </ul>
                                                            <button type="" class="btn btn-lg btn-block btn-success">立即沟通</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" align="center">
                                                        <div class="padd">
                                                            <h4>快恢复二极管&nbsp;GP30KL</h4>
                                                            <p>采购数量：大量</p>
                                                            <hr>
                                                            <ul align="left">
                                                                <li>发布时间：<span>2018-10-25</span></li>
                                                                <li>戒指日期：<span>长期有效</span></li>
                                                                <li>采购类型：<span>二极管</span></li>
                                                                <li>已有报价：<span>0条</span></li>
                                                            </ul>
                                                            <button type="" class="btn btn-lg btn-block btn-success">立即沟通</button>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div class="row-roll padd wrap" style="width: 681px;">
                                                    <div class="col-md-4 dowebok" align="left">
                                                       <ul>
                                                              @foreach($data2 as $v)  
                                                              <li>
                                                                <a href="#"> 
                                                                <span>求购</span>
                                                                <span>{{$v['project']}}</span> 
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 dowebok" align="left">
                                                       <ul>
                                                              @foreach($data3 as $v)  
                                                              <li>
                                                                <a href="#"> 
                                                                <span>求购</span>
                                                                <span>{{$v['project']}}</span> 
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                           
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 p" align="center">
                                                       <p><a href="#">查看更多求购动态</a></p>
                                                    </div>
                                               </div>
                                           </div> 
                                           <div class="col-md-4 SUPPLIER-r" align="center">
                                               <div class="row padd SUPPLIER-r-top" align="center">
                                                    <div class="col-md-4" style="padding-bottom: 10px;">
                               
                                                    <img class="img-responsive" src="/ungmhome/images/user.png" style="background-color:#f6f6f6;border-radius:4px;">
                               
                                                    </div>
                                                   <div class="col-md-4 con"><p><a href="#">发布产品</a></p><p><a href="#">我的订单</a></p></div>
                                                  <div class="col-md-4 con"><p><a href="#">我的发布</a></p><p><a href="#">我的消息</a></p></div>
                                                  <div class="col-md-7"><p><bottom class="btn btn-lg btn-success btn-block">登录</bottom></p></div>
                                                  <div class="col-md-5"><p><bottom class="btn btn-lg btn-block btn-outline-success">注册</bottom></p></div>
                                                  <!-- <div class="col-md-4" style="padding-bottom: 10px;"><img class="img-responsive" src="/ungmhome/images/user.png" style="background-color:#f6f6f6;border-radius:4px;">    </div>
                                                  <div class="col-md-4 con"><p><a href="#">发布产品</a></p><p><a href="#">我的订单</a></p></div>
                                                  <div class="col-md-4 con"><p><a href="#">我的发布</a></p><p><a href="#">  我的消息</a></p>
                                                  </div> -->
                                               </div>
                                               
                                                
                                                   
                                                
                                               <div class="row" align="center">
                                                @foreach($data4 as $v)
                                                   <div class="col-md-12 padd advertising">
                                                   <a href="{{$v->advertise_https}}" target="blank" >
                                                     <img class="img-responsive"  src="{{$v->image_path}}" alt="{{$v->title}}" title="{{$v->title}}">  
                                                   </a>
                                                   
                                                   </div>
                                                @endforeach

                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="BUYERS" role="tabpanel">
                                        <div class="row">
                                           <div class="col-md-8"> 
                                               <div class="row">
                                                    <div class="col-md-10"><input class="form-control" type="text" placeholder="请输入您的产品名称，为您匹配对应供应商" name=""></div>
                                                    <div class="col-md-2"><button type="" class="btn btn-lg btn-block btn-s btn-success"><i class="glyphicon glyphicon-search"></i></button></div>
                                               </div>
                                               <div class="row row-down padd row-down-1">
                                                    <div class="vtabs customvtab">
                                                        <ul class="nav nav-tabs tabs-vertical vtabs-1" role="tablist">
                                                            <li class=" nav-item"> <a class="nav-link active" data-toggle="tab" href="#industrialproducts" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">工业品</span> </a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rawmaterial" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">原材料</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#consumer" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">消费品</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#greenfood" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">绿色食品</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#commercialservices" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">商务服务</span></a> </li>
                                                        </ul>
                                                        
                                                        <!-- Tab panes -->
                                                        <div class="tab-content tab-content-1">
                                                            <div class="tab-pane active" id="industrialproducts" role="tabpanel">
                                                                <div class="p-20 industrial industrial-1 industrial-2">
                                                                    <b>工业品</b>
                                                                    <ul style="margin-top: 25px;">
                                                                        <li><a href="#">机械及行业设备</a></li>
                                                                        <li><a href="#">仪器仪表</a></li>
                                                                        <li><a href="#">照明工业</a></li>
                                                                        <li><a href="#">安全防护</a></li>
                                                                        <li><a href="#">电工电气</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="#">电子元器件</a></li>
                                                                        <li><a href="#">五金工具</a></li>
                                                                        <li><a href="#">包装</a></li>
                                                                        <li><a href="#">环保</a></li>
                                                                        <li><a href="#">家装、建材</a></li>
                                                                        <li><a href="#">交通运输</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="#">医药保健</a></li>
                                                                        <li><a href="#">印刷</a></li>
                                                                        <li><a href="#">二手设备转让</a></li>
                                                                        <li><a href="#">加工</a></li>
                                                                        <li><a href="#">LED</a></li>
                                                                        <li><a href="#">个人防护</a></li>
                                                                        <li><a href="#">专用设备</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane  p-20" id="rawmaterial" role="tabpanel">
                                                                <div class="p-20 industrial industrial-2">
                                                                    <b>原材料</b>
                                                                    <ul style="margin-top: 25px;">
                                                                        <li><a href="#">纸业</a></li>
                                                                        <li><a href="#">纺织及皮革</a></li>
                                                                        <li><a href="#">化工</a></li>
                                                                        <li><a href="#">精细化学品</a></li>
                                                                        <li><a href="#">橡塑</a></li>
                                                                        <li><a href="#">家纺家饰</a></li>
                                                                        <li><a href="#">能源</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="#">家用电器</a></li>
                                                                        <li><a href="#">冶金矿产</a></li>
                                                                        <li><a href="#">钢铁</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane p-20" id="consumer" role="tabpanel">
                                                                <div class="p-20 industrial industrial-2">
                                                                    <b>消费品</b>
                                                                    <ul style="margin-top: 25px;">
                                                                        <li><a href="#">汽车用品</a></li>
                                                                        <li><a href="#"> 办公文教 </a></li>
                                                                        <li><a href="#">电脑数码类产品</a></li>
                                                                        <li><a href="#">箱包皮具</a></li>
                                                                        <li><a href="#">日用百货</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="#">母婴用品</a></li>
                                                                        <li><a href="#"> 美妆日化</a></li>
                                                                        <li><a href="#">家用电器</a></li>
                                                                        <li><a href="#">工艺品及礼品</a></li>
                                                                        <li><a href="#">气摩及配件</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="#">食品及饮料</a></li>
                                                                        <li><a href="#">玩具</a></li>
                                                                        <li><a href="#">运动户外</a></li>
                                                                        <li><a href="#">服装鞋帽</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane  p-20" id="greenfood" role="tabpanel">
                                                                <div class="p-20 industrial industrial-2">
                                                                    <b>绿色食品</b>
                                                                    <ul style="margin-top: 25px;">
                                                                        <li><a href="#">特色农产品</a></li>
                                                                        <li><a href="#">生鲜蔬果</a></li>
                                                                        <li><a href="#">粮油/干货</a></li>
                                                                        <li><a href="#">调味品类</a></li>
                                                                        <li><a href="#">茗茶/冲饮</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="#">营养保健食品 </a></li>
                                                                        <li><a href="#">休闲零食 </a></li>
                                                                        <li><a href="#">饮料</a></li>
                                                                        <li><a href="#">牛奶乳品 </a></li>
                                                                        <li><a href="#">美酒佳酿</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane p-20" id="commercialservices" role="tabpanel">
                                                                <div class="p-20 industrial industrial-2">
                                                                    <b>商务服务</b>
                                                                    <ul style="margin-top: 25px;">
                                                                        <li><a href="#">广电传媒</a></li>
                                                                        <li><a href="#">商务服务</a></li>
                                                                        <li><a href="#">项目合作</a></li>
                                                                        <li><a href="#">代理</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class="img-industrial" src="/ungmhome/images/advertising.png"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div class="row-roll padd wrap wrap-1">
                                                    <div class="col-md-3" align="center">
                                                       <ul>
                                                            <li><span>诚信供应商推荐</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站1</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3" align="center">
                                                       <ul>
                                                            <li><span>活跃供应商推荐</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站1</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3" align="center">
                                                       <ul>
                                                            <li><span>UNGM供应商推荐</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站1</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3" align="center">
                                                       <ul>
                                                            <li><span>UNGM服务商推荐</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站位</span></li>
                                                            <li><span>占位文字站位站1</span></li>
                                                        </ul>
                                                    </div>
                                               </div>
                                           </div> 
                                           <div class="col-md-4 SUPPLIER-r" align="center">
                                               <div class="row padd SUPPLIER-r-top" align="center">
                                                   <div class="col-md-4" style="padding-bottom: 10px;"><img class="img-responsive" src="/ungmhome/images/user.png" style="background-color: #f9f9f9;border-radius: 4px;"></div>
                                                   <div class="col-md-4 con"><p><a href="#">发布产品</a></p><p><a href="#">我的订单</a></p></div>
                                                   <div class="col-md-4 con"><p><a href="#">我的发布</a></p><p><a href="#">我的消息</a></p></div>
                                                   <div class="col-md-7"><p><bottom class="btn btn-lg btn-success btn-block">登录</bottom></p></div>
                                                   <div class="col-md-5"><p><bottom class="btn btn-lg btn-block btn-outline-success">注册</bottom></p></div>
                                               </div>
                                               <!-- <div class="row padd SUPPLIER-r-top" align="center">
                                                   <div class="col-md-4" style="padding-bottom: 10px;"><img class="img-responsive" src="/ungmhome/images/user.png" style="background-color: #f9f9f9;border-radius: 4px;"></div>
                                                   <div class="col-md-4 con"><p><a href="#">发布产品</a></p><p><a href="#">我的订单</a></p></div>
                                                   <div class="col-md-4 con"><p><a href="#">我的发布</a></p><p><a href="#">我的消息</a></p></div>
                                               </div> -->
                                               <div class="row" align="center">

                                                   @foreach($data5 as $v)
                                                   <div class="col-md-12 padd advertising">
                                                   <a href="{{$v->advertise_https}}" target="blank" >
                                                     <img class="img-responsive"  src="{{$v->image_path}}" alt="{{$v->title}}" title="{{$v->title}}">  
                                                   </a>
                                                   
                                                   </div>
                                                @endforeach
                                                   
                                                   

                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
            </div>
        </div>
    </div>
    <div class="indexUngm">
        <div class="container">
            <div class="tex" align="center">
                <h3>UNGM</h3>
                <img class="img-responsive" src="/ungmhome/images/UNGMh.png">
                <h4>联合国全球采购市场（United Nations Global Marketplace，简称UNGM）</h4>
                <p>是联合国各机构为完成各自承担的维和、人道主义救援及发展援助项目等任务以及自身办公需要而进行的采购活动，其采购特点是金额大、范围广，采购范围包括货物和服务两大部分，共涉及28大类、457小类的上万种商品和服务。</p>
            </div>
            <div class="roll">
                <div id="lista1" class="als-container">
                    <span class="als-prev"><img src="/ungmhome/images/left.png" alt="prev" title="previous" /></span>
                    <div style="overflow:hidden; width: 100%">
                        <div class="als-viewport" style="overflow:hidden;">
                            <ul class="als-wrapper" style="width: 2448px;height: 500px;">
                                <li class="als-item" ><div class="als-item-1" style="width:296px;height: 500px;">
                                    <h4 class="">打通国际渠道</h4>
                                    <p class="p-1">产品通过联合国采购直接进入目标市场</p>
                                    <p class="p-2">供应商的产品作为援助物资进入受援国家或地区后，往往意味着企业直接进入了这些国家和地区，为下一步开拓国际市场打通了渠道，也做好了口碑宣传的铺垫，节约了前期广告宣传费用。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-2" style="width:296px;height: 500px;">
                                    <h4 class="">拓宽国际市场</h4>
                                    <p class="p-1">产品直接进军联合国各成员国市场</p>
                                    <p class="p-2">联合国现有的193个成员国，会优先介绍指定供应商目并作为采购援助物品被优先选择。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-3" style="width:296px;height: 500px;">
                                    <h4 class="">拓宽国内市场</h4>
                                    <p class="p-1">产品销往国内更多市场</p>
                                    <p class="p-2">企业可直接进军国内政府采购，军事采购以及各供应商之间的直接采购，从而降低采购成本，拓宽企业国内市场。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-4" style="width:296px;height: 500px;">
                                    <h4 class="">资信证明</h4>
                                    <p class="p-1">产品销往国内更多市场</p>
                                    <p class="p-2">联合国交易成功后，企业会收到由联合国出具的资信报告。这份国际资信证明加之企业联合国指定供应商的身份，可以极大提升企业信誉度，给企业带来巨大的无形资产。企业进行招投标、融资、贷款或者承接国外订单，都起到很大的推动作用。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-5" style="width:296px;height: 500px;">
                                    <h4 class="">免费宣传</h4>
                                    <p class="p-1">（在联合国平台上免费发布信息）</p>
                                    <p class="p-2">联合国全球采购指定供应商的名字将刊登在联合国网站以及联合国国际刊物上，供世界买家实时查询。同时，供应商所能提供的产品和服务也可以在联合国召开的各种会议上作为信息发布。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-6" style="width:296px;height: 500px;">
                                    <h4 class="">无收汇风险</h4>
                                    <p class="p-1">（联合国有全球统一财务制度）</p>
                                    <p class="p-2">根据联合国的财务制度规定，联合国会在签订合同后的3—5个工作日内支付企业预付定金，在收到货物或发货单的30天内必须付完全款。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-7" style="width:296px;height: 500px;">
                                    <h4 class="">免税待遇</h4>
                                    <p class="p-1">（享受国家免税待遇不存在贸易壁垒）</p>
                                    <p class="p-2">联合国采购的所有物品及服务全部享受免税待遇。而且，与联合国做生意，不存在“反倾销诉讼”以及各种贸易壁垒等问题。</p>
                                </div></li>
                                <li class="als-item"><div class="als-item-8" style="width:296px;height: 500px;">
                                    <h4 class="">国际在线采购</h4>
                                    <p class="p-1">（优化企业管理加快企业电子商）</p>
                                    <p class="p-2">企业在UNGM平台上，可以实现直接的国际在线采购。这种在线采购模式既方便企业寻找全球供应商，也方便企业把产品展示给全球采购商，同时也是企业开拓产品销售的新渠道，为企业降本增效，优化管理。</p>
                                </div></li>
                        </div>
                    </div>
                    <span class="als-next"><img src="/ungmhome/images/right.png" alt="next" title="next" /></span>
                </div>
            </div>
            <div class="cooperation">
                <h3>合作伙伴</h3>
                <img class="img-responsive h-hp" src="/ungmhome/images/cooperation-img.png">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cooperation-ph">
                            <img class="img-responsive" src="/ungmhome/images/1.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cooperation-ph">
                            <img class="img-responsive" src="/ungmhome/images/2.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cooperation-ph">
                            <img class="img-responsive" src="/ungmhome/images/3.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cooperation-ph">
                            <img class="img-responsive" src="/ungmhome/images/4.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cooperation-ph">
                            <img class="img-responsive" src="/ungmhome/images/5.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cooperation-ph">
                            <img class="img-responsive" src="/ungmhome/images/6.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--1.内容结束-->

    <style type="text/css" media="screen">
    </style>
</body>
<script src="/ungmhome/js/jquery.js"></script>
<script type="text/javascript" >
        $(".vtabs li").click(function() {
            $(".vtabs li a").removeClass("active");
        });
</script>
<script src="/ungmhome/js/jquery.vticker.min.js"></script>
<script type="text/javascript" src="/ungmhome/js/jquery.als-1.7.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() 
        {
            $("#lista1").als({
                visible_items: 4,
                scrolling_items: 1,
                orientation: "horizontal",
                circular: "yes",
                autoscroll: "yes",
                interval: 5000,
                speed: 500,
                easing: "linear",
                direction: "right",
                start_from: 0
            });
        });
    </script>
<script type="text/javascript">
    $(function(){
    $('.dowebok').vTicker({
        showItems: 3,
        pause: 3000
    });
});
</script>
<script src="/ungmhome/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
    </script>
<script src="bootstrap/js/bootstrap.js"></script>



@endsection