<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Home\Users;
use App\Models\Home\Collect;
class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request,$id)
    {
       $uid=session('homeuser')['id'];
       $collect=new Collect;
       $collect->uid=$uid;
       $collect->aid=$id;
       $collect->collectTime=date('Ymd',time());
       $collect->save();
        return back();
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function del(Request $request,$id)
    {
        //执行取消收藏操作
       
        
       DB::delete("delete from collect where aid=?",array($id));
     return back();

    }


}
