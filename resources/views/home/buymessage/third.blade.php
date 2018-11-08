@extends('home.layout.newindex')

@section('title')
    采购信息详情
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
       
        <!--2.图片区-->
        <!--3.当前位置区-->
        <div class="curve">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li><a href="/home/buymessage/second">采购信息</a></li>
                    <li><a href="">工业品</a></li>
                    <li class="curve1"><a href="">全部</a></li>
                </ul>
            </div> 
        </div>
    
      
        <!--4.供应商工业品区-->
        <div class="supplierMRO">
            <div class="container">
                <div class="topMRO">
                    <h2>工业品</h2>
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
       $.post('/home/buymessage/list',{'id':id,'_token':'{{csrf_token()}}'},function(datas){
                $('.ABC').empty();

         for(var i=0;i<datas.length;i++){
                var zzm= " <div class='oneMRO'>"+
                "<img src='"+datas[i].articles_image_path+"'>"+
                "</div><div class='twoMRO'><div class='ltMRO'>"+
                "<h1 class='slh'><a href=''>"+datas[i].title+"</a></h1>"+
                "<p>采购时间:"+datas[i].timezone+"</p>"+
                "</div>"+
                "<div class='rtMRO'>"+
                "<p>地区全国:"+datas[i].area+"</p>"+
                "<p>行业:"+datas[i].industry+"</p>"+
                "<p>公司:"+datas[i].company+"</p>"+
                "<input type='button' value='立即报价'>"+
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
                        <h1><a href="">大量求购黄豆黑豆汉江常年现款求购</a></h1>
                        <p>采购时间：2018-10-19 10:08 ~ 长期有效</p>
                        <p>采购详情：热诚欢迎广大新老客户来本合作社洽谈业务并指导工作！产品求发展，工作求质量，企业求诚信。愿与客户互惠双赢合作的基础，追求...</p>
                    </div>
                        <div class="rtMRO">
                            <p>地区：全国</p>
                            <p>行业：玉米</p>
                            <p>公司：汉川市**********合作社</p>
                            <input type="button" value="立即报价">
                        </div>
                </div>
</div>
               




               
               
            </div>
        </div>
      
    </div>




@endsection