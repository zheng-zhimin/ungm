<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
     public $table='ungm_order';
     //多对一
    public function users()
    {
        return $this->belongsTo('App\Models\Home\Newusers','uid','id');
    }
    public function act()
    {
        return $this->belongsTo('App\Models\Admin\Articles','goods_id','id');
    }

}
