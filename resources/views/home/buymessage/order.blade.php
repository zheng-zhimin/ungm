@extends('home.layout.newindex')

@section('title')
    立即询价
@endsection


@section('content')


    <!-- <link rel="stylesheet" href="/ungmhome/css/style.css"> -->
           <style>
        .immediately{
            padding: 17px;

        }
        .immediately .container{
           background-color: #ffffff;
        box-shadow: 2px 4px 4px 0px 
        rgba(0, 0, 0, 0.1);
        padding-bottom: 40px;
           padding-left: 60px; 
        } 
        .immediately span{
            font-family: MicrosoftYaHei;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 24px;
            letter-spacing: 0px;
            color: #333333;
        }
        .immediately .red{
           color:red;
           font-family: MicrosoftYaHei;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 35px;
            letter-spacing: 0px;
            float: left;
        }
        .immediately b{
            width: 460px;
            height: 20px;
            font-family: MicrosoftYaHei-Bold;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 24px;
            letter-spacing: 0px;
            color: #333333;
        }
        .immediately .chbox{
            overflow:auto;
        }
        .immediately h2{
            width: 155px;
            height: 22px;
            font-family: MicrosoftYaHei;
            font-size: 22px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 24px;
            letter-spacing: 0px;
            color: #00b7a1;
        }
        .immediately textarea{
            width: 380px;
            height: 191px;
            border-radius: 4px;
            border: solid 1px #d8d8d8;
            opacity: 0.48;
        }
        .immediately .texte{
            width: 314px;
            height: 28px;
            border-radius: 4px;
            border: solid 1px #d8d8d8;
            opacity: 0.48;
        }
        .immediately .but{
            width: 59px;
            height: 28px;
            border-radius: 2px;
            border: solid 1px #d8d8d8;
        }
        [type="checkbox"] {
            width: 12px;
            height: 12px;
            border-radius: 2px;
            border: solid 1px #d8d8d8;
        }
        [type="date"] {
           width: 118px;
            height: 28px;
            border-radius: 4px;
            border: solid 1px #d8d8d8;
            opacity: 0.48;
        }
        .immediately label{
            margin-right: 10px;
            height: 15px;
            font-family: MicrosoftYaHei;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 24px;
            letter-spacing: 0px;
            color: #333333;
        }
        .immediately-top .wth{
            margin-bottom: 20px;
        }
        .immediately-bottom .wth{
            margin-bottom: 20px;
        }
        .immediately button{
            width: 137px;
            height: 44px;
            background-color: #00b7a1;
            border-radius: 4px;
            border:1px;
        }
        .immediately button a{
            width: 97px;
            height: 17px;
            font-family: MicrosoftYaHei;
            font-size: 16px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 24px;
            letter-spacing: 0px;
            color: #ffffff;
        }
        .immediately .click{
            margin-top: 30px;
            text-align: center;
        }
    </style>
   
    <div class="main">
        <!--1.网页头部-->
       
        <!--2.图片区-->
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="">首页</a></li>
                    <li><a href="">采购页面</a></li>
                    <li><a href="">工业品</a></li>
                    <li><a href="">全部</a></li>
                    <li><a href=""></a></li>
                    <li class="curve1"><a href=""></a></li>
                </ul>
            </div> 
        </div>
        <!--4.供应商四级页详情页区-->
    <form action="/home/productcartsave" method="post" enctype="">
        {{csrf_field()}}
        <div class="immediately">
            <div class="container">
                 <div style="text-align: center;margin:40px 0 ;"><b>您正在询价【暂无数据】</b></div>
                 <div class="immediately-top">
                    <h2 style="margin-bottom:25px;">填写询价单内容</h2>
                    <div class="wth">
                        <span class="red">*</span><span>询价标题：</span><input class="texte" type="text" name="" value="" placeholder="暂无数据">
                    </div>
                    <div class="chbox wth">
                        <span class="red" style="color:#fff" >*</span><span style="float: left;">我想了解：</span>
                        <div style="float: left;">
                            <label><input type="checkbox" name="" value="">单价</label>
                            <label><input type="checkbox" name="" value="">产品规格</label>
                            <label><input type="checkbox" name="" value="">型号</label>
                            <label><input type="checkbox" name="" value="">价格条款</label>
                            <label><input type="checkbox" name="" value="">原产地</label><br>
                            <label><input type="checkbox" name="" value="">能否提供样品</label>
                            <label><input type="checkbox" name="" value="">最小订货量</label>
                            <label><input type="checkbox" name="" value="">交货期</label>
                            <label><input type="checkbox" name="" value="">供货能力</label><br>
                            <label><input type="checkbox" name="" value="">包装方式</label>
                            <label><input type="checkbox" name="" value="">质量/安全认证</label>
                            <label><input type="checkbox" name="" value="">销售条款及附加条件</label>
                        </div>
                    </div>
                    <div class="wth"><span class="red" style="color:#fff" >*</span><span>快捷快问：</span><input class="texte" type="text" name="" value="" placeholder="暂无数据"><span>（不用打字“快捷提问” 帮您忙）</span></div>
                    <div class="chbox wth">
                        <span class="red">*</span><span style="float: left;">主要内容：</span>
                        <div style="float: left;">
                            <textarea placeholder=""></textarea><br>
                            <span>我希望在</span><input type="date" name="" value=""><span>日前回复</span>
                        </div>
                    </div>
                </div>
                <div class="immediately-bottom">
                    <h2 style="margin-bottom:25px;">联系方式</h2>
                    <div class="wth">
                        <span>公司名称：</span><span>  XXXX信息技术股份有限公司</span>
                    </div>
                    <div class="wth">
                        <span>&nbsp;&nbsp;&nbsp;联系人：</span><span>暂无数据</span>
                    </div>
                    <div class="wth">
                        <span>联系电话：</span><span>  暂无数据</span>
                    </div>
                    <div class="wth">
                        <span>电子邮箱：</span><span>  暂无数据</span>
                    </div>
                    <div class="wth">
                        <span class="red">&nbsp;*</span><span>验证码：  </span><input  class="but" type="text" name="" value="" placeholder="点击显示">
                    </div>
                    <div class="wth">
                        <span>短信通知：</span>
                        <label><input type="checkbox" name="" value="">发送短信通知至接收人手机（我的可用短信 <span style="color: #00b7a1;"> 暂无数据 </span> 条）</label>
                    </div>
                    <div class="wth">
                        <span style="color: #00b7a1;">温馨提示：</span>
                        <span>今日可询价<span style="color: #00b7a1;"> 暂无数据 </span>次  当前已询价<span style="color: #00b7a1;"> 暂无数据 </span>次   还可以询价 <span style="color: #00b7a1;"> 暂无数据 </span>次</span>
                    </div>
                </div>
                <div class="click">
                    <label>点击发送表示我已阅读并同意睿鹿网服务条款</label><br>
                    <button type="submit">立即发送询价</button>
                </div>
            </div>         
        </div>
    </form>
        <!--5.网页底部-->
    </div>




@endsection