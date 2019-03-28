<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
	protected $table = 'categorys';
    protected $fillable = [ 'name',];




   public function sub_categorys()

   {
    return $this->hasMany('App\Sub_Category', 'category_id');
     }   


public function products() 
{
	return $this->hasMany('App\Product', 'sub_category_id');

}

   	
 	
   




    }