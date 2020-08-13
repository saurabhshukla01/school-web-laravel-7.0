<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Set table here 
	protected $table ='newses';
	// public $timestamps = false;

	public function newscategory(){
    	return $this->belongsTo('App\NewsCategory','news_category')->select('id','name');
    }
}
