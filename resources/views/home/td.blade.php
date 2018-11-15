@extends('home.layout.newindex')

@section('title')
    招投标服务
@endsection


@section('content')

    <style>
    .nn-4{
    color: #3477ff !important;
    border-bottom: 2px solid #3477ff;
}
  </style>   

    <link rel="stylesheet" href="/ungmhome/css/style.css">

<style>
.bid .row{
    margin: 0px;
}
.bid .img-responsive{
    display: inline;   
}
.bid .breadcrumb > li + li:before {
    color: #CCCCCC;
    content: "> ";
    padding: 0 5px;
}
.bid .bid-top{
    height: 70px;
    background-color: #ffffff;
    box-shadow: 2px 4px 4px 0px 
        rgba(0, 0, 0, 0.06);
}
.bid .bid-top .breadcrumb{
    padding-top: 15px;
    padding-left: 0px;
    background-color: #ffffff;
}
.bid .bid-top .breadcrumb > .active{
    color: #3477ff;
}
.bid .bad-con{
    margin-top: 70px;
    margin-bottom:38px;
}
.bid .bid-con .tex{
            margin:70px 0px 40px 0px;
        }
/* ----------biaoqianyekaishi */
.bid .bid-con  .vtabs {
  display: table; }
.bid .bid-con .vtabs .tabs-vertical {
    width: 150px;
    border-bottom: 0px;
    border-right: 1px solid #e9ecef;
    display: table-cell;
    vertical-align: top; }
.bid .bid-con .vtabs .tabs-vertical li .nav-link {
      color: #343a40;
      margin-bottom: 10px;
      border: 0px;
      border-radius: 0.25rem 0 0 0.25rem; 
      font-weight: 600;
  }
.bid .bid-con .vtabs .tab-content {
    display: table-cell;
   /*  padding: 20px; */
    vertical-align: top; }

.bid .bid-con .tabs-vertical li .nav-link.active,
.bid .bid-con .tabs-vertical li .nav-link:hover,
.bid .bid-con .tabs-vertical li .nav-link.active:focus {
  background: #fb9678;
  border: 0px;
  color: #fff; }

/*Custom vertical tab*/
.bid .bid-con .customvtab .tabs-vertical li .nav-link.active,
.bid .bid-con .customvtab .tabs-vertical li .nav-link:hover,
.bid .bid-con .customvtab .tabs-vertical li .nav-link:focus {
      background: #f9f9f9;
    border: 0px;
    border-right: 2px solid #3477ff;
    margin-right: -1px;
    color: #3477ff; }

.bid .bid-con .tabcontent-border {
  border: 1px solid #ddd;
  border-top: 0px; 
  box-shadow: 2px 4px 4px 0px rgba(0, 0, 0, 0.1);
}

.bid .bid-con .customtab2 li a.nav-link {
  border: 0px;
  margin-right: 3px;
  color: #212529; }
.bid .bid-con .customtab2 li a.nav-link.active {
    background: #fb9678;
    color: #fff; }
.bid .bid-con .customtab2 li a.nav-link:hover {
    color: #fff;
    background: #fb9678; }
.bid .bid-con .nav-item-right,.nav-item-left{
    width: 50%;
}
.bid .bid-con .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
    box-shadow: 2px 0px 0px 0px rgba(0, 0, 0, 0.1);
}
 .page1 .import .rowledge{
            line-height:40px;
        }
        .page1 .import .rowledge1{
            line-height:25px;
            margin-top:20px;
        }
        .page1 .import .rowledge2{
            line-height:25px;
            margin-bottom:10px;
        }
        .page1 .import .date_t{
            width: 96px;
        }
.bid .bid-con .tab-content .row{
    background-color: #ffffff;
}
.bid .bid-con .tab-content .row .import{
    font-family: MicrosoftYaHei;
    font-size: 14px;
    font-weight: normal;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    color: #333333;
}
.bid .bid-con .tab-content .row .col-md-6{
   
}
.bid .bid-con .tab-content .row .col-md-6:first-child{
    border-right: 1px solid #f9f9f9;
}
.bid .bid-con .tab-content .row .tender{
    padding:30px 40px ;

    height: 340px;
}
.bid .bid-con .tab-content .row .tender h4{
    font-family: MicrosoftYaHei-Bold;
    font-size: 18px;
    font-weight: 600;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    color: #333333;
}
.bid .bid-con .tab-content .butt{
    padding-right: 53px;
    padding-bottom: 40px;
}
.bid .bid-con .nav-tabs > li > a{
    line-height: 2.8;
    height: 60px;
    font-family: MicrosoftYaHei-Bold;
    font-size: 16px;
    font-weight:600;
    font-stretch: normal;
    line-height: 30px;
    letter-spacing: 0px;
    margin:0px;
}
</style>
<style>
                            .bid span{
                                display: inline-block;
                            }
                            .bid .Release{
                                margin-right: 40px;
                            }
                            .bid .zhi{
                                margin: 0 5px;
                            }
                            .bid .tender-left .rowledge{
                                margin: 10px 0;
                            }
                            .bid .tender-left .rowledge-2 input{
                                display: inline-block;
                                width: 120px;
                                height: 30px;
                                background-color: #ffffff;
                                border-radius: 4px;
                                border: solid 1px #d8d8d8;
                            }
                            .bid .tender-left .rowledge-1 input{
                                float: right;
                                width: 270px;
                                height: 30px;
                                background-color: #ffffff;
                                border-radius: 4px;
                                border: solid 1px #d8d8d8;
                            }
                            .bid .SUPPLIER-r label{
                                width: 116px;
                                height:30px;
                                font-family: MicrosoftYaHei;
                                font-size: 14px;
                                font-weight: normal;
                                font-stretch: normal;
                                line-height: 30px;
                                letter-spacing: 0px;
                                color: #333333;
                            }
                            .bid .SUPPLIER-r label:first-child{
                                width: 96px;
                                height:30px;
                                font-family: MicrosoftYaHei;
                                font-size: 14px;
                                font-weight: normal;
                                font-stretch: normal;
                                line-height: 30px;
                                letter-spacing: 0px;
                                color: #333333;
                            }
                            .bid .SUPPLIER-r p{
                                width: 28px;
                                height: 30px;
                                font-family: MicrosoftYaHei;
                                font-size: 14px;
                                font-weight: normal;
                                font-stretch: normal;
                                line-height: 30px;
                                letter-spacing: 0px;
                                color: #333333;
                            }
                            .bid .SUPPLIER-r .row{
                                width: 100%;
                                height: 300px;
                            }
                            .bid .btn1{
                                background-color: #fff;
                                border: 2px solid #00b7a1;
                                border-radius: 4px;
                                color: #666666;
                            }
                            .bid .btn2{
                                background-color: #00b7a1;
                                border-radius: 4px;
                                width: 150px;
                            }
                            .bid .btn1:hover{
                                background-color: #079887;
                                border: 2px solid #079887;
                                border-radius: 4px;
                                color: #ffffff;
                            }
                            .bid .btn2:hover{
                                background-color: #079887;
                                border-radius: 4px;
                                width: 150px;
                                color: #ffffff;
                            }
                            /* ============ */
       .bid .arrow2{
            margin: 3px 8px 4px 0;
            border-left: 5px dashed transparent;
            border-bottom: 5px dashed transparent;
            border-top: 5px dashed transparent;
            border-right: 5px solid #ccc;
            display: inline-block;
            vertical-align: middle;
        }
        .bid .arrow3
        {
            margin: 3px 0 4px 8px;
            border-top: 5px dashed transparent;
            border-bottom: 5px dashed transparent;
            border-right: 5px dashed transparent;
            border-left: 5px solid #ccc;
            display: inline-block;
            vertical-align: middle;
        }
        .bid-paging{
            background-color: #fff;

        }
        .bid-paging .tex{
            margin:70px 0px 40px 0px;
        }

        .bid-paging .paging .row{
            font-family: MicrosoftYaHei;
            font-size: 12px;
            font-weight: normal;
            font-stretch: normal;
            line-height: 18px;
            letter-spacing: 0px;
            color: #333333;      
            text-align: center;
            background-color: #ffffff;
            box-shadow: 2px 4px 4px 2px 
                rgba(0, 0, 0, 0.06);
            margin-bottom: 20px;
        }
        .bid-paging .paging .row2{
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .bid-paging .paging .row1{
            padding-top: 18px;
            padding-bottom:18px;
        }
        .bid-paging .paging .row a{
            color: #3477ff;
        }
        .bid-paging .paging .row .sh{
            border-right: 2px solid #f9f9f9;   
            padding: 0px;
        }
        .bid-con .hidden-xs-down{
            margin-top:15px;
        }
        .bid .SUPPLIER-r label input{
            margin-right:5px;
        }
        .bid .btn1,  .bid .btn2{
            font-size:15px;
        }

        .bid .bid-con .tab-content .row .SUPPLIER-r .tender-right span, .bid .bid-con .tab-content .row .SUPPLIER-r .tender-right h4, .bid .bid-con .tab-content .row .SUPPLIER-r .tender-right p, .bid .bid-con .tab-content .row .SUPPLIER-r .tender-right label{
    color: #999999;
}

</style>
<body>
    <!--1.网页头部-->

    <!---内容开始-->
    <div class="content bid">
        <img src="/ungmhome/images/招投标服务.jpg" class="img-responsive banner bid-banner" alt="">
        
        <div class="bid-con">
            <div class="container">
                <div class="tex" align="center"><a name="1"></a> 
                    <img class="img-responsive" src="/ungmhome/images/busser.png">
                </div>
                <div class="label">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-item-left active"> <a class="nav-link " data-toggle="tab" href="#tenderQuery" role="tab" align="center"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down" style="font-weight: 600;">投标查询</span></a> </li>
                        <li class="nav-item nav-item-right"> <a class="nav-link" data-toggle="tab" href="#UNGMtenderQuery" role="tab" align="center"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down" style="font-weight: 600;">UNGM商机查询</span></a> </li>               
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="tenderQuery" role="tabpanel">
                            <div class="row">
                                <div class="border-gree row" style="border:1px solid #00b7a1;margin: 40px 60px;">
                                    <div class="col-md-6" align="center"> 
                                        <div class="tender tender-left">
                                            <h4 align="left">基本条件</h4>
                                                <hr>
        <div class="import" align="left">
            <div id="" class="rowledge rowledge-1">
                <span>标题：</span>
                <input type="text" class="form-control" name="" id="v1" value=""/>
            </div>
            <div id="" class="rowledge rowledge-1">
                <span>描述：</span>
                <input type="text" class="form-control" name="" id="v2" value=""/>
            </div>
            <div id="" class="rowledge rowledge-1">
                <span>类型：</span>
                <input type="text" class="form-control" name="" id="v3" value=""/>
            </div>
            <div id="" class="rowledge rowledge-2">
                <span class="Release">发布日期：</span>
                <input type="date" class="date_t form-control" name="" id="v4" value="" placeholder="Establishment time"/>
               
            </div>
            
            <div id="" class="rowledge rowledge-2">
                <span class="Release">截止日期：</span>
                <input type="date" class="date_t form-control" name="" id="v5" value="" placeholder="Establishment time"/>
                
            </div>          
        </div>  
                                        </div>            
                                    </div> 

                                    <div class="col-md-6 SUPPLIER-r" align="left">
                                         <div class="tender tender-right">
                                            <h4 align="left">高级条件</h4>
                                            <hr>
    <p>参考</p>
    <div><label><input name="Fruit" type="checkbox" value="" />未设置 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求表达兴趣 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求建议书 </label> </div>
    <div><label><input name="Fruit" type="checkbox" value="" />招标书 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求资格预审 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求信息 </label> </div>
    <div><label><input name="Fruit" type="checkbox" value="" />征求报价 </label> 
    <label><input name="Fruit" type="checkbox" value="" />出价前通知 </label> 
    <label><input name="Fruit" type="checkbox" value="" />拨款支持-征求建议书 </label> </div>
</div> 
                                    </div>
                                    </div>
                                    <div class="col-md-12 butt" align="center">
<button type="" class="btn btn-lg btn1"  onclick="cle()">清除全部</button>
<button type="" class="btn btn-lg btn2" onclick="search()">立即搜索</button>
                                    </div>
                                
                            </div>
                        </div>
                        
                       <div class="tab-pane  p-20" id="UNGMtenderQuery" role="tabpanel">
                            <div class="row">
                                <div class="border-gree row" style="border:1px solid #00b7a1;margin: 40px 60px;"> 
                                    <div class="col-md-6" align="center"> 
                                        <div class="tender tender-left">
                                            <h4 align="left">基本条件</h4>
                                                <hr>
            <div class="import" align="left">
                <div id="" class="rowledge rowledge-1">
                    <span>标题：</span>
                    <input type="text" class="form-control" name="" id="vv1" value=""/>
                </div>
                <div id="" class="rowledge rowledge-1">
                    <span>描述：</span>
                    <input type="text" class="form-control" name="" id="vv2" value=""/>
                </div>
                <div id="" class="rowledge rowledge-1">
                    <span>类型：</span>
                    <input type="text" class="form-control" name="" id="vv3" value=""/>
                </div>
                <div id="" class="rowledge rowledge-2">
                    <span class="Release">发布日期：</span>
                    <input type="date" class="date_t form-control" name="vv4" id="" value="" placeholder="Establishment time"/>
                   
                </div>
                
                <div id="" class="rowledge rowledge-2">
                    <span class="Release">截止日期：</span>
                    <input type="date" class="date_t form-control" name="" id="vv5" value="" placeholder="Establishment time"/>
                   
                </div>          
            </div>  
                                        </div>            
                                    </div> 
                                    <div class="col-md-6 SUPPLIER-r" align="left">
                                         <div class="tender tender-right tender-left">
                                            <h4 align="left">高级条件</h4>
                                            <hr>
    <div class="import" align="left">
    <div id="" class="rowledge rowledge-1">
        <span>联合国组织机构：</span>
        <input type="text" class="form-control" name="" id="vv6" value=""/>
    </div>
    <div id="" class="rowledge rowledge-1">
        <span>受惠国家地区：</span>
        <input type="text" class="form-control" name="" id="vv7" value=""/>
    </div>
    </div>
    <p>参考</p>
    <div><label><input name="Fruit" type="checkbox" value="" />未设置 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求表达兴趣 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求建议书 </label> </div>
    <div><label><input name="Fruit" type="checkbox" value="" />招标书 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求资格预审 </label> 
    <label><input name="Fruit" type="checkbox" value="" />征求信息 </label> </div>
    <div><label><input name="Fruit" type="checkbox" value="" />征求报价 </label> 
    <label><input name="Fruit" type="checkbox" value="" />出价前通知 </label> 
    <label><input name="Fruit" type="checkbox" value="" />拨款支持-征求建议书 </label> </div>
    </div> 
</div>
</div>
<div class="col-md-12 butt" align="center">
         <button type="" class="btn btn-lg btn1" onclick="cle();">清除全部</button>
         <button type="" class="btn btn-lg btn2" onclick="ungmsearch()">立即搜索</button>
                                    </div>
                               
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </div> 

        <script type="text/javascript">
                function search()
                {
                    var title= $("#v1").val();
                    var miaoshu= $("#v2").val();
                    var type= $("#v3").val();
                    var starttime= $("#v4").val();
                    var endtime= $("#v5").val();
                        $.post('/home/query/mess',{'title':title,'miaoshu':miaoshu,'type':type,'starttime':starttime,'endtime':endtime,'_token':'{{csrf_token()}}'}, function(datas) {       
                        $('.res2').empty();
                            //alert(datas);
                            for(var i=0;i<datas.length;i++){
                                var zzm="<div class='row row2'>"+
                            "<div align='center' class='col-md-3 sh'>"+
                            "<div><a href='#'>"+datas[i].name+"</a></div>"+
                            "</div>"+
                            "<div align='center' class='col-md-3 sh'>"+
                            "    <div>"+datas[i].published+"</div>"+
                           " </div>"+
                            "<div align='center' class='col-md-1 sh'>"+
                                "<div>"+datas[i].deadline+"</div>"+
                           "</div>    "+
                           " <div align='center' class='col-md-2 sh'>"+
                             "<div>无</div>"+
                            "</div>"+
                           " <div align='center' class='col-md-1 sh'>"+
                             "   <div>"+datas[i].type+"</div>"+
                           " </div>"+
                           " <div align='center' class='col-md-1'>"+
                           "     <div>无</div>"+
                           " </div></div>";
                                  $('.res2').append(zzm);
                              }
                        });  
                   
                   
                }



                function ungmsearch()
                {

                     var title= $("#vv1").val();
                    var miaoshu= $("#vv2").val();
                    var type= $("#vv3").val();
                    var starttime= $("#vv4").val();
                    var endtime= $("#vv5").val();
                    var organization= $("#vv6").val();
                    var country= $("#vv7").val();
                        $.post('/home/query/ungmmess',{'title':title,'miaoshu':miaoshu,'type':type,'starttime':starttime,'endtime':endtime,'organization':organization,'country':country,'_token':'{{csrf_token()}}'}, function(datas) { 
                        //alert(datas);      
                        $('.res2').empty();
                            //alert(datas);
                            for(var i=0;i<datas.length;i++){
                                var zzm="<div class='row row2'>"+
                            "<div align='center' class='col-md-3 sh'>"+
                            "<div><a href='#'>"+datas[i].title+"</a></div>"+
                            "</div>"+
                            "<div align='center' class='col-md-3 sh'>"+
                            "    <div>"+datas[i].published+"</div>"+
                           " </div>"+
                            "<div align='center' class='col-md-1 sh'>"+
                                "<div>"+datas[i].deadline+"</div>"+
                           "</div>    "+
                           " <div align='center' class='col-md-2 sh'>"+
                             "<div>"+datas[i].organization+"</div>"+
                            "</div>"+
                           " <div align='center' class='col-md-1 sh'>"+
                             "   <div>"+datas[i].noticetype+"</div>"+
                           " </div>"+
                           " <div align='center' class='col-md-1'>"+
                           "     <div>"+datas[i].country+"</div>"+
                           " </div></div>";
                                  $('.res2').append(zzm);
                              }
                        });  
                }


                function cle()
                {
                    var a= $('input[type=text]').val("");
                  
                }

        </script>

            <div class="bid-paging">
                <div class="container">
                    <div class="tex" align="center"><a name="2"></a> 
                        <img class="img-responsive" src="/ungmhome/images/bid-search.png">
                    </div> 

                    <div class="paging">

                        <div class="row row1 header1">
                            <div class="header2">
                                <div align="center" class="col-md-3 sh yc">
                                    <div>标题</div>
                                </div>
                                <div align="center" class="col-md-3 sh yc">
                                    <div>发布日期</div>
                                </div>
                                <div align="center" class="col-md-1 sh yc">
                                    <div>截止日期</div>
                                </div>    
                                <div align="center" class="col-md-2 sh yc">
                                    <div>联合国组织/机构</div>
                                </div>
                                <div align="center" class="col-md-1 sh yc">
                                    <div>类型</div>
                                </div>
                                <div align="center" class="col-md-1 yc">
                                    <div>受惠方国家</div>
                                </div>
                            </div>
                          
                        </div>




                    <div class="res2">
                           <div class="row row2 res1">
                            
                                <div align="center" class="col-md-3 sh">
                                    <div><a href="#">GENERAL PROCUREMENT NOTICE TRANS – HINDUKUSH ROAD CONNECTIVITY PROJECT (THRCP) TRANSPORT SECTOR</a></div>
                                </div>
                                <div align="center" class="col-md-3 sh">
                                    <div>2020-十二月-31 23:59 (GMT 4.30)</div>
                                </div>
                                <div align="center" class="col-md-1 sh">
                                    <div>2015-八月-09</div>
                                </div>    
                                <div align="center" class="col-md-2 sh">
                                    <div>联合国项目事务署</div>
                                </div>
                                <div align="center" class="col-md-1 sh">
                                    <div>征求信息</div>
                                </div>
                                <div align="center" class="col-md-1">
                                    <div>阿富汗</div>
                                </div>
                            </div>
                    </div>


                     

                         

                    </div>
                        <!---fenye-->
                        <form id="form1" runat="server">
                            <div>
                            </div>
                            <div align="center">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <!--内容结束-->

</body>



</html>

@endsection