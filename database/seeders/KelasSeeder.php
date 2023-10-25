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
        // Jurusan Rekayasa Perangkat Lunak

        ClassRoom::create([
            'jurusans' => 'PPLG',
            'jurusanl' => 'Pengembangan Perangkat Lunak dan Gim',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'PPLG',
            'jurusanl' => 'Pengembangan Perangkat Lunak dan Gim',
            'kelas' => 'X',
            'rombel' => 2
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

        // Jurusan TKJ
        ClassRoom::create([
            'jurusans' => 'TJKT',
            'jurusanl' => 'Teknik Jaringan Komputer dan Telekomunikasi',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TJKT',
            'jurusanl' => 'Teknik Jaringan Komputer dan Telekomunikasi',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TKJ',
            'jurusanl' => 'Teknik Komputer Jaringan',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TKJ',
            'jurusanl' => 'Teknik Komputer Jaringan',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TKJ',
            'jurusanl' => 'Teknik Komputer Jaringan',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TKJ',
            'jurusanl' => 'Teknik Komputer Jaringan',
            'kelas' => 'XII',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TKJ',
            'jurusanl' => 'Teknik Komputer Jaringan',
            'kelas' => 'XII',
            'rombel' => 3
        ]);

        // Jurusan TEI
        ClassRoom::create([
            'jurusans' => 'TE',
            'jurusanl' => 'Teknik Elektronika',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TE',
            'jurusanl' => 'Teknik Elektronika',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TE',
            'jurusanl' => 'Teknik Elektronika',
            'kelas' => 'X',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TE',
            'jurusanl' => 'Teknik Elektronika',
            'kelas' => 'X',
            'rombel' => 4
        ]);
        ClassRoom::create([
            'jurusans' => 'TEI',
            'jurusanl' => 'Teknik Elektronika Industri',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TEI',
            'jurusanl' => 'Teknik Elektronika Industri',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TEI',
            'jurusanl' => 'Teknik Elektronika Industri',
            'kelas' => 'XI',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TEI',
            'jurusanl' => 'Teknik Elektronika Industri',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TEI',
            'jurusanl' => 'Teknik Elektronika Industri',
            'kelas' => 'XII',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TEI',
            'jurusanl' => 'Teknik Elektronika Industri',
            'kelas' => 'XII',
            'rombel' => 3
        ]);

        // Jurusan DPIB
        ClassRoom::create([
            'jurusans' => 'DPIB',
            'jurusanl' => 'Design Pemodelan dan Informasi Bangunan',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'DPIB',
            'jurusanl' => 'Design Pemodelan dan Informasi Bangunan',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'DPIB',
            'jurusanl' => 'Design Pemodelan dan Informasi Bangunan',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'DPIB',
            'jurusanl' => 'Design Pemodelan dan Informasi Bangunan',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'DPIB',
            'jurusanl' => 'Design Pemodelan dan Informasi Bangunan',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'DPIB',
            'jurusanl' => 'Design Pemodelan dan Informasi Bangunan',
            'kelas' => 'XII',
            'rombel' => 2
        ]);

        // Jurusan TKR
        ClassRoom::create([
            'jurusans' => 'TO',
            'jurusanl' => 'Teknik Otomotif',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TO',
            'jurusanl' => 'Teknik Otomotif',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TKR',
            'jurusanl' => 'Teknik Kendaraan Ringan',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TKR',
            'jurusanl' => 'Teknik Kendaraan Ringan',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TKR',
            'jurusanl' => 'Teknik Kendaraan Ringan',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TKR',
            'jurusanl' => 'Teknik Kendaraan Ringan',
            'kelas' => 'XII',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TKR',
            'jurusanl' => 'Teknik Kendaraan Ringan',
            'kelas' => 'XII',
            'rombel' => 3
        ]);

        // Jurusan TSM
        ClassRoom::create([
            'jurusans' => 'TO',
            'jurusanl' => 'Teknik Otomotif',
            'kelas' => 'X',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TO',
            'jurusanl' => 'Teknik Otomotif',
            'kelas' => 'X',
            'rombel' => 4
        ]);
        ClassRoom::create([
            'jurusans' => 'TSM',
            'jurusanl' => 'Teknik Sepeda Motor',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TSM',
            'jurusanl' => 'Teknik Sepeda Motor',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TSM',
            'jurusanl' => 'Teknik Sepeda Motor',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TSM',
            'jurusanl' => 'Teknik Sepeda Motor',
            'kelas' => 'XII',
            'rombel' => 2
        ]);
        
        // Jurusan TFLM
        ClassRoom::create([
            'jurusans' => 'TFLM',
            'jurusanl' => 'Teknik Fabrikasi Logam dan Manufaktur',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TFLM',
            'jurusanl' => 'Teknik Fabrikasi Logam dan Manufaktur',
            'kelas' => 'XIII',
            'rombel' => 1
        ]);

        // Jurusan TPL
        ClassRoom::create([
            'jurusans' => 'TPFL',
            'jurusanl' => 'Teknik Pengelasan dan Fabrikasi Logam',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TPFL',
            'jurusanl' => 'Teknik Pengelasan dan Fabrikasi Logam',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TPFL',
            'jurusanl' => 'Teknik Pengelasan dan Fabrikasi Logam',
            'kelas' => 'X',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TPL',
            'jurusanl' => 'Teknik Pengelasan',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TPL',
            'jurusanl' => 'Teknik Pengelasan',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TPL',
            'jurusanl' => 'Teknik Pengelasan',
            'kelas' => 'XI',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TPL',
            'jurusanl' => 'Teknik Pengelasan',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TPL',
            'jurusanl' => 'Teknik Pengelasan',
            'kelas' => 'XII',
            'rombel' => 2
        ]);

        // Jurusan DGM
        ClassRoom::create([
            'jurusans' => 'TM',
            'jurusanl' => 'Teknik Mesin',
            'kelas' => 'X',
            'rombel' => 4
        ]);
        ClassRoom::create([
            'jurusans' => 'TM',
            'jurusanl' => 'Teknik Mesin',
            'kelas' => 'X',
            'rombel' => 5
        ]);
        ClassRoom::create([
            'jurusans' => 'DGM',
            'jurusanl' => 'Desain Gambar Mesin',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'DGM',
            'jurusanl' => 'Desain Gambar Mesin',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'DGM',
            'jurusanl' => 'Desain Gambar Mesin',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'DGM',
            'jurusanl' => 'Desain Gambar Mesin',
            'kelas' => 'XII',
            'rombel' => 2
        ]);

        // Jurusan TP
        ClassRoom::create([
            'jurusans' => 'TM',
            'jurusanl' => 'Teknik Mesin',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TM',
            'jurusanl' => 'Teknik Mesin',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TM',
            'jurusanl' => 'Teknik Mesin',
            'kelas' => 'X',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TP',
            'jurusanl' => 'Teknik Pemesinan',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TP',
            'jurusanl' => 'Teknik Pemesinan',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TP',
            'jurusanl' => 'Teknik Pemesinan',
            'kelas' => 'XI',
            'rombel' => 3
        ]);
        ClassRoom::create([
            'jurusans' => 'TP',
            'jurusanl' => 'Teknik Pemesinan',
            'kelas' => 'XI',
            'rombel' => 4
        ]);
        ClassRoom::create([
            'jurusans' => 'TP',
            'jurusanl' => 'Teknik Pemesinan',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TP',
            'jurusanl' => 'Teknik Pemesinan',
            'kelas' => 'XII',
            'rombel' => 2
        ]);

        // Jurusan TITL
        ClassRoom::create([
            'jurusans' => 'TK',
            'jurusanl' => 'Teknik Ketenagalistrikan',
            'kelas' => 'X',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TK',
            'jurusanl' => 'Teknik Ketenagalistrikan',
            'kelas' => 'X',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TITL',
            'jurusanl' => 'Teknik Instalasi Tenaga Listrik',
            'kelas' => 'XI',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TITL',
            'jurusanl' => 'Teknik Instalasi Tenaga Listrik',
            'kelas' => 'XI',
            'rombel' => 2
        ]);
        ClassRoom::create([
            'jurusans' => 'TITL',
            'jurusanl' => 'Teknik Instalasi Tenaga Listrik',
            'kelas' => 'XII',
            'rombel' => 1
        ]);
        ClassRoom::create([
            'jurusans' => 'TITL',
            'jurusanl' => 'Teknik Instalasi Tenaga Listrik',
            'kelas' => 'XII',
            'rombel' => 2
        ]);
    }
}