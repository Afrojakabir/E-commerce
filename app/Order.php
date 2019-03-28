<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;
     protected $guarded = [];
    protected $table = 'orders';
  protected $fillable = [
        'user_id', 'phone_no','address','payment','total_price','status',
    ];


     public function users(){

    	return $this->belongsTo(User::class);
       }
       

    public function order_products()
    {
        return $this->hasMany(Order_Product::class);
    }
    


}
