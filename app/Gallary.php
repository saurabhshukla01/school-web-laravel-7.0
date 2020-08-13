<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    // Set table here 
	protected $table ='gallaries_tables';
	// public $timestamps = false;

	public function gallaries(){
    	return $this->belongsTo('App\SchoolCategory','school_category_id')->select('id','school_category');
    }

}
