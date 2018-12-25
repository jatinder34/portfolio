<?php

namespace App\Models\FrontEndModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use Notifiable;
    protected $table = 'states';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'country_id',
    ];

}
