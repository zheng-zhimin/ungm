@extends('admin.layout.index')

@section('content')
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
            <span><i class="icon-magic"></i>栏目添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/column" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">所属栏目</label>
                        <div class="mws-form-item">
                            <select class="small" name="pid">
                                <option value="0">-- 请选择 --</option>
                                @foreach($data as $k => $v)
                                    <option value="{{ $v -> id }}">{{ $v -> cname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">栏目名称</label>
                        <div class="mws-form-item">
                            <input type="text" name="cname" class="small">
                        </div>
                    </div>
                </div>

                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">对应栏目广告</label>
                        <div class="mws-form-item">

                            <input type="file" name="pic_path" id="pic_path" class="small">
                        </div>
                    </div>
                </div>

                <div class="mws-button-row">
                    <input type="submit" value="提交" class="btn btn-success">
                    <input type="reset" value="重置" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
@endsection
@section('title')
    九鼎智成
@endsection