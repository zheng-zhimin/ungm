
@extends('home.layout.newindex')

@section('title')
    全球贸易
@endsection


@section('content')

       

    <link rel="stylesheet" href="/ungmhome/css/style.css">

    <div class="main">
      
        <!--2.图片区-->
        <div class="img-responsive pic">
            <img src="/ungmhome/images/全球贸易.jpg" alt="">
        </div>
        <!--3.全球贸易数据区-->
        <div class="globalTrade">
            <!--UNGM介绍区-->
            <div class="tradeUngm">
                <div class="container">
                    <div class="text-center caption">
                        <img src="/ungmhome/images/globalTrade1.png" alt="">
                        <h3>联合国全球采购市场（United Nations Global Marketplace，简称UNGM）</h3>
                        <p align="left">是联合国各机构为完成各自承担的维和、人道主义救援及发展援助项目等任务以及自身办公需要而进行的采购活动，其采购特点是金额
                            大、范围广，采购范围包括货物和服务两大部分，共涉及28大类、457小类的上万种商品和服务。 </p>
                    </div>
                    <div class="tradeList">
                        <div class="tradeUl">
                            <ul>
                                <li>
                                    <h2><span>01</span><b>打通国际渠道</b></h2>
                                    <h3>产品通过联合国采购直接进入目标市场</h3>
                                    <p>
                                        供应商的产品作为援助物资进入受援国家或地区后，往往意味着企业直接进入了这些国家和地区，
                                        为下一步开拓国际市场打通了渠道，也做好了口碑宣传的铺垫，节约了前期广告宣传费用。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>02</span><b>拓宽国际市场</b></h2>
                                    <h3>产品直接进军联合国各成员国市场</h3>
                                    <p>
                                        联合国现有的193个成员国，会优先介绍指定供应商目并作为采购援助物品被优先选择。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>03</span><b>拓宽国内市场</b></h2>
                                    <h3>产品销往国内更多市场</h3>
                                    <p>
                                        企业可直接进军国内政府采购，军事采购以及各供应商之间的直接采购，从而降低采购成本，拓宽企业国内市场。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>04</span><b>资信证明</b></h2>
                                    <h3>提升企业信誉度成为企业无形资产</h3>
                                    <p>
                                        联合国交易成功后，企业会收到由联合国出具的资信报告。这份国际资信证明加之企业联合国指定供应商的身份，可以
                                        极大提升企业信誉度，给企业带来巨大的无形资产。企业进行招投标、融资、贷款或者承接国外订单，都起到很大的
                                        推动作用。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>05</span><b>免费宣传</b></h2>
                                    <h3>在联合国平台上免费发布信息</h3>
                                    <p>
                                        联合国交易成功后，企业会收到由联合国出具的资信报告。这份国际资信证明加之企业联合国指定供应商的身份，可以
                                        极大提升企业信誉度，给企业带来巨大的无形资产。企业进行招投标、融资、贷款或者承接国外订单，都起到很大的
                                        推动作用。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>06</span><b>无收汇风险</b></h2>
                                    <h3>联合国有全球统一财务制度</h3>
                                    <p>
                                        根据联合国的财务制度规定，联合国会在签订合同后的3—5个工作日内支付企业预付定金，在收到货物或发货单的30天内必须付完全款。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>07</span><b>免税待遇</b></h2>
                                    <h3>享受国家免税待遇不存在贸易壁垒</h3>
                                    <p>
                                        联合国采购的所有物品及服务全部享受免税待遇。而且，与联合国做生意，不存在“反倾销诉讼”以及各种贸易壁垒等问题。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>08</span><b>国际在线采购</b></h2>
                                    <h3>优化企业管理加快企业电子商</h3>
                                    <p>
                                        企业在UNGM平台上，可以实现直接的国际在线采购。这种在线采购模式既方便企业寻找全球供应商，也方便企业把
                                         产品展示给全球采购商，同时也是企业开拓产品销售的新渠道，为企业降本增效，优化管理。
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--图表展示区-->
            <div class="container">
                <div class="text-center caption">
                    <img src="/ungmhome/images/globalTrade2.png" alt="">
                </div>
                <div class="dataOne text-center">
                    <h1>一、九月份货物进出口统计</h1>
                    <div class="row">
                        <div class="col-md-6 chartLt">
                            <img src="/ungmhome/images/globalTrade3.png" alt="">
                        </div>
                        <div class="col-md-6 chartRt">
                            <img src="/ungmhome/images/globalTrade4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="dataTwo text-center">
                    <h1>二、2018年度货物进出口统计</h1>
                    <div class="chartTop">
                        <img src="/ungmhome/images/globalTrade5.png" alt="">
                    </div>
                    <div  class="chartBot">
                        <img src="/ungmhome/images/globalTrade6.png" alt="">
                    </div>
                </div>
                <div class="dataThree">
                    <div class="text-center">
                        <h1>三、2018年度货物进出口数据统计</h1>
                        <div class="chartEnd">
                            <img src="/ungmhome/images/globalTrade7.png" alt="">
                        </div>
                    </div>
                    <p>数据来源：中国海关总署</p>
                </div>
            </div>
            <!--政策解读区-->
            <div class="policy">
                <div class="container">
                    <div class="text-center caption">
                        <img src="/ungmhome/images/globalTrade8.png" alt=""> 
                    </div>
                    <div class="policyList">
                        <ul>
                            <li>
                                <h2>08-03</h2>
                                <h5>2018</h5>
                                <h3>商务部外贸司负责人就《关于在北京等22个城市设立跨境电子商务综合试验区的批复》进行解读</h3>
                                <p>发展跨境电商等贸易新业态是推动外贸高质量发展的重要举措。党中央、国务院高度重视跨境电商等贸易新业态发展...</p>
                                <a href="/home/businesspolicy/one"><span>查看更多&nbsp;></span></a>
                            </li>
                            <li>
                                <h2>07-10</h2>
                                <h5>2018</h5>
                                <h3>商务部外贸司负责人就《关于扩大进口促进对外贸易平衡发展的意见》进行解读</h3>
                                <p>改革开放以来，我国对外贸易取得重大成就，已经连续9年保持全球货物贸易第一大出口国和第二大进口国地位。20...</p>
                               <a href="/home/businesspolicy/two"><span>查看更多&nbsp;></span></a>
                            </li>
                            <li>
                                <h2>04-04</h2>
                                <h5>2018</h5>
                                <h3>商务部贸易救济局负责人关于《倾销及倾销幅度期间复审规则》的解读</h3>
                                <p>党的十九大以来，以习近平同志为核心的党中央对全面依法治国提出了明确要求。完善以宪法为核心的中国特色社会...</p>
                                <a href="/home/businesspolicy/three"><span>查看更多&nbsp;></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="policyBtn">
                        <a href="/home/businesspolicy/more" title=""><input type="button" value="查看全部"></a>
                    </div>
                </div>
            </div>
        </div>
      
    </div>


@endsection