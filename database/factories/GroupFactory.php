<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $groups = [
            [ 'group' => 'a', 'cup_id' => '1' ],
            [ 'group' => 'b', 'cup_id' => '1' ],
            [ 'group' => 'c', 'cup_id' => '1' ],
            [ 'group' => 'd', 'cup_id' => '1' ],
            [ 'group' => 'e', 'cup_id' => '1' ],
            [ 'group' => 'f', 'cup_id' => '1' ],
            [ 'group' => 'g', 'cup_id' => '1' ],
            [ 'group' => 'h', 'cup_id' => '1' ]
        ];

        foreach ($groups as $group) {
            Group::create($group);
        }
//        Group::insert($groups);
    }
}
