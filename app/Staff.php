<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // Set table here 
	protected $table ='teacheres';
	// public $timestamps = false;

	public function subjectcategory(){
    	return $this->belongsTo('App\SubjectCategory','subject_category')->select('id','subject_name');
    }

}
