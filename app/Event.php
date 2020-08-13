<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Set table here 
	protected $table ='events';
	//public $timestamps = false;

	public function eventcategory(){
    	return $this->belongsTo('App\EventCategory','event_category')->select('id','name');
    }
	
}
