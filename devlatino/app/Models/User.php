<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',  // Asegúrate de agregar el campo 'role_id' en el fillable
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relación con el rol del usuario.
     * Un usuario tiene un solo rol.
     */
    public function role()
    {
        return $this->belongsTo(Role::class); // Relación con el modelo Role
    }

    /**
     * Relación con los cursos que el usuario ha tomado.
     * Un usuario puede tomar muchos cursos.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course'); // Relación de muchos a muchos con Course
    }
}
