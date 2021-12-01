<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('runners')->insert([
            'external_id' => 1,
            'name' => 'John Doe',
            'race_id' => 1,
        ]);

        DB::table('form_data')->insert([
            'age' => 24,
            'sex' => 'G',
            'color' => 'B',
            'sire' => 'Alex',
            'dam' => 'Bella',
            'owners' => 'Big E, Xavier, Kofi Kingston',
            'runner_id' => 1
        ]);

        DB::table('form_data')->insert([
            'age' => 24,
            'sex' => 'G',
            'color' => 'B',
            'sire' => 'Tucker',
            'dam' => 'Lilly',
            'owners' => 'Big E, Xavier, Kofi Kingston',
            'runner_id' => 2
        ]);

        DB::table('form_last_runners')->insert([
            'runner_id' => 1,
            'date' => '12340102',
        ]);

        DB::table('form_last_runners')->insert([
            'runner_id' => 1,
            'date' => '12340102',
        ]);

        DB::table('form_last_runners')->insert([
            'runner_id' => 1,
            'date' => '12340102',
        ]);

        DB::table('form_last_runners')->insert([
            'runner_id' => 2,
            'date' => '12340102',
        ]);

        DB::table('form_last_runners')->insert([
            'runner_id' => 2,
            'date' => '12340102',
        ]);
    }
}
