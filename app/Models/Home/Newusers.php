<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Newusers extends Model
{
     public $table='ungm_users';

     // 一对一
     public function userdetail()
     {
          return $this->hasOne('App\Models\Admin\Ungmuserdetail','uid');

     }

    public function buyoffer()
     {
        return $this->hasMany('App\Models\Admin\buyoffer','uid');
     } 

     public function selloffer()
     {
        return $this->hasMany('App\Models\Admin\Selloffer','uid');
     }

       public function address()
     {
        return $this->hasMany('App\Models\Admin\Address','uid');
     }

}
