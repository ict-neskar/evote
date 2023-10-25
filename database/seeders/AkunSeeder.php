<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nis' => '00001',
            'name' => 'admin',
            'password' => bcrypt('password'),
            'is_admin' => 1,
            'class_id' => 1
        ]);

        User::create([
            'nis' => '00002',
            'name' => 'Fariz Ferdiano',
            'password' => bcrypt('password'),
            'is_admin' => 0,
            'class_id' => 2

        ]);

        User::create([
            'nis' => '00003',
            'name' => 'Shafwana',
            'password' => bcrypt('password'),
            'is_admin' => 0,
            'class_id' => 3

        ]);

        User::create([
            'nis' => '00004',
            'name' => 'Padli',
            'password' => bcrypt('password'),
            'is_admin' => 0,
            'class_id' => 4

        ]);

        User::create([
            'nis' => '00005',
            'name' => 'Aripin',
            'password' => bcrypt('password'),
            'is_admin' => 0,
            'class_id' => 1

        ]);

        User::create([
            'nis' => '00006',
            'name' => 'Nayif Aditya',
            'password' => bcrypt('password'),
            'is_admin' => 0,
            'class_id' => 2

        ]);
    }
}
