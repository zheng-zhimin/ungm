@extends('home.layout.newindex')

@section('title')
    产品详情
@endsection


@section('content')



    <link rel="stylesheet" href="/ungmhome/css/style.css">
    <style type="text/css">
        .slh{
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
    </style>

    <div class="main">
      
        
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="/home/product/second">产品信息</a></li>
                    <li><a href="javascript:;">原材料</a></li>
                    <li class="curve1"><a href="javascript:;">全部</a></li>
                </ul>
            </div> 
        </div>
        <!--4.采购商工业区-->
        <div class="buyerSubpageMRO">
            <div class="container">
                <div class="topMRO">
                    <h2>原材料</h2>
                    <p>INDUSTRIAL PRODUCTS</p>
                </div>
                <div class="botMRO">
                    <ul>
                    @foreach($column as $v)
                        <li><a href="javascript:;" class='list' id="{{$v['id']}}">{{$v['cname']}}</a></li>
                    @endforeach
                    </ul>
                </div>
<script type="text/javascript">
    $(".list").click(function(event) {
      var id=this.id;
       $.post('/home/product/list',{'id':id,'_token':'{{csrf_token()}}'},function(datas){
                $('.ABC').empty();

         for(var i=0;i<datas.length;i++){
                var zzm= " <div class='oneMRO'>"+
                "<img src='"+datas[i].articles_image_path+"'>"+
                "</div><div class='twoMRO'><div class='ltMRO'>"+
                "<h1 class='slh'><a href=''>"+datas[i].title+"</a></h1>"+
                "<p>上架时间:"+datas[i].timezone+"</p>"+
                "</div>"+
                "<div class='rtMRO'>"+
                "<h2>价格面议</h2>"+
                "<p>地区全国:"+datas[i].area+"</p>"+
                "<p>行业:"+datas[i].industry+"</p>"+
                "<p>公司:"+datas[i].company+"</p>"+
                "<a href='/home/productfour/"+datas[i].id+"' method='post'>"+
                "<input type='button' value='在线询价'>"+
                "</a>"+
                "</div></div>";
            $('.ABC').append(zzm);
         }
            },'json',false);
    });
</script>
<div class="ABC">
                <div class="oneMRO">
                    <img src="/ungmhome/images/purchasing3.png" alt="">
                </div>

                <div class="twoMRO">
                    <div class="ltMRO">
                        <h1><a href="">A4牛皮纸 账本凭证封面纸牛皮包装纸打印纸厚硬牛卡纸手工绘画纸 4K/8开加厚牛皮纸A3牛皮打印纸</a></h1>
                        <div class="">
                           <ul>
                                <li><label for="">供货数量</label><input type="text" readonly  value="5681"></li>
                                <li class="threeMRO"><label for="">价格</label><input readonly type="text" value="100"></li>
                                <li><label for="">颜色</label><input readonly  type="text" value="黄色白色重色"></li>
                                
                                <li class="fourMRO"><label for="">型号</label><input  readonly type="text" value="A4 A3"></li>
                                <li class="threeMRO fourMRO"><label for="">类型</label><input readonly type="text" value="纸业"></li>
                            </ul>
                        </div>
                        <p>更新时间： 2018-11-15  </p>
                    </div>
                    <div class="rtMRO">
                        <h2>价格面议</h2>
                        <p>北京恒业纸质股份有限公司</p>
                        <p>所在地：北京市</p>
                        <p class="rtVip">超级会员</p>
                        <input type="button" value="在线询价">
                    </div>
</div>                


               
                      
                   
                </div>
            </div>
        </div>
     
    </div>










@endsection