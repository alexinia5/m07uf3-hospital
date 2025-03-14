<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\MedicalHistoryController;
use App\Http\Controllers\RoomController;

// Hospital Controller
// main
Route::get('/', [HospitalController::class, 'index']);
// doctors
Route::get('/doctors', [HospitalController::class, 'doctors']);
// nurses
Route::get('/nurses', [HospitalController::class, 'nurses']);
// patients
Route::get('/patients', [HospitalController::class, 'patients']);
// appointments
Route::get('/appointments', [HospitalController::class, 'appointments']);
// emergencies
Route::get('/emergencies', [HospitalController::class, 'emergencies']);
// rooms
Route::get('/rooms', [HospitalController::class, 'rooms']);



// Doctor Controller
// create
Route::get('/doctors/create', [DoctorController::class, 'create_doctor']);
// store
Route::post('/doctors/store', [DoctorController::class, 'store_doctor']);
// edit
Route::get('/doctors/edit/{id}', [DoctorController::class, 'edit_doctor']);
// update
Route::put('/doctors/update/{id}', [DoctorController::class, 'update_doctor']);
// delete
Route::delete('/doctors/delete/{id}', [DoctorController::class, 'delete_doctor']);



// Nurse Controller
// create
Route::get('/nurses/create', [NurseController::class, 'create_nurse']);
// store
Route::post('/nurses/store', [NurseController::class, 'store_nurse']);
// edit
Route::get('/nurses/edit/{id}', [NurseController::class, 'edit_nurse']);
// update
Route::put('/nurses/update/{id}', [NurseController::class, 'update_nurse']);
// delete
Route::delete('/nurses/delete/{id}', [NurseController::class, 'delete_nurse']);



// Patient Controller
// create
Route::get('/patients/create', [PatientController::class, 'create_patient']);
// store
Route::post('/patients/store', [PatientController::class, 'store_patient']);
// edit
Route::get('/patients/edit/{id}', [PatientController::class, 'edit_patient']);
// update
Route::put('/patients/update/{id}', [PatientController::class, 'update_patient']);
// delete
Route::delete('/patients/delete/{id}', [PatientController::class, 'delete_patient']);



// Appointment Controller
// creates
Route::get('/appointments/create', [AppointmentController::class, 'create_appointment']);
// store
Route::post('/appointments/store', [AppointmentController::class, 'store_appointment']);
// edit
Route::get('/appointments/edit/{id}', [AppointmentController::class, 'edit_appointment']);
// update
Route::put('/appointments/update/{id}', [AppointmentController::class, 'update_appointment']);
// delete
Route::delete('/appointments/delete/{id}', [AppointmentController::class, 'delete_appointment']);



// Emergency Controller
// create
Route::get('/emergencies/create', [EmergencyController::class, 'create_emergency']);
// store
Route::post('/emergencies/store', [EmergencyController::class, 'store_emergency']);
// edit
Route::get('/emergencies/edit/{id}', [EmergencyController::class, 'edit_emergency']);
// update
Route::put('/emergencies/update/{id}', [EmergencyController::class, 'update_emergency']);
// delete
Route::delete('/emergencies/delete/{id}', [EmergencyController::class, 'delete_emergency']);



// Medical History Controller
// create
Route::get('/medical_histories/create', [MedicalHistoryController::class, 'create_medical_history']);
// store
Route::post('/medical_histories/store', [MedicalHistoryController::class, 'store_medical_history']);
// edit
Route::get('/medical_histories/edit/{id}', [MedicalHistoryController::class, 'edit_medical_history']);
// update
Route::put('/medical_histories/update/{id}', [MedicalHistoryController::class, 'update_medical_history']);
// delete
Route::delete('/medical_histories/delete/{id}', [MedicalHistoryController::class, 'delete_medical_history']);



// Room Controller
// create
Route::get('/rooms/create', [RoomController::class, 'create_room']);
// store
Route::post('/rooms/store', [RoomController::class, 'store_room']);
// edit
Route::get('/rooms/edit/{id}', [RoomController::class, 'edit_room']);
// update
Route::put('/rooms/update/{id}', [RoomController::class, 'update_room']);
// delete
Route::delete('/rooms/delete/{id}', [RoomController::class, 'delete_room']);


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
