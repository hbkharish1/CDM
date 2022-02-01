<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Adminusers extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'adminsuser';
    protected $fillable = [
        'name',
        'gender',
        'dob',
        'age',
        'mobile1',
        'mobile2',
        'whatsapp',
        'email',
        'address',
        'city',
        'pincode',
        'state',
        'country',
        'company',
        'designation',
        'company_location',
        'sessions_attended',
        'palmleaf_sub',
        'language',
        'facebook',
        'instagram',
        'linkedin',
        'comments',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
