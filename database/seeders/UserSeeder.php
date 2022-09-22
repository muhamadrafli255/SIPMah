<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = User::create([
            'nis' => '20201000',
            'name' => 'Irfan Setiadi',
            'email' => 'irfansetiadi@example.com',
            'status' => '1',
            'phone' => '083844235744',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Kp Cikambuy RT01 RW01',
        ]);

        $member->assignRole('member');

        $member = User::create([
            'nis' => '20201001',
            'name' => 'Irfan Maulana',
            'email' => 'irfanmaulana@example.com',
            'status' => '1',
            'phone' => '083847635664',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Kp Nagrak RT09 RW09',
        ]);

        $member->assignRole('member');

        $member = User::create([
            'nis' => '20201002',
            'name' => 'Ferlinda Marshanda',
            'email' => 'ferlindamarshanda@example.com',
            'status' => '1',
            'phone' => '083437630064',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Kp Serem RT666 RW666',
        ]);

        $member->assignRole('member');

        $member = User::create([
            'nis' => '20201003',
            'name' => 'Raina Aqila',
            'email' => 'Rainaaqila@example.com',
            'status' => '1',
            'phone' => '083437639877',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Kp Ciganitri RT05 RW19',
        ]);

        $member->assignRole('member');

        $member = User::create([
            'nis' => '20201004',
            'name' => 'Fella Sakit Mata',
            'email' => 'Fellasakitmata@example.com',
            'status' => '1',
            'phone' => '083409633064',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Jl Ciparenyon RT08 RW13',
        ]);

        $member->assignRole('member');

        $officer = User::create([
            'nis' => '20201005',
            'name' => 'Dadang Suriat',
            'email' => 'Dadangsuriat@example.com',
            'status' => '1',
            'phone' => '083478633064',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Jl Cipaku RT04 RW16',
        ]);

        $officer->assignRole('officer');

        $officer = User::create([
            'nis' => '20201006',
            'name' => 'Maman Abdurahman',
            'email' => 'Mamanabdurahman@example.com',
            'status' => '1',
            'phone' => '083478076064',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Kp Preman RT04 RW10',
        ]);

        $officer->assignRole('officer');

        $officer = User::create([
            'nis' => '20201007',
            'name' => 'Hariono Sigarantang',
            'email' => 'Harionosigrantang@example.com',
            'status' => '1',
            'phone' => '083478565064',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Jl Kavling Butut RT04 RW45',
        ]);

        $officer->assignRole('officer');

        $admin = User::create([
            'nis' => '20201008',
            'name' => 'Pa Nuron',
            'email' => 'Panuronperpus@example.com',
            'status' => '1',
            'phone' => '083406488064',
            'province_id' => '1',
            'city_id' => '1',
            'districts_id' => '1',
            'village_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'address' => 'Jl Gatau Apa RT04 RW09',
        ]);

        $admin->assignRole('admin');
    }
}
