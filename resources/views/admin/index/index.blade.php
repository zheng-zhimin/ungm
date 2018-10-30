@extends('admin.layout.index')
@section('content')

       <style type="text/css">
            .result-wrap {
            padding: 10px 20px;
            border-bottom: 1px solid #e5e5e5;

        }

        li {
            list-style: none;
            


        }

       </style>
<div class="result-wrap" style="text-align:center;margin-top:100px;">
            <div class="result-title">
                <h2>尊敬的:<font style="color:orange;">{{ $user = session('adminUser')->username }}</font>,您已成功登陆后台操作系统.</h2>
                <h3>当前操作系统配置信息:</h3>
            </div>
            <div class="result-content" >
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统:</label><span class="res-info">WINNT</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">运行环境:</label><span class="res-info">Apache/2.2.21 (Win64) PHP/7.1.1</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">PHP运行方式:</label><span class="res-info">   Apache 2.0 Handler</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">九鼎智成设计-版本:</label><span class="res-info">v_2.1</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">上传附件限制:</label><span class="res-info">2M</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">北京时间:</label><span class="res-info">2018年10月26日 17:36:06</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">服务器域名/IP:</label><span class="res-info">localhost [ 47.94.207.28 ]</span>
                    </li>
                    <hr>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">:47.94.207.28</span>
                    </li>
                    <hr>
                </ul>
            </div>
        </div>




@endsection



@section('title')
    九鼎智成后台配置管理
@endsection