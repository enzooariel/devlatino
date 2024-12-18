<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'user']); // Rol de usuario común
        Role::create(['name' => 'admin']); // Rol de administrador
    }
}
