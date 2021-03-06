<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use Notifiable;

    /** The attributes that are mass assignable. */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active',
    ];
    /** The attributes that should be hidden for arrays. */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /** A USER BELONGS TO ONE ROLE */
    public function role() {
        return $this->belongsTo(Role::class);
    }
    /** A USER BELONGS TO ONE ORDER */
    public function orders() {
        return $this->belongsTo(Order::class);
    }

    /** HASH ALL PASSWORDS BY DEFAULT */
    public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" )
        {
            $this->attributes['password'] = Hash::make(request('password'));
        }
    }
}
