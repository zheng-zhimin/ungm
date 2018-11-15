@extends('home.layout.newindex')

@section('title')
    货币换算
@endsection


@section('content')

       
    <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>货币换算器</title>
    <link rel="stylesheet" href="/ungmhome/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ungmhome/css/base.css">
    <link rel="stylesheet" href="/ungmhome/css/style.css">
</head>
<style type="text/css" media="screen">
    .inp{
        float: right;
        width: 70px;
        height: 38px;
        
        border-radius: 0px 4px 4px 0px;   
    }
    .inpa{
        float: right;
        width: 70px;
        height: 38px;
        background-color: #00b7a1;
        border-radius: 0px 4px 4px 0px;   
    }
    .inp img{
        margin: 0 auto;
        margin-top: 5px;
    }
     
    .inpa img{
        margin: 0 auto;
        margin-top: 5px;
    }
    .duihuan{
        float: left;
        width: 530px;
        border: 1px solid #d8d8d8;
    }
    .duihuan-1{
        display:inline-block; 
        width: 455px;
        height: 36px;
        border: none;
    }
    .duihuan-sr{
        float: left;
        display: block;
    }
    .selectpicker-1{
        display:inline-block; 
        width: 523px;
        height: 36px;
        border: none;
    }
    .input-group-1{
        border: 1px solid #d8d8d8;
    }
    .lab{
        margin-left: 5px;
    }
    input{outline:none;}
    input:focus { outline: none !import ;} 
    .selectpicker-1{outline:none; border:none;}
    .selectpicker-1:focus { outline: none !import; } 
    .select{ 
        background: url("/ungmhome/images/ds.png") no-repeat scroll right center transparent;
         appearance:none;  
         -moz-appearance:none;  
         -webkit-appearance:none;
         padding-right: 14px;
    }
    .nn-7{
    color: #3477ff !important;
    border-bottom: 2px solid #3477ff;
}
</style>
<body>
  
    <!---内容开始-->
    <div class="content scaler">
        <img src="/ungmhome/images/货币换算.jpg" class="img-responsive banner currencyTranslation-banner" alt="">
        <div class="container">
            <div class="currencyTranslation">
                <img src="/ungmhome/images/currencyTranslation.png" alt="" class="img-responsive currencyTranslation-img">
            </div>
            <div class="scalerinput">
                <div class="inputt">
                        <div class="input-group input-group-1" style="width: 600px">
                        <label class="lab">原始货币:</label>
                        <select name="selectA" id="selectA" class="selectpicker selectpicker-1 select">
                            
                            <option value="1">美元USD</option>
                            <option value="2">欧元EUR</option>
                            <option value="3">港币HKD</option>
                            <option value="4">日元JPY</option>
                            <option value="5">英镑GBP</option>
                            <option value="6">澳大利亚元AUD</option>
                            <option value="7">加拿大元CAD</option>
                            <option value="8">泰国铢THB</option>
                            <option value="9">新加坡元SGD</option>
                            <option value="10">挪威克朗NOK</option>
                            <option value="11">新西兰元NZD</option>
                            <option value="12">丹麦克朗DKK</option>
                            <option value="13">瑞典克朗SEK</option>
                            <option value="14">菲律宾比索PHP</option>
                            <option value="15">卢布RWF</option>
                            <option value="16">瑞士法郎CHF</option>
                            <option value="17">新台币TWD</option>
                            <option value="18">澳门元MOP</option>
                            <option value="19">林吉特MYR</option>
                            <option value="20">南非兰特ZAR</option>
                            <option value="21">韩国元KRW</option>
                            
                        </select>
                        </div>
                        <br>
                        <div class="input-group" style="width: 600px">
                            <div class="duihuan">
                                <label class="lab">兑换数额:</label>
                                <input  type="text" class="duihuan-1" id="count"placeholder="请输入数字" onkeyup="num(this)">
                                <script type="text/javascript">
                                     function num(obj){
                                    obj.value = obj.value.replace(/[^\d.]/g,""); //清除"数字"和"."以外的字符
                                    obj.value = obj.value.replace(/^\./g,""); //验证第一个字符是数字
                                    obj.value = obj.value.replace(/\.{2,}/g,"."); //只保留第一个, 清除多余的
                                    obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
                                    obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3'); //只能输入两个小数
                                    }
                                </script>

                            </div>
                            <span class=" inpa">
                                <img class="img-responsive"src="/ungmhome/images/exchangeRate.png">
                            </span>
                        </div>
                        <br>
                        <div class="input-group input-group-1" style="width: 600px">
                            <div class="duihuan"style="border:1px;" >
                                <label class="lab">目标货币:</label>
                                <input type="text" class="duihuan-1"  value="人民币" readonly="readonly">
                            </div>
                        </div>   
                </div>
                <div class="but but1"><button id="btn" class="btn-success btn">兑换</button></div>
                <div class="but but2">
                <p>
                
                <span id="swaib">0.00</span>

                <span id="swaibtype">美元</span>

                =

                <span id="srmb"> 0.00</span>
                元人民币

                </p>

                </div>
            </div>
            <div class="bank">
                <h3>银行间汇率</h3>
                <p>这些是银行间汇率情况，其中显示了当前交易市场的实时汇率，它们并不代表我们可为您提供的汇率。</p>
            </div>
        </div>
    </div>
    <!---内容结束-->

</body>
<script src="/ungmhome/js/jquery.js"></script>
<script src="/ungmhome/bootstrap/js/bootstrap.js"></script>

<script type="text/javascript">
       
$("#btn").click(function(event) {
    
    var count=$("#count").val();
    var n=$("#selectA").val();
    

           if(n==1) {
            var name="美元";
           }if(n==2){
            var name="欧元";
           }if(n==3){
            var name="港币";
           }if(n==4){
            var name="日元";
           }if(n==5){
            var name="英镑";
           }if(n==6){
            var name="澳大利亚元";
           }if(n==7){
            var name="加拿大元";
           }if(n==8){
            var name="泰国铢";
           }if(n==9){
            var name="新加坡元";
           }if(n==10){
            var name="挪威克朗";
           }if(n==11){
            var name="新西兰元";
           }if(n==12){
            var name="丹麦克朗";
           }if(n==13){
            var name="瑞典克朗";
           }if(n==14){
            var name="菲律宾比索";
           }if(n==15){
            var name="卢布";
           }if(n==16){
            var name="瑞士法郎";
           }if(n==17){
            var name="新台币";
           }if(n==18){
            var name="澳门元";
           }if(n==19){
            var name="林吉特";
           }if(n==20){
            var name="南非兰特";
           }if(n==21){
            var name="韩国元";
           }
           
   $.get('/newhome/currency',{'n':n,'count':count},function (datas) {
           $("#srmb").html(datas);
           $("#swaib").html(count);
           $("#swaibtype").html(name);
        },'json',false);

});




</script>

</html>
@endsection