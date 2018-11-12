<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Buyoffer extends Model
{
    public $table='ungm_buyoffer';
    
     public function column()
        {
            return $this->belongsTo('App\Models\Admin\Column','lanmu');
        }
}
