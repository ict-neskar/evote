<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'X',
            'rombel' => 3
        ]);
        // RPL 11
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'XI',
            'rombel' => 3
        ]);
        // RPL 12
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'XII',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'RPL',
            'jurusanl' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'XII',
            'rombel' => 3
        ]);
    }
}
