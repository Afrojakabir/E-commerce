<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
	
 	protected $guarded = [];
    protected $table = 'images';
    protected $fillable = [
          'img',
    ];
    
 
   

}
