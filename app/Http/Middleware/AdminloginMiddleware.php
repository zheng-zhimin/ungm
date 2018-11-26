<?php

namespace App\Http\Middleware;

use Closure;

class AdminloginMiddleware
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
        if( session('adminUser') ){
            return $next($request);
        }else{

            session(['redirect'=>$_SERVER['REQUEST_URI']]);
            \Session::save();
           return redirect('/admin/login');
        }
        

    }
}
