@extends('admin.layout.index')
@section('content')

    <!-- 内容开始 -->
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
        @endif

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                    <span>
                      <i class="icon-table"></i>订单信息</span>
            </div>
            <div class="mws-panel-body no-padding">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <form action="/admin/order" method="get" >
                        <div id="DataTables_Table_1_length" class="dataTables_length">
                            <label>显示
                                <select name="count" size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                                    <option value="5" @if( isset($params) && !empty($params['count']) &&$params['count']==5) selected @endif>5</option>
                                    <option value="10" @if( isset($params) && !empty($params['count']) &&$params['count']==10) selected @endif>10</option>
                                    <option value="15" @if( isset($params) && !empty($params['count']) &&$params['count']==15) selected @endif>15</option>
                                    <option value="20" @if( isset($params) && !empty($params['count']) &&$params['count']==20) selected @endif>20</option>
                                </select>条</label>
                        </div>
                        <div class="dataTables_filter" id="DataTables_Table_1_filter">

                            <label>搜索: <input type="text" name="for" value="{{$params['for'] or ''}}">
                                <input type="submit" class="btn btn-info" value="搜索" >
                            </label>
                        </div>
                    </form>



                    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        <tr>
                            <td>订单编号</td>
                            <td>订单金额</td>
                            <td>下单用户</td>
                            <td>订单支付状态</td>
                            <td>订单商品</td>
                            <td>订单物流单号</td>
                            <td>操作</td>
                        </tr>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                        @foreach($data as $k=>$v)


                            <tr>
                                <td>{{ $v->order_sn  }}</td>
                                <td>{{ $v->order_amount  }}</td>
                                <td>{{ $v->users->username  }}</td>
                                <td>{{ $v->pay_status == 0 ? '未支付' : '已支付' }}</td>
                                <td>{{ $v->act->title  }}</td>
                                <td>{{ $v->tracking_no  }}</td>
                                <td>
                                    <div style="float:left; margin-right:5px;">
                                        <form action="/admin/order/{{  $v->id  }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" id="sub" class="btn btn-danger" value="删除" onclick="return confirm('确认要删除该用户吗?');" >
                                        </form>
                                    </div>
                                    <div style="float:left">
                                        <form  action="/admin/order/{{  $v->id }}/edit" method="get">
                                            {{ csrf_field() }}
                                            <input type="submit" class="btn btn-warning"  value="修改">
                                        </form>
                                    </div>



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
    <!-- 内容结束-->
@endsection



@section('title')
    九鼎智成
@endsection