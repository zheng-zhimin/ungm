<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Cai;

class CaiController extends Controller
{

    public function ding(Request $request,$id)
    {
       $uid=session('homeuser')['id'];
       $ding=new Cai;
       $ding->uid=$uid;
       $ding->aid=$id;
       $ding->ding=1;
       $ding->save();
      
       
       
       
        
    }
    public function cai(Request $request,$id)
    {
       $uid=session('homeuser')['id'];
       $cai=new Cai;
       $cai->uid=$uid;
       $cai->aid=$id;
       $cai->cai=1;
       $cai->save();
       
        
    }

   
    
}
