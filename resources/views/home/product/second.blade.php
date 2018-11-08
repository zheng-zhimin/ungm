
@extends('home.layout.newindex')

@section('title')
    产品二级页面
@endsection


@section('content')

    <link rel="stylesheet" href="/ungmhome/css/style.css">

    <div class="main">
       
       
      
          <!--2.图片区-->
        <div class="img-responsive purchasingPic">
            <ul>
                <li>
                    <img src="/ungmhome/images/供应商.png" class="picOne">
                    <a href=""><img src="/ungmhome/images/立即发布产品信息.png" class="picTwo buyerPic"></a>
                </li>
            </ul>
            
        </div>
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li class="curve1"><a href="/home/product/second">产品信息</a></li>
                </ul>
            </div> 
        </div>
        <!--4.采购发布查询区-->
        <div class="buyerSubpage">



            <div class="container" style="float:right;">

                  
                       <ul class="buyerSubpageOne row col-md-2">
                          
                         <a href="/home/product/third"><li class="buyerLi buyerBtn1">工业品</li>  </a>
                            <li><a href="javascript:;">机械及行业设备</a></li>
                            <li><a href="javascript:;">仪器仪表</a></li>
                            <li><a href="javascript:;">照明工业</a></li>
                            <li><a href="javascript:;">安全防护</a></li>
                            <li><a href="javascript:;">电工电气</a></li>
                            <li><a href="javascript:;">电子元器件</a></li>
                            <li><a href="javascript:;">五金工具</a></li>
                            <li><a href="javascript:;">包装</a></li>

                        </ul>      
              
            
              
                        <ul class="buyerSubpageOne row col-md-2">
                            <a href="/home/product/third1" title=""><li class="buyerLi buyerBtn2">原材料</li> </a>
                            <li><a href="javascript:;">纸业</a></li>
                            <li><a href="javascript:;">纺织及皮革</a></li>
                            <li><a href="javascript:;">化工</a></li>
                            <li><a href="javascript:;">精细化学品</a></li>
                            <li><a href="javascript:;">橡塑</a></li>
                            <li><a href="javascript:;">家纺家饰</a></li>
                            <li><a href="javascript:;">能源</a></li>
                            <li><a href="javascript:;">家用电器 </a></li>
                        </ul>
               
              
                        <ul class="buyerSubpageOne row col-md-2">
                            <a href="/home/product/third2" title="">
                                <li class="buyerLi buyerBtn3">消费品<!-- <span>+</span> --></li> 
                            </a>
                            <li><a href="javascript:;">汽车用品</a></li>
                            <li><a href="javascript:;">办公文教</a></li>
                            <li><a href="javascript:;">电脑数码类产品</a></li>
                            <li><a href="javascript:;">箱包皮具</a></li>
                            <li><a href="javascript:;">日用百货</a></li>
                            <li><a href="javascript:;">母婴用品</a></li>
                            <li><a href="javascript:;">美妆日化</a></li>
                            <li><a href="javascript:;">工艺品及礼品 </a></li>
                        </ul>
               

               
                     <ul class="buyerSubpageOne row col-md-2">
                            <a href="/home/product/third3" title="">
                                <li class="buyerLi buyerBtn4">绿色食品<!-- <span>+</span> --></li> 
                            </a> 
                            <li><a href="javascript:;">特色农产品</a></li>
                            <li><a href="javascript:;">生鲜蔬果</a></li>
                            <li><a href="javascript:;">粮油/干货</a></li>
                            <li><a href="javascript:;">调味品类</a></li>
                            <li><a href="javascript:;">茗茶/冲饮</a></li>
                            <li><a href="javascript:;">营养保健食品</a></li>
                            <li><a href="javascript:;">休闲零食</a></li>
                            <li><a href="javascript:;">饮料</a></li>
                        </ul>
               

               
                      <ul class="buyerSubpageOne row col-md-2">
                            <a href="/home/product/third4" title="">
                                <li class="buyerLi buyerBtn5">商务服务<!-- <span>+</span> --></li> 
                            </a> 
                            <li><a href="javascript:;">广电传媒</a></li>
                            <li><a href="javascript:;">商务服务</a></li>
                            <li><a href="javascript:;">项目合作</a></li>
                            <li><a href="javascript:;">代理</a></li>
                        </ul>
                
              
         </div>

        <div style="clear:both"></div>
            
        
        </div>
    </div>
   

@endsection