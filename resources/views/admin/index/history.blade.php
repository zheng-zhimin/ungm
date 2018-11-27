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
                      <i class="icon-table"></i>历史记录</span>
            </div>
            <div class="mws-panel-body no-padding">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <form action="/admin/history" method="get" >
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

                            <label>搜索UID: <input type="text" name="uid" value="{{$params['for'] or $History}}">
                                <input type="submit" class="btn btn-info" value="搜索" >
                            </label>
                        </div>
                    </form>


                    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        <tr>
                            <td>ID</td>
                            <td>UID</td>
                            <td>用户名</td>
                            <td>登录时间</td>
                            <td>IP</td>
                            <td>地区</td>
                            <td>isp</td>
                        </tr>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                        @foreach($data as $k=>$v)
                            <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->uid }}</td>
                                <td>{{ $v->username }}</td>
                                <td>{{ $v->updated_at }}</td>
                                <td>{{ $v->ip }}</td>
                                <td>{{ $v->country }} - {{ $v->region }} - {{ $v->city }}</td>
                                <td>{{ $v->isp }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="page dataTables_paginate paging_full_numbers">
                        {!! $data->appends(['uid'=>$History])->render() !!}
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