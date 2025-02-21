<?php

namespace App\Models;

use App\Models\LoginSecurity;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "gender",
        "number",
        'is_admin',
        'provider_id',
        'country',
        'contact_number',
        'code',
        'avatar',
        'status',
        'last_login_at', 'last_login_ip',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function userAddress(){
        return $this->hasOne(Address::class);
    }
    
    public function loginSecurity()
   {
    return $this->hasOne(LoginSecurity::class);
  }
  

   

}
