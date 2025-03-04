<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert([
            'name' => 'Portugal',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        \DB::table('countries')->insert([
            'name' => 'Espanha',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        \DB::table('countries')->insert([
            'name' => 'França',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        \DB::table('countries')->insert([
            'name' => 'Polónia',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
    }
}
