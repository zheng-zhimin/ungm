@extends('home.layout.newindex')  

@section('content') 

<div style="background-color:#ECECEC; padding: 35px;">
<table cellpadding="0" align="center" style="width: 600px; margin: 0px auto; text-align: left; position: relative; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; font-size: 14px; font-family:微软雅黑, 黑体; line-height: 1.5; box-shadow: rgb(153, 153, 153) 0px 0px 5px; border-collapse: collapse; background-position: initial initial; background-repeat: initial initial;background:#fff;">
<tbody>
<tr>
<th valign="middle" style="height: 25px; line-height: 25px; padding: 15px 35px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #C46200; background-color: #336dfd; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
<font face="微软雅黑" size="5" style="color: rgb(255, 255, 255); ">UNGm! （全球购）</font>
</th>
</tr>
<tr>
<td>
<div style="padding:25px 35px 40px; background-color:#fff;">
<h2 style="margin: 5px 0px; "><font color="#333333" style="line-height: 20px; "><font style="line-height: 22px; " size="4">恭喜您注册成功：</font></font></h2>
<p>首先感谢您加入women ！
请您在发表言论时，遵守当地法律法规。
，聚天下。 http://www.xxoo.com
如果您有什么疑问可以联系管理员，Email: 1453175095@qq.com。</p>
<p align="right">xxoo! 官方团队</p>
<p align="right">{{$time}}</p>
</div>
</td>
</tr>
</tbody>
</table>
</div>
@endsection