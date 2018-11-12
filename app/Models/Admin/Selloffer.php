<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Selloffer extends Model
{
    public $table='ungm_selloffer';
    
     public function column()
        {
            return $this->belongsTo('App\Models\Admin\Column','lanmu');
        }
}
