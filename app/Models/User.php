<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'date_of_birth',
        'gender',
        'phone_number',
        'photo',
        'country_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $default_date_of_birth   = "1990-01-01";
    public static $default_gender          = 1;
    public static $default_phone_number    = "01711223344";
    public static $default_country_id      = 1;

    public static function loginRules() {
        return [
            'email'     => 'required|email',
            'password'  => 'required|min:4|max:50'
        ];
    }

    public static function registerRules()
    {
        return [
            'name'          => 'required',
            'date_of_birth' => 'required',
            'gender'        => 'required',
            'phone_number'  => 'required',
            'country'       => 'required',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|max:50'
        ];
    }

    
}
