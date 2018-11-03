<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = "news_category";
    public function news()
    {
    	$this->hasMany('App\Model\News', 'cate_id', 'id');
    }
}
