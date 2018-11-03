<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    public function category()
    {
    	$this->belongsTo('App\Model\News', 'cate_id', 'id');
    }
}
