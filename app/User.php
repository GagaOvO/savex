<?php

namespace savex;
use Auth;
use savex\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $fillable = ['id','first_name','last_name','profile_pic','email','user_type','referer_number','DOB','telephone','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function is_admin()
    {
        if($this->user_type=='super_admin'){

            return true;
        }

        return false;
    }

    public function is_agent()
    {
        if($this->user_type=='agent'){
            
            return true;
        }

        return false;
    }
    public function is_user()
    {
        if($this->user_type=='buyer'){
            
            return true;
        }

        return false;
    }
}
