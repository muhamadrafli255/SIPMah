<?php

namespace Database\Seeders;

use App\Models\Districts;
use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Districts::create([
            'name' => 'Katapang'
        ]);
        Districts::create([
            'name' => 'Andir'
        ]);
        Districts::create([
            'name' => 'Baleendah'
        ]);
        Districts::create([
            'name' => 'Banjaran'
        ]);
        Districts::create([
            'name' => 'Cangkuang'
        ]);
        Districts::create([
            'name' => 'Cicalengka'
        ]);
    }
}
