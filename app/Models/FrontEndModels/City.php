<?php

namespace App\Models\FrontEndModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use Notifiable;
    protected $table = 'cities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'state_id',
    ];

}
