<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Tag extends Model
{

   $product = new Product;
        $product->name = 'God of War';
        $product->pri
        ce = 40;

        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);


}

