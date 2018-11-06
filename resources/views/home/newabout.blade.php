@extends('home.layout.newindex')

@section('title')
    关于我们
@endsection


@section('content')
<link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
<body>
    <div class="main">
       
        <!--2.图片区-->
        <div class="img-responsive pic">
            <img src="/ungmhome/images/关于我们.jpg" alt="">
        </div>
        <!--3.公司介绍区-->
        <div class="company">
            <div class="container">
                <div class="text-center">
                    <img src="/ungmhome/images/关于我们.png" alt="">
                </div>
                <div class="txt">
                    <p>
                        九鼎智成（北京）信息技术股份有限公司是一家专注于大型会展和国际贸易信息服务领域，并对行业进行垂直化深入研究的一站式服务商。
                        以为外贸企业提供精准的大数据分析及全面的外贸资讯信息服务为宗旨,其依靠专业化的队伍，高速的信息流动和以人为中心的操作模式完成
                        对海量信息更有效的汇聚、关联、整理以及交互呈现; 以打造跨国采购的货物贸易、服务贸易、技术贸易，专业会展以及电子商务五大主体
                        业务功能板块，为全球采购商、供应商、参展商提供多元化模块服务。
                    </p>
                </div>
                <div class="img-responsive">
                    <img src="/ungmhome/images/关于我们.jpg" alt="">
                </div>
            </div>
            <div class="brand">
                <div class="container">
                    <div class="text-center brand1">
                        <img src="/ungmhome/images/aboutus2.png" alt="">
                    </div>
                    <div class="row brand-top">
                        <div class="col-md-6">
                            <div class="top-lt">
                                <h3>企业精神</h3>
                                <p>团结协作、规范诚信、追求卓越</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-rt">
                                <h3>经营理念</h3>
                                <p>一言九鼎 集智大成</p>
                            </div>
                        </div>
                    </div>
                    <div class="row brand-bot">
                        <div class="col-md-6">
                            <div class="bot-lt">
                                <h3>我们的使命</h3>
                                <p>为企业出口加速 让外贸业绩卓著</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bot-rt">
                                <h3>全球采购 先知先行</h3>
                                <p>先知：通过自主渠道为供应商提供全方位的采购信息，先行：通过协同为供应商提供全方位的采购管理解决方案。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>


@endsection