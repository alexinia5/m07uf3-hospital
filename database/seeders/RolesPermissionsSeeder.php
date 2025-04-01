<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
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
        // definir roles
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'editor']);
        $readerRole = Role::create(['name' => 'reader']);

        // crear permisos
        $patientManagementPermission = Permission::create(['name' => 'management patients']);
        $doctorManagementPermission = Permission::create(['name' => 'management doctors']);
        $nursesManagementPermission = Permission::create(['name' => 'management nurses']);
        $medicalHistoryManagementPermission = Permission::create(['name' => 'management medical histories']);
        $specialtyManagementPermission = Permission::create(['name' => 'management specialties']);
        $roomManagementPermission = Permission::create(['name' => 'management room']);
        $appointmentManagementPermission = Permission::create(['name' => 'management appointment']);
        $emergencyManagementPermission = Permission::create(['name' => 'management emergency']);

        $viewMedicalHistoryPermission = Permission::create(['name' => 'view medical histories']);
        $viewRoomPermission = Permission::create(['name' => 'view room']);
        $viewAppointmentPermission = Permission::create(['name' => 'view appointment']);
        $viewEmergencyPermission = Permission::create(['name' => 'view emergency']);


        // asignar permisos
        $adminRole->givePermissionTo([$patientManagementPermission, $doctorManagementPermission,
        $nursesManagementPermission,  $medicalHistoryManagementPermission, $specialtyManagementPermission,
        $roomManagementPermission, $appointmentManagementPermission, $emergencyManagementPermission]);

        $editorRole->givePermissionTo([$patientManagementPermission, $medicalHistoryManagementPermission, $roomManagementPermission]);

        $readerRole->givePermissionTo([$viewMedicalHistoryPermission, $viewRoomPermission, $viewAppointmentPermission, $viewEmergencyPermission]);
    
        // asignar roles
        $user = Doctor::find(1);
        $user->assignRole($adminRole);

        $user1 = Nurse::find(1);
        $user1->assignRole($editorRole);

        $user2 = Patient::find(1);
        $user2->assignRole($readerRole);
    }
}