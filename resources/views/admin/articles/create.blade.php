@extends('admin.layout.index')
@section('content')
 <!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    <!-- 显示错误的信息 -->
    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>{{$title}}</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/articles" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mws-form-inline">

               
                    <div class="mws-form-row">
                        <label class="mws-form-label">所属栏目</label>
                        <div class="mws-form-item">
                            <select class="small" name="lanmu">
                                <option value="0">-- 请选择 --</option>
                                @foreach($data as $k => $v)
                                    <option value="{{ $v -> id }}">{{ $v -> cname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">供应商/采购商</label>
                        <div class="mws-form-item">
                            <select class="small" name="relation">
                                
                                    <option value="0">无角色</option>
                                    <option value="1">产品信息</option>
                                    <option value="2">采购信息</option>
                                
                            </select>
                        </div>
                    </div>
                
                    <div class="mws-form-row">
                        <label class="mws-form-label">文章/产品标题</label>
                        <div class="mws-form-item">
                            <input type="text" name="title" class="small" value="{{ old('title') }}">
                        </div>
                    </div>


                   <div class="mws-form-row" style="width: 800px;">
                        <label class="mws-form-label">文章/产品图片</label>
                        <div class="mws-form-item" style="width: 465px;">
                            <input type="file" name="image" class="small">
                        </div>
                    </div>

                    

                  <div class="mws-form-row">
                        <label class="mws-form-label">地区</label>
                        <div class="mws-form-item">
                            <input type="text" name="area"  style="width: 200px;"  class="small" >
                        </div>
                    </div>

                      <div class="mws-form-row">
                        <label class="mws-form-label">行业</label>
                        <div class="mws-form-item">
                            <input type="text" name="industry" style="width: 200px;" class="small" >
                        </div>
                    </div>

                      <div class="mws-form-row">
                        <label class="mws-form-label">公司</label>
                        <div class="mws-form-item">
                            <input type="text" name="company" style="width: 200px;" class="small">
                        </div>
                    </div>

                     <div class="mws-form-row">
                        <label class="mws-form-label">时间区间</label>
                        <div class="mws-form-item">
                            <input type="text" name="timezone" style="width: 200px;" class="small">
                        </div>
                    </div>
               


                    <div class="mws-form-row">
                        <label class="mws-form-label">文章内容</label>
                        <div class="mws-form-item">
                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="content" class="small" type="text/plain" style="height:300px;" >
                        </script>
                        </div>
                    </div>
              <div class="mws-button-row">
                    <input type="submit" value="文章添加" class="btn btn-success">
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