<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Package_agenda extends Model
{
    protected $table = "package_agenda";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','package_id','package_agendadays_id','time','accommodation,activity'];
}