<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Package_category extends Model
{
    protected $table = "package_category";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','package_categoryname','package_categorydesc'];
}
