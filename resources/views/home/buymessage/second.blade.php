@extends('home.layout.newindex')

@section('title')
    采购信息
@endsection


@section('content')

       


    <link rel="stylesheet" href="/ungmhome/css/style.css">

    <div class="main">
    
        <!---2.图片区-->
        <div class="img-responsive purchasingPic">
            <ul>
                <li>
                    <img src="/ungmhome/images/purchasing1.png" class="picOne">
       @if(Session::has('homeuser'))
          @if(Session::get('homeuser')->identity==1)
           <a href="/home/userinfo/index"><img src="/ungmhome/images/purchasing2.png" class="picTwo"></a>
          @else
           <a href="/home/userinfo/indexed"><img src="/ungmhome/images/purchasing2.png" class="picTwo"></a>
          @endif

         @else
        <a href="/home/newlogin/login"><img src="/ungmhome/images/purchasing2.png" class="picTwo buyerPic"></a>
         @endif
                   
                </li>
            </ul>
            
        </div>
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li class="curve1"><a href="">采购信息</a></li>
                </ul>
            </div> 
        </div>
        <!---4.采购发布查询区-->
       <!--  <div class="purchasingDemand">
           <div class="container">
               <ul>
                   <li>
                       <h2>快恢复二极管&nbsp;GP30KL</h2>
                       <h4>采购数量：大量</h4>
                       <p>发布时间：2018-10-25</p>
                       <p>截止日期：长期有效</p>
                       <p>采购类型：二极管</p>
                       <p>已有报价：0条</p>
                       <input type="button" value="立即沟通">
                   </li>
                   <li>
                       <h2>快恢复二极管&nbsp;GP30KL</h2>
                       <h4>采购数量：大量</h4>
                       <p>发布时间：2018-10-25</p>
                       <p>截止日期：长期有效</p>
                       <p>采购类型：二极管</p>
                       <p>已有报价：0条</p>
                       <input type="button" value="立即沟通">
                   </li>
                   <li>
                       <h2>快恢复二极管&nbsp;GP30KL</h2>
                       <h4>采购数量：大量</h4>
                       <p>发布时间：2018-10-25</p>
                       <p>截止日期：长期有效</p>
                       <p>采购类型：二极管</p>
                       <p>已有报价：0条</p>
                       <input type="button" value="立即沟通">
                   </li>
                   <li>
                       <h2>快恢复二极管&nbsp;GP30KL</h2>
                       <h4>采购数量：大量</h4>
                       <p>发布时间：2018-10-25</p>
                       <p>截止日期：长期有效</p>
                       <p>采购类型：二极管</p>
                       <p>已有报价：0条</p>
                       <input type="button" value="立即沟通">
                   </li>
                   <li class="purchasingLast">
                       <h2>快恢复二极管&nbsp;GP30KL</h2>
                       <h4>采购数量：大量</h4>
                       <p>发布时间：2018-10-25</p>
                       <p>截止日期：长期有效</p>
                       <p>采购类型：二极管</p>
                       <p>已有报价：0条</p>
                       <input type="button" value="立即沟通">
                   </li>
               </ul>
           </div>
       </div> -->
        <div class="purchasingOne">
            <div class="container">
                <div class="row purchasingTwo">
                    <div class="col-md-2"><img src="/ungmhome/images/purchasing3.png" alt=""></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 demandLt">
                            <ul>
                                <a href="/home/buymessage/third" title=""><li><h4>工业品</h4></li></a>
                                <li>
                                    <a href="/home/buymessage/third">机械及行业设备</a><span>|</span>
                                    <a href="/home/buymessage/third">仪器仪表</a><span>|</span>
                                    <a href="/home/buymessage/third">照明工业</a><span>|</span>
                                    <a href="/home/buymessage/third">安全防护</a>
                               
                               
                                    <a href="/home/buymessage/third">电工电气</a><span>|</span>
                                    <a href="/home/buymessage/third">电子元器件</a><span>|</span>
                                    <a href="/home/buymessage/third">五金工具</a><span>|</span>
                                    <a href="/home/buymessage/third">包装</a><span>|</span>
                                    <a href="/home/buymessage/third">环保</a>
                                
                               
                                    <a href="/home/buymessage/third">家装、建材</a><span>|</span>
                                    <a href="/home/buymessage/third">交通运输</a><span>|</span>
                                    <a href="/home/buymessage/third">医药保健</a><span>|</span>
                                    <a href="/home/buymessage/third">印刷</a>
                                </li>
                                <li>
                                    <a href="/home/buymessage/third">二手设备转让</a><span>|</span>
                                    <a href="/home/buymessage/third">加工</a><span>|</span>
                                    <a href="/home/buymessage/third">LED</a><span>|</span>
                                    <a href="/home/buymessage/third">个人防护</a><span>|</span>
                                    <a href="/home/buymessage/third">专用设备</a>
                                </li>
                            </ul>
                            </div>
                          <!--   <div class="col-md-7 demandRt">
                              <ul>
                                  <li><h4>最新工业品采购信息</h4></li>
                                  <li>
                                      <span>美国Justrite红色可燃液体防火安全柜 </span><span class="demandCity"></span>
                                      <span class="demandDate">2018-11-9</span><a href=""></a>
                                  </li>
                                  <li class="demandBorder">
                                      <span>德国环保存储柜 </span><span class="demandCity"></span>
                                      <span class="demandDate">2018-11-09</span><a href=""></a>
                                  </li>
                                  <li>
                                      <span>国产防爆铝合金手摇式抽油泵37L </span><span class="demandCity"></span>
                                      <span class="demandDate">2018-11-10</span><a href=""></a>
                                  </li>
                              </ul>
                          </div> -->
                        </div>
                        
                    </div>
                </div>
                <div class="row purchasingTwo">
                    <div class="col-md-2"><img src="/ungmhome/images/purchasing4.png" alt=""></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 demandLt">
                            <ul>

                                 <a href="/home/buymessage/third1" title=""><li><h4>原材料</h4></li></a>
                                <li>
                                    <a href="/home/buymessage/third1">纸业</a><span>|</span>
                                    <a href="/home/buymessage/third1">纺织及皮革</a><span>|</span>
                                    <a href="/home/buymessage/third1">化工</a><span>|</span>
                                    <a href="/home/buymessage/third1">精细化学品</a>
                               
                                    <a href="/home/buymessage/third1">电工电气</a><span>|</span>
                                    <a href="/home/buymessage/third1">橡塑家纺</a><span>|</span>
                                    <a href="/home/buymessage/third1">家饰</a><span>|</span>
                                    <a href="/home/buymessage/third1">能源家用电器</a><span>|</span>
                                    <a href="/home/buymessage/third1">冶金</a>
                               
                                    <a href="/home/buymessage/third1">矿产</a><span>|</span>
                                    <a href="/home/buymessage/third1">交通运输</a><span>|</span>
                                    <a href="/home/buymessage/third1">钢铁</a><span>|</span>
                                    
                                </li>
                                
                            </ul>
                            </div>
                           <!--  <div class="col-md-7 demandRt">
                               <ul>
                                   <li><h4>最新原材料采购信息</h4></li>
                                   <li>
                                       <span>青岛啤酒PH缓冲液多对对多对对得到的多多多多多</span><span class="demandCity"></span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                                   <li  class="demandBorder">
                                       <span>求购库存橡胶化工原材料</span><span class="demandCity"></span>
                                       <span class="demandDate">2018-10-03</span><a href=""></a>
                                   </li>
                                   <li>
                                       <span>求购回收UV光油库存化工原材料过期 </span><span class="demandCity"></span>
                                       <span class="demandDate">2018-10-03</span><a href=""></a>
                                   </li>
                               </ul>
                           </div> -->
                        </div>
                        
                    </div>
                </div>
                <div class="row purchasingTwo">
                    <div class="col-md-2"><img src="/ungmhome/images/purchasing5.png" alt=""></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 demandLt">
                            <ul>



                                <a href="/home/buymessage/third2" title=""><li><h4>消费品</h4></li></a>
                                <li>
                                    <a href="/home/buymessage/third2">汽车用品</a><span>|</span>
                                    <a href="/home/buymessage/third2">办公文教</a><span>|</span>
                                    <a href="/home/buymessage/third2">电脑数码类产品</a><span>|</span>
                                    <a href="/home/buymessage/third2">箱包</a>
                                
                                    <a href="/home/buymessage/third2">电工电气</a><span>|</span>
                                    <a href="/home/buymessage/third2">皮具</a><span>|</span>
                                    <a href="/home/buymessage/third2">日用百货</a><span>|</span>
                                    <a href="/home/buymessage/third2">母婴用品</a><span>|</span>
                                    <a href="/home/buymessage/third2">美妆</a>
                                
                                    <a href="/home/buymessage/third2">化工艺品及礼品</a><span>|</span>
                                    <a href="/home/buymessage/third2">家电</a><span>|</span>
                                    <a href="/home/buymessage/third2">气摩及配件</a><span>|</span>
                                    <a href="/home/buymessage/third2">玩具</a>
                                </li>
                                <li>
                                    <a href="/home/buymessage/third2">食品及饮料</a><span>|</span>
                                    <a href="/home/buymessage/third2">加工</a><span>|</span>
                                    <a href="/home/buymessage/third2">运动户外</a><span>|</span>
                                    <a href="/home/buymessage/third2">鞋帽</a><span>|</span>
                                    <a href="/home/buymessage/third2">服装</a>
                                </li>
                            </ul>
                            </div>
                          <!--   <div class="col-md-7 demandRt">
                              <ul>
                                  <li><h4>最新消费品采购信息</h4></li>
                                  <li>
                                      <span>通用塑料高更何况好几年 </span><span class="demandCity">江苏/镇江市</span>
                                      <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                  </li>
                                  <li  class="demandBorder">
                                      <span style="float:left;">求购纸箱加工ffffffs </span><span class="demandCity" >江苏/镇江市</span>
                                      <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                  </li>
                                  <li>
                                      <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                      <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                  </li>
                              </ul>
                          </div> -->
                        </div>
                        
                    </div>
                </div>
                <div class="row purchasingTwo">
                    <div class="col-md-2"><img src="/ungmhome/images/purchasing6.png" alt=""></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 demandLt">
                            <ul>



                                <a href="/home/buymessage/third3" title=""><li><h4>绿色农业</h4></li></a>
                                <li>
                                    <a href="/home/buymessage/third3">特色农产品</a><span>|</span>
                                    <a href="/home/buymessage/third3">生鲜蔬果</a><span>|</span>
                                    <a href="/home/buymessage/third3">粮油/干货</a><span>|</span>
                                    <a href="/home/buymessage/third3">调味品类</a>
                                
                                    <a href="/home/buymessage/third3">茗茶/冲饮</a><span>|</span>
                                    <a href="/home/buymessage/third3">营养保健食品</a><span>|</span>
                                    <a href="/home/buymessage/third3">休闲零食</a><span>|</span>
                                    <a href="/home/buymessage/third3">饮料</a><span>|</span>
                                    <a href="/home/buymessage/third3">牛奶</a>
                               
                                    <a href="/home/buymessage/third3">乳品</a><span>|</span>
                                    <a href="/home/buymessage/third3">交通运输</a><span>|</span>
                                    <a href="/home/buymessage/third3">佳酿</a><span>|</span>
                                    <a href="/home/buymessage/third3">美酒</a>
                               
                                </li>
                            </ul>
                            </div>
                           <!--  <div class="col-md-7 demandRt">
                               <ul>
                                   <li><h4>最新绿色农业采购信息</h4></li>
                                   <li>
                                       <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                                   <li  class="demandBorder">
                                       <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                                   <li>
                                       <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                               </ul>
                           </div> -->
                        </div>
                        
                    </div>
                </div>
                <div class="row purchasingTwo">
                    <div class="col-md-2"><img src="/ungmhome/images/purchasing7.png" alt=""></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 demandLt">
                            <ul>
                                <a href="/home/buymessage/third4" title=""><li><h4>商务服务</h4>
                                </li>
                                </a>
    

                                <li>
                                    <a href="/home/buymessage/third4">广电</a><span>|</span>
                                    <a href="/home/buymessage/third4">传媒</a><span>|</span>
                                    <a href="/home/buymessage/third4">商务服务</a><span>|</span>
                                    <a href="/home/buymessage/third4">项目</a>
                                
                                    <a href="/home/buymessage/third4">合作代理</a><span>|</span>
                                   
                                </li>
                            </ul>
                            </div>
                           <!--  <div class="col-md-7 demandRt">
                               <ul>
                                   <li><h4>最新商务服务采购信息</h4></li>
                                   <li>
                                       <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                                   <li  class="demandBorder">
                                       <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                                   <li>
                                       <span>求购纸箱加工 </span><span class="demandCity">江苏/镇江市</span>
                                       <span class="demandDate">2018-10-03</span><a href="">查看详情</a>
                                   </li>
                               </ul>
                           </div> -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
       
    </div>


@endsection