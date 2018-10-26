<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'report';
    public function comment(){
        return $this->belongsTo('App\Models\Home\Comment','cid');
    }

    public function users(){
        return $this->belongsTo('App\Models\Home\Users','uid');
    }

    public function articles(){
        return $this->belongsTo('App\Models\Admin\Articles','aid');
    }
}
