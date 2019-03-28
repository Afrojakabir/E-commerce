<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{  

    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'products';
    protected $fillable = [
        'name', 'quantity','price','code', 'img', 'category_id','user_id'
    ];

  public function categorys(){

    	return $this->belongsTo(Category::class);
    }



    public function sub_categorys(){

    	return $this->belongsTo(Sub_Category::class);
}

 public function users(){

    	return $this->belongsTo(User::class);
}

  
    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id');
    }


    public function order_products()
{
    
    return $this->belongsToMany(Order_Product::class);    
}


}
