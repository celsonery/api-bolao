<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'cup_id',
        'team1_id',
        'team2_id',
        'result',
        'value1',
        'value2',
        'time_start',
        'time_end'
    ];

    use HasFactory;
}
