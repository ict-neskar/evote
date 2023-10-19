<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserVooter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $csvFile = fopen(base_path("database/data/user.csv"), "r");
  
        $firstline = false;
        while (($row = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    'name' => $row['0'],
                    'password' => bcrypt($row['1']),
                    'has_voted' =>$row['2'],
                    'candidate_voted' => $row['3'],
                    'class_id' => $row['4'],
                    'nis'   => $row['5'],
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
