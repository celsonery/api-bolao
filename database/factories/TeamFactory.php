<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teams = [
            [ 'name' => 'Qatar', 'brand' => '', 'continent' => 'asia' ],
            [ 'name' => 'Ecuador', 'brand' => '', 'continent' => 'south america' ],
            [ 'name' => 'Senegal', 'brand' => '', 'continent' => 'africa' ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
//        Team::insert($teams);
    }
}
