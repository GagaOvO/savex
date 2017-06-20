<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Tour_package extends Model
{
    protected $table = "tour_packages";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','package_image','package_name','package_amount','package_desc','duration','Location','ages','start_point','end_point'];
}
