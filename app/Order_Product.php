<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Product extends Model
{
	use SoftDeletes;
 	protected $guarded = [];
    protected $table = 'order_products';
    protected $fillable = [
          'name', 'quantity','price','order_id','product_id','img',
    ];
    
    public function orders(){

    return $this->belongsTo(Order::class);
   }


    public function products()
{
    
    return $this->belongsToMany(Project::class);    
}

  public function user()
    {
        return $this->belongsTo('App\User');
    }
 

}
