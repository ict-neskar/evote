<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'video', 'deskripsi', 'visi', 'misi', 'image'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function class()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }


}
