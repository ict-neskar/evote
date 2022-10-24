<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create([
            'slug' => 'alex',
            'image' => '#2',
            'name' => 'Alex',
            'deskripsi' => 'lorem ipsum bla bla bla bla',
            'visi' => 'lorem ipsum bla bla bla bla',
            'misi' => 'bla bla bla bla lorem ipsum',
            'video' => '#',
            'votes' => 0,
            'class_id' => 4

        ]);
        Candidate::create([
            'slug' => 'jason',
            'image' => '#2',
            'name' => 'Jason',
            'deskripsi' => 'lorem ipsum bla bla bla bla',
            'visi' => 'lorem ipsum bla bla bla bla',
            'misi' => 'bla bla bla bla lorem ipsum',
            'votes' => 0,
            'video' => '#',

            'class_id' => 5

        ]);
        Candidate::create([
            'slug' => 'kevin',
            'image' => '#2',
            'name' => 'Kevin',
            'deskripsi' => 'lorem ipsum bla bla bla bla',
            'visi' => 'lorem ipsum bla bla bla bla',
            'misi' => 'bla bla bla bla lorem ipsum',
            'votes' => 0,
            'video' => '#',

            'class_id' => 6

        ]);
    }
}
