<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Package_agendadays extends Model
{
    protected $table = "package_agendadays";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','package_id','day-name'];
}
