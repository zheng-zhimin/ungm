<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( session('homeuser') ){
            return $next($request);
        }else{
            //保存一下用户来的位置的url存入session
            //然后分配这个urlsession
            // 如果没有登陆 //将访问地址写入session 进行跳转
            session(['redirect'=>$_SERVER['REQUEST_URI']]);
            \Session::save();
           return redirect('/home/newlogin/login');
        }
        

    }
}
