<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//-----------------------原始我的路由开始------------------------//

//验证码
Route::get('/code','CodeController@makecode');
Route::get('/check','CodeController@checkcode');
Route::get('/show','CodeController@show');
Route::post('/store','CodeController@store');
//验证码测试结束测试结束

//后台首页路由
Route::get('/admin/admin','Admin\IndexController@index');

//后台 评论的路由
Route::resource('/admin/column','Admin\ColumnController');

// 后台 用户的路由
Route::resource('/admin/users','Admin\UsersController');

//后台拉黑用户专用路由
Route::post('/admin/users/lahei/{id}','Admin\UsersController@lahei');

//后台恢复用户专用路由
Route::post('/admin/users/huifu/{id}','Admin\UsersController@huifu');

//后台登录页面路由
Route::get('/admin/login','Admin\LoginController@index');

//登录后台管理员验证路由
Route::post('/admin/dologin','Admin\LoginController@dologin');

//后台管理员退出路由
Route::get('/admin/logout','Admin\LoginController@logout');

// 后台 文章的路由
Route::resource('/admin/articles','Admin\ArticlesController');

//后台头部显示修改登陆后管理人员的密码
Route::get('/admin/repwd','Admin\IndexController@writepwd');

//跳转到执行后台修改密码的控制器方法
Route::post('/admin/resetpwd/{id}','Admin\IndexController@resetpwd');


//查看友情链接
Route::resource('/admin/friendlylink','Admin\FriendlyLinkController');
//禁用友情链接路由
Route::post('/admin/friendlylink/disable/{id}','Admin\FriendlyLinkController@disable');
//启用友情链接路由
Route::post('/admin/friendlylink/able/{id}','Admin\FriendlyLinkController@able');


//查看广告位
Route::resource('/admin/advertise','Admin\AdvertiseController');
//禁用广告位路由
Route::post('/admin/advertise/disable/{id}','Admin\AdvertiseController@disable');
//启用广告位路由
Route::post('/admin/advertise/able/{id}','Admin\AdvertiseController@able');


//前台主页模板路径
//route::get('/','Home\HomeController@index');
//前台留言板路由
route::get('/home/board','Home\HomeController@board');
//前台关于我们路由
route::get('/home/about','Home\HomeController@about');
//前台文章列表路由
route::get('/home/article','Home\HomeController@article');
//前台各文章列表路由
route::get('/home/article/{id}','Home\HomeController@articles');
//前台留言板路由
route::get('/home/mood','Home\HomeController@mood');
//前台文章详情表路由
route::get('/home/articledetail/{id}','Home\HomeController@articledetail');

// 前台评论
route::get('/home/comment/{id}','Home\HomeController@comment');
route::get('/home/recomment/{id}','Home\HomeController@recomment');
// 前台评论举报
route::get('/home/myreport/{id}','Home\HomeController@myreport');
// 前台顶一下
route::get('home/myup/{id}','Home\HomeController@myup');
// 前台踩一下
route::get('home/mydown/{id}','Home\HomeController@mydown');
// 前台标签文章
route::get('home/label/{label}','Home\HomeController@label');
//前台登录
Route::controller('/home/login','Home\LoginController');
//前台用户退出路由
Route::get('/home/logout','Home\HomeController@logout');
//前台主页面
Route::get('/home/home','Home\LoginController@index');
//前台检测登录
Route::post('/home/ajax1',function(){

   // return $_POST['uname'];
   $uname=$_POST['username'];
   //return $name;
   $res=DB::table('users')->where('username','=',$uname)->first();
   if($res){return 1;}else{
    return 0;
   }

});
//邮箱激活路由
Route::get('/home/jihuo','Home\LoginController@jihuo');
//用户点击头像显示个人中心路由
Route::get('/home/userinfo/userinfo',function(){
    return view('home.userinfo.userinfo');
});

//添加收藏de 路由
Route::get('/home/addcollection/{id}','Home\CollectController@add');
//删除取消收藏的路由

Route::get('/home/delcollection/{id}','Home\CollectController@del');
//layer上传的路由
Route::post('/home/ler/uploads','Home\LerController@uploads');


//前台踩一下路由
Route::get('/home/cai/{id}','Home\CaiController@cai');
//前台顶一下路由
Route::get('/home/ding/{id}','Home\CaiController@ding');

//-----------------------原始我的路由结束------------------------//












//-------------------new 网站的理由开始----------------------//

//前台主页模板路径
route::get('/','Home\NewhomeController@index');
//前台全球贸易(Global-Trade)的路由
route::get('/home/gt','Home\NewhomeController@gt');
//前台国内贸易(China-Trade)的路由
route::get('/home/ct','Home\NewhomeController@ct');
//前台招投标服务(Tender 投标)路由
route::get('/home/td','Home\NewhomeController@td');
//前台会员发展(Member Development)路由
route::get('/home/md','Home\NewhomeController@md');
//前台货币换算器(Currency converter)路由
route::get('/home/cc','Home\NewhomeController@cc');























//-------------------new 网站的路由结束----------------------//






