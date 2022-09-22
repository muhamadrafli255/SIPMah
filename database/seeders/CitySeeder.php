<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Bandung',
        ]);
        City::create([
            'name' => 'Sumedang',
        ]);
        City::create([
            'name' => 'Cianjur',
        ]);
        City::create([
            'name' => 'Bogor',
        ]);
        City::create([
            'name' => 'Depok',
        ]);
    }
}
