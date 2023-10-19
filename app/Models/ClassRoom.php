<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jurusan',
        'kelas', ];


    public function users()
    {
        return $this->hasMany(User::class, 'class_id', 'id');
    }

    /**
     * Get all of the comments for the ClassRoom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'class_id', 'id');
    }
}
