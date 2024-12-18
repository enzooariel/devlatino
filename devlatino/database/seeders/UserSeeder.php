<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userRole = Role::where('name', 'user')->first(); // Obtener el rol de usuario
        $adminRole = Role::where('name', 'admin')->first(); // Obtener el rol de admin

        // Crear un usuario común
        User::create([
            'name' => 'Usuario Normal',
            'email' => 'user@devlatino.com',
            'password' => bcrypt('password'),
            'role_id' => $userRole->id, // Asignar rol de usuario
        ]);

        // Crear un administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@devlatino.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id, // Asignar rol de admin
        ]);
    }
}
