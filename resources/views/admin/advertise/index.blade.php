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
                      <i class="icon-table"></i>广告位</span>
            </div>
            <div class="mws-panel-body no-padding">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <form action="/admin/advertise" method="get" >
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
                            <!-- <td>ID</td> -->
                            <td>广告类型</td>
                            <td>广告大小</td>
                            <td>广告主题</td>
                            <td>链接地址</td>
                            <td>logo</td>
                            <td>操作</td>
                        </tr>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                        @foreach($data as $k=>$v)


                            <tr>
                            @if($v->type == 1)
                                <td>供应</td>
                            @else
                                <td>采购</td>
                            @endif

                            @if($v->big == 1)
                                <td>小图广告</td>
                            @elseif($v->big == 2)
                                <td>中图广告</td>
                            @elseif($v->big == 3)
                                <td>大图广告</td>
                            @endif
                                <td>{{    $v->title  }}</td>
                                <td>{{    $v->advertise_https  }}</td>
                                <td>
                                    <img class="img-circle img-thumbnail img-responsive" style="width:50px; height:60px" src="{{url('/').$v->image_path}}" alt="">
                                </td>
                                <td style="width:310px">
                                    <div style="float:left; margin-right:5px;">
                                            <form action="/admin/advertise/{{  $v->id  }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" id="sub" class="btn btn-danger" value="删除" onclick="return confirm('确认要删除该用户吗?');" >
                                        </form>
                                    </div>

                                    <div  style="float:left;  margin-right:5px; ">
                                        @if( $v->status ==1)
                                            <form action="/admin/advertise/disable/{{  $v->id   }}" method="post">
                                                {{ csrf_field() }}

                                                <input type="submit" id="disable" class="btn btn-info" value="禁用" onclick="return confirm('确认要禁用该链接吗?');" >
                                            </form>
                                        @else
                                            <form action="/admin/advertise/able/{{  $v->id   }}" method="post">
                                                {{ csrf_field() }}

                                                <input type="submit" id="able" class="btn btn-success" value="启用" onclick="return confirm('确认要启用该链接吗?');" >
                                            </form>
                                        @endif
                                    </div>
                                    <div style="float:left">
                                        <form  action="/admin/advertise/{{  $v->id }}/edit" method="get">
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