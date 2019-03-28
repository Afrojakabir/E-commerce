<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model

{   

	use SoftDeletes;
   protected $guarded = [];
	protected $table = 'checkouts';
	protected $fillable = [
        'phone-no','address', 'user_id',
    ];

    public function users(){

    	return $this->belongsTo(User::class);
}
}
