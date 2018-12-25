<?php

namespace App\Models\FrontEndModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use Notifiable;
    protected $table = 'countries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'phonecode',
    ];

}
