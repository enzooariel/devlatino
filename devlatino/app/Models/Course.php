<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relación con los usuarios
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_course'); // Relación de muchos a muchos
    }
}
