<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class Importuser implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['0'],
            'password' => $row['1'],
            'has_voted' =>$row['2'],
            'candidate_voted' => $row['3'],
            'class_id' => $row['4'],
        ]);
    }
}
