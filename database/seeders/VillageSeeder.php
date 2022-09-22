<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Village::create([
            'name' => 'Sangkanhurip',
        ]);
        Village::create([
            'name' => 'Sukamukti',
        ]);
        Village::create([
            'name' => 'Banyusari',
        ]);
        Village::create([
            'name' => 'Cilampeni',
        ]);
        Village::create([
            'name' => 'Gandasari',
        ]);
        Village::create([
            'name' => 'Katapang',
        ]);
        Village::create([
            'name' => 'Pangauban',
        ]);
    }
}
