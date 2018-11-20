

@extends('home.layout.newindex')

@section('title')
    全球贸易
@endsection


@section('content')

       
<style>
    .nn-2{
    color: #3477ff !important;
    border-bottom: 2px solid #3477ff;
}
  </style>
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
                <div class="container"><a name="1"></a>
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
                                        联合国交易成功后，企业会收到由联合国出具的报告。这份信息反馈加之企业联合国指定供应商的身份，可以
                                        极大提升企业信誉度，给企业带来巨大的无形资产。企业进行招投标、融资、贷款或者承接国外订单，都起到很大的
                                        推动作用。
                                    </p>
                                </li>
                                <li>
                                    <h2><span>05</span><b>免费宣传</b></h2>
                                    <h3>在联合国平台上免费发布信息</h3>
                                    <p>
                                        联合国交易成功后，企业会收到由联合国出具的信息反馈。这份国际资信证明加之企业联合国指定供应商的身份，可以
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
                <div > </div>
                <div class="text-center caption">
                <a name="2"></a>
                    <img src="/ungmhome/images/globalTrade2.png" alt="">
                </div>
                <div class="dataOne text-center">
                    <h1>一、九月份货物进出口统计</h1>
                    <div class="row" style="margin: 0px;">
                        <div class="col-md-6 chartLt block" style="background-color: #ffffff;box-shadow: 0 1px 4px #0000002e;margin-top: 10px;padding: 30px 20px 30px 20px;">
                            <div style="width: 100%;height: 470px;" id="aaa"></div>
                        </div>
                        <div class="col-md-6 chartRt block" style="background-color: #ffffff;box-shadow: 0 1px 4px #0000002e;margin-top: 10px;padding: 30px 20px 30px 20px;">
                            <div style="width: 100%;height: 470px;" id="char2"></div>
                        </div>
                    </div>
                </div>
                <div class="dataTwo text-center">
                    <h1>二、2018年度货物进出口统计</h1>
                    <div class="chartTop block" style="width: 100%;height: 400px;" id="char3">

                    </div>
                    <div  class="chartBot block" style="width: 100%;height: 440px;padding-top:45px;padding-bottom:45px;" id="char4">

                    </div>
                </div>
                <div class="dataThree">
                    <div class="text-center">
                        <h1>三、2018年度货物进出口数据统计</h1>
                        <div class="chartEnd char5 block" align="center" style="width: 100%" id="char5">
                            <img class="" src="/ungmhome/images/globalTrade7.png">
                        </div>
                    </div>
                    <p>数据来源：中国海关总署</p>
                </div>
            </div>
            <!--政策解读区-->
            <div class="policy">
                <div class="container">
                    <div class="text-center caption"><a name="3"></a> 
                        <img src="/ungmhome/images/globalTrade8.png" alt="">
                    </div>
                    <div class="policyList">
                        <ul>
                            <li>
                                <h2>08-03</h2>
                                <h5>2018</h5>
                                <a href="/home/businesspolicy/one"><h3>商务部外贸司负责人就《关于在北京等22个城市设立跨境电子商务综合试验区的批复》进行解读</h3></a>
                                <p>发展跨境电商等贸易新业态是推动外贸高质量发展的重要举措。党中央、国务院高度重视跨境电商等贸易新业态发展...</p>
                                <a href="/home/businesspolicy/one"><span>查看更多&nbsp;></span></a>
                            </li>
                            <li>
                                <h2>07-10</h2>
                                <h5>2018</h5>
                                <a href="/home/businesspolicy/two"><h3>商务部外贸司负责人就《关于扩大进口促进对外贸易平衡发展的意见》进行解读</h3></a>
                                <p>改革开放以来，我国对外贸易取得重大成就，已经连续9年保持全球货物贸易第一大出口国和第二大进口国地位。20...</p>
                               <a href="/home/businesspolicy/two"><span>查看更多&nbsp;></span></a>
                            </li>
                            <li>
                                <h2>04-04</h2>
                                <h5>2018</h5>
                                <a href="/home/businesspolicy/three"><h3>商务部贸易救济局负责人关于《倾销及倾销幅度期间复审规则》的解读</h3></a>
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
<script src="/ungmhome/js/echarts.js"></script>
<script src="/ungmhome/js/jquery.smoove.js"></script>
<script>$('.block').smoove({offset:'40%'});</script>
<script type="text/javascript">

    // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('aaa'));

        // 指定图表的配置项和数据
    option = {
    title: {
        x: 'center',
        text: '货物进出口月度统计（金额统计）',
    },
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        },
        axisTick: {
                alignWithLabel: true
            }
    },legend: {
        data:['进出口金额','出口金额','进口金额'],
        "textStyle": {
            "fontSize": 14
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : ['进出口金额(亿美元)','出口金额(亿美元)','进口金额(亿美元)'],
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : {
         min:1000,
                max:5000,
                axisLabel:{
                    formatter: function (value) {
                    var texts = [];
                    if(value==0){
                    texts.push('1000');
                    }
                    else if (value <=2000) {
                    texts.push('2000');
                    }
                    else if (value<= 3000) {
                    texts.push('3000');
                    }
                    else if(value<= 4000){
                    texts.push('4000');
                    }
                    else{
                    texts.push('5000');
                    }
                    return texts;

                    }
                }
    },
    series : [
        {
            name:'金额（亿美元）',
            type:'bar',
            barWidth: '60%',
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#55c1ff','#01a1ff','#0076ba'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{b}\n{c}',
                        "textStyle": {
                            "fontSize": 14
                        }
                    }
                }
            },
            data:[4216.8, 2266.9, 1950],


        }
    ]
};

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
</script>
<script type="text/javascript">
     var myChart = echarts.init(document.getElementById('char2'));

  option = {
     title: {
        x: 'center',
        text: '货物进出口月度统计（同比统计）',

    },
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        },
        "textStyle": {
            "fontSize": 14
        }
    },legend: {
        data:['进出口同比','出口同比','进口同比'],
        "textStyle": {
            "fontSize": 14
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : ['进出口同比(%)','出口同比(%)','进口同比(%)'],
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    /*yAxis : [

        {
            type : 'value',
            axisLabel: {  
                  show: true,  
                  interval: 'auto',  
                  formatter: '{value} %'  
                }, 
        }
    ],*/
    yAxis: {
                min:14.1,
                max:14.5,
                axisLabel:{
                    formatter: function (value) {
                    var texts = [];
                    if(value==14.1){
                    texts.push('14.1%');
                    }
                    else if (value <=14.2) {
                    texts.push('14.2%');
                    }
                    else if (value<= 14.3) {
                    texts.push('14.3%');
                    }
                    else if(value<= 14.4){
                    texts.push('14.4%');
                    }
                    else{
                    texts.push('14.5%');
                    }
                    return texts;

                    }
                }
    },
    series : [
        {
            name:'同比（%）',
            type:'bar',
            barWidth: '60%',
            itemStyle: {
                normal: {
                    label: {  
                        show: true,  
                        position: 'top',  
                        formatter: '{b}\n{c}%'  
                    },
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#55c1ff','#01a1ff','#0076ba'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{b}\n{c}',
                        "textStyle": {
            "fontSize": 14
        }
                    }
                }
            },
            data:[14.4, 14.5, 14.3],


        }
    ]
};
myChart.setOption(option);
</script>
<script type="text/javascript">
     var myChart = echarts.init(document.getElementById('char3'));

   option = {
     title: {
        x: 'center',
        text: '货物进出口月度统计（统计）'

    },
    tooltip : {
        trigger: 'axis',
        "textStyle": {
            "fontSize": 14
        }
    },
    legend: {
        data:['进出口金额(亿美元)','出口金额(亿美元)','进口金额(亿美元)'],
        bottom:'1',
        "textStyle": {
            "fontSize": 14
        }
    },
    /*toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },*/
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月']
        }
    ],
    yAxis : {
         min:1000,
                max:5000,
                axisLabel:{
                    formatter: function (value) {
                    var texts = [];
                    if(value==0){
                    texts.push('1000');
                    }
                    else if (value <=2000) {
                    texts.push('2000');
                    }
                    else if (value<= 3000) {
                    texts.push('3000');
                    }
                    else if(value<= 4000){
                    texts.push('4000');
                    }
                    else{
                    texts.push('5000');
                    }
                    return texts;

                    }
                }
    },
    series : [
        {
            name:'进出口金额(亿美元)',
            type:'line',
            data:[3907, 3094.9,3532.3, 3729.9,4008.2,3981.7,4030.8,4069.5,4216.8],
             //symbol:'star',//拐点样式
                symbolSize: 8,//拐点大小
                itemStyle : {
                    normal : {
                        lineStyle:{
                            width:4,//折线宽度
                            color:"#67c6f9"//折线颜色
                        }
                    }
                }
        },
        {
            name:'出口金额(亿美元)',
            type:'line',
            data:[2005.2,1716.2,1741.2,2004.4,2128.7,2167.4,2155.7,2174.3,2266.9],
            //color: '#0098ff'
            symbolSize: 8,//拐点大小
                itemStyle : {
                    normal : {
                        lineStyle:{
                            width:4,//折线宽度
                            color:"#0098ff"//折线颜色
                        }
                    }
                }
        },
        {
            name:'进口金额(亿美元)',
            type:'line',
            data:[1801.8,1738.8,1791,1716.5,1779.5,1751.3,1875.2,1895.2,1950],
            //color: '#0069ac'
            symbolSize: 8,//拐点大小
                itemStyle : {
                    normal : {
                        lineStyle:{
                            width:4,//折线宽度
                            color:"#0069ac"//折线颜色
                        }
                    }
                }
        }
    ]
};
myChart.setOption(option);
</script>
<script type="text/javascript">
     var myChart = echarts.init(document.getElementById('char4'));

option = {
     title: {
        x: 'center',
        text: '货物进出口月度统计（同比统计）'
       
    },

    tooltip : {
        trigger: 'axis',
        "textStyle": {
            "fontSize": 14
        }
    },

    legend: {
        data:['进出口金额（同比%）','出口金额（同比%）','进口金额（同比%）'],
        bottom:'1',
        "textStyle": {
            "fontSize": 14
        }
    },
    /*toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },*/
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月']
        }
    ],
    yAxis: {
                min:-10,
                max:50,
                axisLabel:{
                    formatter: function (value) {
                    var texts = [];
                    if(value==-10){
                    texts.push('-10%');
                    }
                    else if (value <=20) {
                    texts.push('20%');
                    }
                    else if (value<= 30) {
                    texts.push('30%');
                    }
                    else if(value<= 40){
                    texts.push('40%');
                    }
                    else{
                    texts.push('50%');
                    }
                    return texts;

                    }
                }
    },
    series : [
        {
            name:'进出口金额（同比%）',
            type:'line',
            data:[22,24.5,5.3,16.7,18.5,12.5,18.8,14.3,14.4],
            //color: '#67c6f9'
            symbolSize: 8,//拐点大小
                itemStyle : {
                    normal : {
                        lineStyle:{
                            width:4,//折线宽度
                            color:"#67c6f9"//折线颜色
                        }
                    }
                }
        },
        {
            name:'出口金额（同比%）',
            type:'line',
            data:[11.1,44.5,-2.7,12.9,12.6,11.3,12.2,9.8,14.5],
            //color: '#0098ff'
            symbolSize: 8,//拐点大小
                itemStyle : {
                    normal : {
                        lineStyle:{
                            width:4,//折线宽度
                            color:"#0098ff"//折线颜色
                        }
                    }
                }
        },
        {
            name:'进口金额（同比%）',
            type:'line',
            data:[36.9,6.3,14.4,21.5,26,14.1,27.3,20,14.3],
            //color: '#0069ac'
            symbolSize: 8,//拐点大小
                itemStyle : {
                    normal : {
                        lineStyle:{
                            width:4,//折线宽度
                            color:"#0069ac"//折线颜色
                        }
                    }
                }
        }
    ]
};
myChart.setOption(option);
</script>
@endsection