<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    //quien va a desencadenar todo el proceso
    public function autorizeRoles($roles){
        if($this->hasAnyRole($roles)){
            return true;

        }
        abort(401, 'No estas autorizado');
    }
    
    //validar si un usuario tiene varios roles (arreglo)
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role) {
                # code...
                if($this->hasRole($role)){
                    return true;
                }
            }

        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    //validar si un usuario contiene un rol
    public function hasRole($role){
        if($this->roles()->where('nombre',$role)->first()){
            return true;
        }
        return false;
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
