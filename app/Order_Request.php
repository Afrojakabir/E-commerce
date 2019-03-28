<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Request extends Model
{     
	 use SoftDeletes;
     protected $guarded = [];
     protected $table = 'order_requests';
     protected $fillable = [
        'name', 'quantity','price', 'img','phone_no','address','user_id','status','confirmation','payment',
    ];
 

     public function users(){

    	return $this->belongsTo(User::class);
}

}
