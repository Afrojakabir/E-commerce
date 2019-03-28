<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sub_Category extends Model
{ 
	use SoftDeletes;
	protected $guarded = [];
    protected $table = 'sub_categorys';
  protected $fillable = [ 'name','category_id'];




    
    	 public function categorys(){

    	return $this->belongsTo('Category');
    }



     public function products(){

   	return $this->hasManyThrough('App\Product'
,'App\Category','sub_category_id','category_id','id');


   }



}