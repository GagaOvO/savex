<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class package_images extends Model
{
    protected $table = "package_images";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','package_id','package_image'];
}
