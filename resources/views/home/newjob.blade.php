@extends('home.layout.newindex')

@section('title')
    招贤纳士
@endsection


@section('content')

<link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">
<style>
  .col-md-6{
    padding-right:20px;
    padding-left: 20px;
  }
</style>
<body>
    <div class="main">
       
        <!--2.图片区-->
        <div class="img-responsive pic">
            <img src="/ungmhome/images/招贤纳士.jpg" alt="">
        </div>
        <!--3.招聘区-->   
        <div class="join-us">
            <div class="container">
                <div class="text-center">
                    <img src="/ungmhome/images/jobs1.png" alt="">
                </div>
                <div class="row recruit">
                    <div class="col-md-6">
                        <div class="recruit-lt">
                            <div class="row lt-top">
                                <h2>产品经理（&nbsp;1人&nbsp;）</h2>
                                <a href="/home/contact1" class="btn btn-success">立即申请</a>
                            </div>
                            <div class="row lt-bot">
                                <h4>岗位职责：</h4>
                                <p>负责公司公众号,网站运营,日常管理,以及整体规划</p>
                                <h4 style="margin-top:10px;">岗位要求：</h4>
                                <p>1.5年以上专职互联网产品工作经验，曾独立负责平台产品业务的规划与管理，包含金融平台，游戏，电商类行业；</p>
                                <span class="lt-hidden">查看更多&nbsp;></span>
                                <div class="lt-show">
                                    <p>2.熟悉平台与终端软件产品的整体实现过程，包括用户分析行业调研，产品设计，技术实现等；</p>
                                    <p>3.能熟练使用产品规划的基本 工具，包含不限于原型，脑图流程及演示工具等；</p>
                                    <p>4.具有独立思考能力，有好的沟通力，影响力及组织协调推动能力；5以目 标为导向拥有良好的用户体验把控能力。</p>
                                    <p>5.以目标为导向拥有良好的用户体验把控能力。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="recruit-rt">
                            <div class="row rt-top">
                                <h2>业务销售 （&nbsp;2人&nbsp;）</h2>
                                <a href="/home/contact1" class="btn btn-success">立即申请</a>
                            </div>
                            <div class="row rt-bot">
                                <h4>岗位职责：</h4>
                                <p>1.负责公司项目的销售及推广，根据上级安排进行电访及回访；</p>
                                <p>2.负责搜集符合条件的新客户资料并进行沟通，开发 新客户；</p>
                                <span class="rt-hidden">查看更多&nbsp;></span>
                                <div class="rt-show">
                                    <p>3.维护老客户的业务，提升服务水平；</p>
                                    <p>4.客户追访，回访，维护客户关系，活动邀约及跟进，为客户提供专业的咨询，管理客户关系；</p>
                                    <p>5.具有独立思考能力，有好的沟通力，影响力及组织协调推动能力；5以目 标为导向拥有良好的用户体验把控能力。</p>
                                    <p>6.完成量化的工作要求，能独立处理上级安排的其他工作</p>
                                    <p>7.无责底薪+双休+高提成；</p>
                                    <h4 style="margin-top:10px;">岗位要求：</h4>
                                    <p>1.对销售工作有较高的热情，有大型会议，展会，协会工作经验优先；</p>
                                    <p>2.形象气质佳，普通话标准，具有良好的沟通 表达能力，语音富有感染力；</p>
                                    <p>3.为人踏实，品德良好，综合素质修养佳，能吃苦耐劳，责任心强；</p>
                                    <p>4.有自信心，乐观向上，工作 态度积极认真，具有较强的团队合作精神；</p>
                                    <p>5.乐于接受挑战性的工作，有较高的敬业精神，喜欢销售工作。简历请附带一张近照。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mail">
                    <span>您可以将自己的简历发送至邮箱<a href="">&nbsp;hr@jodn.com.cn</a></span>
                </div>
            </div>
        </div>   
       
    </div>
</body>

<script>
    $(".lt-hidden").click(function(){
        $(this).hide();
        $('.lt-show').show();
    });
    $(".rt-hidden").click(function(){
        $(this).hide();
        $('.rt-show').show();
    });
</script>





@endsection