<?php

namespace savex;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
	protected $table = "agents";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','user_id','next_of_keen','next_of_keen_tel_number','address','id_number'];
}
