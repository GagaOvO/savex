<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','user_id','category_id','subcategory_id','product_name','product_image','product_price','product_desc','product_type','product_quantity'];
}
