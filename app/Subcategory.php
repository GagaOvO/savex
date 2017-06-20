<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = "subcategory";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','user_id','category_id','subcategoryname','subdescription'];
}
