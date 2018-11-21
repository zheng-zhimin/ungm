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
Route::get('/admin/login/jiuding/ruilu/index','Admin\LoginController@index');

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



//前台文章列表路由
route::get('/home/article','Home\HomeController@article');
//前台各文章列表路由
route::get('/home/article/{id}','Home\HomeController@articles');
//前台留言板路由
route::get('/home/mood','Home\HomeController@mood');
//前台文章详情表路由
route::get('/home/articledetail/{id}','Home\HomeController@articledetail');

// 前台评论
//route::get('/home/comment/{id}','Home\HomeController@comment');
//route::get('/home/recomment/{id}','Home\HomeController@recomment');
// 前台评论举报
//route::get('/home/myreport/{id}','Home\HomeController@myreport');
// 前台顶一下
//route::get('home/myup/{id}','Home\HomeController@myup');
// 前台踩一下
//route::get('home/mydown/{id}','Home\HomeController@mydown');
// 前台标签文章
route::get('home/label/{label}','Home\HomeController@label');


/*//前台检测登录
Route::post('/home/ajax1',function(){

   // return $_POST['uname'];
   $uname=$_POST['username'];
   //return $name;
   $res=DB::table('users')->where('username','=',$uname)->first();
   if($res){return 1;}else{
    return 0;
   }

});*/
//邮箱激活路由
//Route::get('/home/jihuo','Home\LoginController@jihuo');
//用户点击头像显示个人中心路由
//Route::get('/home/userinfo/userinfo',function(){
 //   return view('home.userinfo.userinfo');
//});

//添加收藏de 路由
Route::get('/home/addcollection/{id}','Home\CollectController@add');
//删除取消收藏的路由

Route::get('/home/delcollection/{id}','Home\CollectController@del');
//layer上传的路由
Route::post('/home/ler/uploads','Home\LerController@uploads');


//前台踩一下路由
//Route::get('/home/cai/{id}','Home\CaiController@cai');
//前台顶一下路由
//Route::get('/home/ding/{id}','Home\CaiController@ding');

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
//前台集客路由
route::get('/home/jk','Home\NewhomeController@jk');
//前台联系我们的路由
route::get('/home/contact','Home\NewhomeController@contact');
//前台关于我们的路由
route::get('/home/about','Home\NewhomeController@about');
//前台招贤纳士的路由
route::get('/home/job','Home\NewhomeController@job');
//前台排名推广的路由
route::get('/home/rank','Home\NewhomeController@rank');
//前台使用协议的路由
route::get('/home/dns','Home\NewhomeController@dns');
//前台隐私条款的路由
route::get('/home/copy','Home\NewhomeController@copy');
//前台广告服务的路由
route::get('/home/adv','Home\NewhomeController@adv');

//前台百度地图页面路由
Route::get('/home/map',function(){
    return view('home.map');
});


//前台登录
Route::controller('/home/newlogin','Home\NewloginController');
//忘记密码路由
Route::get('/home/forget','Home\NewloginController@forget');
Route::post('/home/forgetpassword','Home\NewloginController@forgetpassword');
Route::post('/home/forgetcode','Home\NewloginController@forgetcode');
Route::post('/home/forgetphone','Home\NewloginController@forgetphone');

//前台用户退出路由
Route::get('/home/logout','Home\NewloginController@logout');


//前台用户注册获取手机验证码的路由
route::get('/code/phone_code','Home\NewloginController@phone_code');
//前台货币转换ajax路由
route::get('/newhome/currency','Home\NewhomeController@currency');
//前台搜-搜路由(可以搜索英文数字汉子来关联表找到用户想要的)
//Route::get('/home/soso','SosoController@soso');

//前台获取分类栏目儿子栏目数据ajax路由
Route::post('/list/son','Home\NewhomeController@son');//前台获取分类栏目儿子广告图片数据ajax路由
Route::post('/list/pic','Home\NewhomeController@pic');//获取栏目下广告图片的ajax路由,后期这些都可以加缓存
/*Route::post('/list/fb','Home\NewhomeController@findbuy');//获取搜索框查询采购商的ajax路由,后期这些都可以加缓存
Route::post('/list/fs','Home\NewhomeController@findsell');//获取搜索框查询供应商的ajax路由,后期这些都可以加缓存*/
//q前台超级搜索
Route::post('/home/searchbuy','Home\NewhomeController@searchbuy');
Route::post('/home/searchsell','Home\NewhomeController@searchsell');






//商务三个热点页面
Route::get('/home/businesshot/one','Home\NewhomeController@hone');
Route::get('/home/businesshot/two','Home\NewhomeController@htwo');
Route::get('/home/businesshot/three','Home\NewhomeController@hthree');
//商务热点查看全部栏目下的文章
Route::get('/home/businesshot/more','Home\NewhomeController@hmore');
//前台商务热点文章列表专属路由
Route::get('/home/article/businesshot/{id}','Home\NewhomeController@hmoredetail');


//政策解读三个页面
Route::get('/home/businesspolicy/one','Home\NewhomeController@pone');
Route::get('/home/businesspolicy/two','Home\NewhomeController@ptwo');
Route::get('/home/businesspolicy/three','Home\NewhomeController@pthree');
//政策解读查看全部栏目下的文章
Route::get('/home/businesspolicy/more','Home\NewhomeController@pmore');
//前台政策解读文章列表专属路由
Route::get('/home/article/businesspolicy/{id}','Home\NewhomeController@pmoredetail');

//前台普通用户招标信息查询
Route::post('/home/query/mess','Home\SearchController@query');
//前台ungm招标信息查询
Route::post('/home/query/ungmmess','Home\SearchController@ungmquery');
//前台接收用户对ungm招标信息的感兴趣
Route::post('/home/like/ungmproject','Home\SearchController@ungmproject');


//前台产品列表二级页面
Route::get('/home/product/second','Home\NewhomeController@secondproduct');
//前台点击产品分类表直接跳到产品的全部(详细)三级页面
Route::get('/home/product/third','Home\NewhomeController@thirdproduct');
Route::get('/home/product/third1','Home\NewhomeController@third1product');
Route::get('/home/product/third2','Home\NewhomeController@third2product');
Route::get('/home/product/third3','Home\NewhomeController@third3product');
Route::get('/home/product/third4','Home\NewhomeController@third4product');


//前台求购的二级页
Route::get('/home/buymessage/second','Home\NewhomeController@secondbuymessage');
//前台求购的三级页
Route::get('/home/buymessage/third','Home\NewhomeController@thirdbuymessage');
Route::get('/home/buymessage/third1','Home\NewhomeController@third1buymessage');
Route::get('/home/buymessage/third2','Home\NewhomeController@third2buymessage');
Route::get('/home/buymessage/third3','Home\NewhomeController@third3buymessage');
Route::get('/home/buymessage/third4','Home\NewhomeController@third4buymessage');


//国内贸易->会议展示全部栏目下的文章
Route::get('/home/meeting/list','Home\NewhomeController@meetinglist');
//国内贸易->会议展示文章详情
Route::get('/home/meeting/detail/{id}','Home\NewhomeController@meetingdetail');
//国内贸易->考察展示全部栏目下的文章
Route::get('/home/observe/list','Home\NewhomeController@observelist');
//国内贸易->考察展示文章详情
Route::get('/home/observe/detail/{id}','Home\NewhomeController@observedetail');
//国内贸易->展览展示全部栏目下的文章
Route::get('/home/exhibition/list','Home\NewhomeController@exhibitionlist');
//国内贸易->展览展示文章详情
Route::get('/home/exhibition/detail/{id}','Home\NewhomeController@exhibitiondetail');

//采购信息列表内容点击
Route::post('/home/buymessage/list','Home\NewhomeController@buymessagelist');
//供应信息列表内容点击
Route::post('/home/product/list','Home\NewhomeController@productlist');

//供应商产品四级详情传递id的路由
Route::get('/home/productfour/{id}','Home\NewhomeController@productfour');

//采购商商信息四级详情传递id的路由
Route::get('/home/buymessagefour/{id}','Home\NewhomeController@buymessagefour');
//采购商产品四级详情传递id的路由(从文章出来的)
Route::get('/home/buymessagefourart/{id}','Home\NewhomeController@buymessagefourart');

//显示新个人中心的路由(信息管理)
Route::get('/home/userinfo/index','Home\NewhomeController@usercenter');//显示(采购)新个人中心的路由(信息管理)
Route::get('/home/userinfo/indexed','Home\NewhomeController@usercentered');//显示(供应+采购)新个人中心的路由(信息管理)
//普通用户的采购发布
Route::post('/home/userinfo/adduser','Home\NewhomeController@adduser');
//认证的供应商发布采购
Route::post('/home/userinfo/adduser2','Home\NewhomeController@adduser2');
//认证的供应商发布产品
Route::post('/home/userinfo/addselleruser2','Home\NewhomeController@addselleruser2');
//交易管理
Route::get('/home/userinfo/transaction','Home\NewhomeController@transaction');
//个人中心账户管理
Route::get('/home/userinfo/account/{id}','Home\NewhomeController@account');
//修改个人信息
Route::post('/center/update','Center\CenterController@userdetailupdate');

//密码修改路由
Route::post('/center/pwd','Center\CenterController@pwd');
//显示新增收货地址
Route::get('/center/addaddress','Center\CenterController@addaddress');
//添加新增收货地址
Route::post('/center/add/address','Center\CenterController@addbuyaddress');
//显示修改地址回填路由
Route::get('/center/editaddress/{id}','Center\CenterController@editaddress');
//执行地址修改路由
Route::post('/center/updateaddress','Center\CenterController@updateaddress');
//设置默认地址
Route::get('/center/setdefault/{id}','Center\CenterController@setdefault');
//删除收货地址
Route::get('/center/deladdress/{id}','Center\CenterController@deladdress');
//查询省市二级地区路由
Route::post('/center/area','Center\CenterController@area');
//前台发布产品确定用户身份是否认证(如果是认证直接跳转到个人中心->发布产品;如果未提交企业执照就先跳到供应商企业认证界面->提交申请表单)
Route::get('/home/check/authentication','Center\CenterController@authentication');

Route::post('/center/qiye/renzheng','Center\CenterController@qiyerenzheng');








// 后台采购商招标信息发布管理的路由
Route::resource('/admin/buyoffer','Admin\BuyofferController');
//后台采购商审核通过路由
Route::post('/admin/buyoffer/yes/{id}','Admin\BuyofferController@yes');
//后台采购商审核否定路由
Route::post('/admin/buyoffer/no/{id}','Admin\BuyofferController@no');

// 后台供应商投标信息发布管理的路由
Route::resource('/admin/selloffer','Admin\SellofferController');
//后台供应商审核通过路由
Route::post('/admin/selloffer/yes/{id}','Admin\SellofferController@yes');
//后台供应商审核否定路由
Route::post('/admin/selloffer/no/{id}','Admin\SellofferController@no');

// 后台供应商认证企业的路由
Route::resource('/admin/seller','Admin\SellerController');
//后台供应商审核通过路由
Route::post('/admin/seller/yes/{id}','Admin\SellerController@yes');
//后台供应商审核否定路由
Route::post('/admin/seller/no/{id}','Admin\SellerController@no');









//接收栏目信息
Route::post('/center/column','Center\CenterController@column');

//订单页面
Route::get('/order/order','Order\OrderController@index');
//接收订单信息
Route::post('/order/order','Order\OrderController@store');


//订单物流信息
Route::post('/order/order/logistics','Order\OrderController@logistics');

//后台订单列表
Route::resource('/admin/order','Admin\OrderController');





//-------------------new 网站的路由结束----------------------//






