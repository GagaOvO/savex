<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  	protected $table = "productcategory";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description'];
}
