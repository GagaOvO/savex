<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $table = "product_images";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','product_id','product_image'];
}
