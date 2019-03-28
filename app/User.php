<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $fillable = [
        'name', 'phone_no','address', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      public function products()
    {
        return $this->hasMany(Project::class, 'user_id');
    }

       public function checkouts()
    {
        return $this->hasMany(Checkout::class, 'checkout_id');
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

     public function order_requests()
    {
        return $this->hasMany(Order_Request::class, 'user_id');
    }
public function ordered_product(){
    return $this->hasManyThrough(Order_Product::class,Order::class);

}




}
