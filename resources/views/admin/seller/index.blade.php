@extends('admin.layout.index')
@section('content')

          
             <div class="container">
                @if(session('error'))
                <div class="mws-form-message error">
                   {{ session('error') }}
                </div>
                @endif

                @if(session('success'))
                <div class="mws-form-message success">
                     {{ session('success') }}
                </div>
            </div>
                @endif
         <div class="mws-panel grid_8" >
               <div class="mws-panel-header">
                    <span>
                      <i class="icon-table"></i>{{ $title }}</span>
                  </div>
                  <div class="mws-panel-body no-padding">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <form action="/admin/selloffer" method="get" >
                      <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>显示
                          <select name="count" size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                            <option value="5" @if( isset($params) && !empty($params['count']) &&$params['count']==5) selected @endif>5</option>
                            <option value="10" @if( isset($params) && !empty($params['count']) &&$params['count']==10) selected @endif>10</option>
                            <option value="15" @if( isset($params) && !empty($params['count']) &&$params['count']==15) selected @endif>15</option>
                            <option value="20" @if( isset($params) && !empty($params['count']) &&$params['count']==20) selected @endif>20</option></select>条</label>
                      </div>
                      <div class="dataTables_filter" id="DataTables_Table_1_filter">

                               <label>搜索: <input type="text" name="for" value="{{$params['for'] or ''}}">
                               <input type="submit" class="btn btn-info" value="搜索" >
                            </label></div>
                         </form>



                      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        <tr>
                           
                            <td>公司名称</td>
                            <td>执照编号</td>
                            <td>负责人电话</td>
                            <td>公司地址</td>
                            <td>执照图片</td>
                            
                            <td>操作 </td>
                        </tr>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                       
                          @foreach($data as $k=>$v)
                       


                        <tr>
                          
                            <td> {{ $v['company'] }}</td>
                            <td> {{ $v['number'] }}</td>
                            <td> {{ $v['phone'] }}</td>
                            <td> {{ $v['addr'] }}</td>
                            <td> 
                                <img src="{{ $v['pic'] }}" style="widows: 100px;px;height:200px;">
                            </td>
                            
                            
                        
                            <td style="width:150px">
                            <div style="float:left; margin-right:5px;">
                            <form action="/admin/seller/{{$v['id']}}" method="post">
                               {{ csrf_field() }}
                               {{ method_field('DELETE') }}
                               <input type="submit" id="sub" class="btn btn-danger" value="删除" onclick="return confirm('确认要删除该条企业注册信息吗?');" >
                            </form>
                            </div>

                              <div  style="float:left;  margin-right:5px; ">
                             @if( $v['identity']==1)
                             <form action="/admin/seller/yes/{{$v['uid']}}" method="post">
                            {{ csrf_field() }}
                          
                            <input type="submit" id="yes" class="btn btn-success" value="认证" onclick="return confirm('确认要审核通过该供应商的企业资质吗?');" >
                             </form> 
                            @else
                             <form action="/admin/seller/no/{{$v['uid']}}" method="post">
                               {{ csrf_field() }}

                               <input type="submit" id="no" class="btn btn-danger"  value="取消" onclick="return confirm('确认撤销认证该供应商的企业资质吗?');" >
                            </form>
                            @endif

                            </div>

                          <!--   <div style="float:left">
                          <form  action="" method="get">
                          {{ csrf_field() }}
                          <input type="submit" class="btn btn-warning"  value="修改">
                          </form>
                          </div> -->

                           <!--  <a style="float:right" href="" class="btn btn-info">查看详细信息</a>
                           -->
                           </td> 
                        </tr>
                          @endforeach

                        </tbody>
                      </table>
                         <div class="page dataTables_paginate paging_full_numbers">
                            {!! $data->render() !!}
                        </div>
                    </div>
                  </div>
                </div>
            </div>


            
         
  


   @endsection


@section('title')
    九鼎智成
@endsection 