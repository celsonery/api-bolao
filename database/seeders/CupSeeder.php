<?php

namespace Database\Seeders;

use App\Models\Cup;
use Illuminate\Database\Seeder;

class CupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cup::factory()->create(1);
    }
}
