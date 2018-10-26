<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public $table = 'label';
    public function articles()
    {
        return $this->belongsTo('App\Models\Admin\Articles','aid');
    }
}
