@extends('admin.layout.index')
@section('content')
 <!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
            <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>{{$title}}</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/articles/{{$articles->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                        <label class="mws-form-label">所属栏目</label>
                        <div class="mws-form-item">
                            <select class="small" name="lanmu">
                                <option value="0">-- 请选择 --</option>
                                @foreach($data as $k => $v)
                                @if( $v -> id == $articles -> lanmu )
                                    <option selected value="{{ $v -> id }}">{{ $v -> cname }}</option>
                                @endif
                                    <option value="{{ $v -> id }}">{{ $v -> cname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">文章标题</label>
                        <div class="mws-form-item">
                            <input type="text" name="title" class="small" value="{{$articles->title}}">
                        </div>
                    </div>
                   <div class="mws-form-row" style="width: 800px;">
                        <label class="mws-form-label">文章图片</label>
                        <div class="mws-form-item" style="width: 465px;">
                            <input type="file" name="image" class="small">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">文章内容</label>
                        <div class="mws-form-item">
                             <script id="container" name="content" class="small" type="text/plain" style="height:300px;">
                             {!!$articles -> content!!}
                            </script>

                        </div>
                    </div>


                  <div class="mws-button-row">
                      <input type="submit" value="文章修改" class="btn btn-success">
                      <input type="reset" value="文章重置" class="btn btn-info">
                  </div>
            </form>
        </div>
    </div>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{
                            toolbars: [
                                ['bold', //加粗
                                 'italic', //斜体
                                 'underline', //下划线
                                 'undo', //撤销
                                 'simpleupload', //单图上传
                                 'emotion', //表情
                                ]
                            ]
                        });
</script>
@endsection



@section('title')
    九鼎智成
@endsection