@extends('home.layout.newindex')

@section('title')
    ungm供应商推荐
@endsection


@section('content')


    <link rel="stylesheet" href="/ungmhome/css/style.css">


    <div class="main">
      
        <!--2.图片区-->
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li class="curve1"><a href="">ungm供应商</a></li>
                    <li class="curve1"><a href="">{{$data['name']}}</a><li>
                </ul>
            </div> 
        </div>
        <!--4.详情页区-->
        <div class="lineItem companyDP">
            <div class="container">
                <div class="lineItemtwo">
                    <div class="tops">
                                    <span class="topOne topColor">公司介绍</span>
                        <span class="topTwo">供应商信息</span>
                        <span class="topThree">联系方式</span>
                    </div>
                    <div class="bots">
                        <div class="botOnes ulTab">
                            <p>
                                XXXX有限公司坐落于XXXX， 公司总部位于XXXX， 生产基地位于高新区孙村街道春博路,
                                是一家集数控雕刻机研发、生产、销售、售后服务于一体的现代化专业雕刻机生产厂家。公司以质量求生存, 以信誉求发展，本着互利共赢的宗旨，
                                在业内赢得了良好的声誉。
                            </p>
                            <h6>蓝象数控的文化：</h6>
                            <ul>
                                <li>1：对客户--以客户体验为中心；</li>
                                <li>2：对公司—主人翁精神是企业发展的根本；</li>
                                <li>3：对团队—团队合作让我们更加强大；</li>
                                <li>4：对同事—简单真诚，诚实正直。</li>
                                <li>5：对职业—持续奋斗精益求精。</li>
                            </ul>
                        </div>
                        <div class="botTwo ulTab">
                            <ul>
                                <li><label for="">公司名</label>XXXX有限公司</li>
                                <li><label for="">经营模式</label>暂无数据</li>
                                <li><label for="">注册资本</label>暂无数据</li>
                                <li><label for="">公司注册时间</label>暂无数据</li>
                                <li><label for="">公司所在地</label>暂无数据</li>
                                <li><label for="">企业类型</label>暂无数据</li>
                                <li><label for="">资料认证</label>暂无数据</li>
                            </ul>
                            <div class="twoUl">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">主营行业</div>
                                            <div class="col-md-10">暂无数据</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">经营范围</div>
                                            <div class="col-md-10">暂无数据 </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="botThree ulTab">
                            <ul>
                                <li><label for="">姓名</label>暂无数据</li>
                                <li><label for="">手机</label>暂无数据</li>
                                <li><label for="">公司名称</label>暂无数据</li>
                                <li><label for="">电话</label>暂无数据</li>
                                <li><label for="">地区</label>暂无数据</li>
                                <li><label for="">详细地址</label>暂无数据</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>


<script>
$('.ltBot ul li img').click(function(){
    $('.ltTop img').attr('src',$(this).attr('src'));
})

$('.tops span').click(function(){
    var _index = $(this).index();
    $(this).addClass('topColor').siblings().removeClass('topColor');
    $('.bots .ulTab').eq(_index).show().siblings('.ulTab').hide();
})
$('.rtBot1').click(function(){
    alert('加入购物车成功');
})
$('.rtBot3').click(function(){
    alert('收藏成功');
})
</script>



@endsection
