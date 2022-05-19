<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    protected $fillable = [
        'user_id',
        'league_id',
        'cup_id',
        'game_id',
        'result',
        'value1',
        'value2'
    ];

    use HasFactory;
}
