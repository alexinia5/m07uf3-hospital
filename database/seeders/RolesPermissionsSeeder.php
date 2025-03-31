<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'getionar pacientes',
            'getionar historial médico',
            'getionar doctores',
            'getionar especialidades',
            'getionar enfermeros',
            'getionar habitaciones',
            'getionar citas',
            'emergencias',
        ];
    }
}

// -------------------------------------------------------------------------------------------

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Limpiar caché de permisos para evitar errores
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Definir permisos
        $permissions = [
            'gestionar pacientes',    // Médico puede ver y modificar cualquier paciente
            'ver pacientes',          // Enfermero y Médico pueden ver pacientes
            'actualizar pacientes',   // Enfermero y Médico pueden actualizar datos
            'ver su historial',       // Paciente solo puede ver su propio historial
        ];

        // Crear permisos en la base de datos
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Crear roles y asignar permisos
        $medico = Role::firstOrCreate(['name' => 'medico']);  // Admin del sistema
        $medico->givePermissionTo($permissions); // Tiene todos los permisos

        $enfermero = Role::firstOrCreate(['name' => 'enfermero']); // Editor del sistema
        $enfermero->givePermissionTo(['ver pacientes', 'actualizar pacientes']); // No puede gestionar pacientes

        $paciente = Role::firstOrCreate(['name' => 'paciente']); // Usuario normal
        $paciente->givePermissionTo(['ver su historial']); // Solo puede ver su información

        // Asignar roles a usuarios de ejemplo (si existen en la BD)
        $user1 = User::find(1); // Suponiendo que el usuario con ID 1 es un médico
        if ($user1) {
            $user1->assignRole('medico');
        }

        $user2 = User::find(2); // Suponiendo que el usuario con ID 2 es un enfermero
        if ($user2) {
            $user2->assignRole('enfermero');
        }

        $user3 = User::find(3); // Suponiendo que el usuario con ID 3 es un paciente
        if ($user3) {
            $user3->assignRole('paciente');
        }
    }
}

// Ver todos los roles
Role::all();

// Ver todos los permisos
Permission::all();

// Ver si el usuario con ID 1 es médico
$user = User::find(1);
$user->hasRole('medico'); // true o false

// Ver los permisos del rol "enfermero"
$enfermero = Role::findByName('enfermero');
$enfermero->permissions;
