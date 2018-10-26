<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home.newindex');
    }

    /**
     * Show the form for creating a new resource.
     *前台全球贸易(Global-Trade)简称gt
     * @return \Illuminate\Http\Response
     */
    public function gt(Request $requset)
    {
        return view('home.gt');
    }

    /**
     * Show the form for creating a new resource..
     *前台国内贸易(China-Trade)简称ct
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function ct(Request $request)
    {
        return view('home.ct');
    }

      /**
     * Show the form for creating a new resource.
     *前台招投标服务(tender 投标)简称td
     * @return \Illuminate\Http\Response
     */
    public function td(Request $requset)
    {
        return view('home.td');
    }

      /**
     * Show the form for creating a new resource.
     *前台会员发展(Member Development)
     * @return \Illuminate\Http\Response
     */
    public function md(Request $requset)
    {
        return view('home.md');
    }  

      /**
     * Show the form for creating a new resource.
     *前台货币换算器(Currency converter)
     * @return \Illuminate\Http\Response
     */
    public function cc(Request $requset)
    {
        return view('home.cc');
    }
    

   
}
