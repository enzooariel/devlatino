<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relación con el usuario
    public function users()
    {
        return $this->hasMany(User::class); // Relación de uno a muchos
    }
}
