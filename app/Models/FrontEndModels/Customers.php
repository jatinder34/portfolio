<?php

namespace App\Models\FrontEndModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use Notifiable;
    protected $table = 'customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','phone','password','country','state','city','gender','profile_picture','reset_password','is_active'
    ];

        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
