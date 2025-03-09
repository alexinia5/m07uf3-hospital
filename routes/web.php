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
Route::get('/create', [DoctorController::class, 'create_doctor']);
// store
Route::post('/store', [DoctorController::class, 'store_doctor']);
// edit
Route::get('/edit/{id}', [DoctorController::class, 'edit_doctor']);
// update
Route::put('/update/{id}', [DoctorController::class, 'update_doctor']);
// delete
Route::delete('/delete/{id}', [DoctorController::class, 'delete_doctor']);



// Nurse Controller
// create
Route::get('/create', [NurseController::class, 'create_nurse']);
// store
Route::post('/store', [NurseController::class, 'store_nurse']);
// edit
Route::get('/edit/{id}', [NurseController::class, 'edit_nurse']);
// update
Route::put('/update/{id}', [NurseController::class, 'update_nurse']);
// delete
Route::delete('/delete/{id}', [NurseController::class, 'delete_nurse']);



// Patient Controller
// create
Route::get('/create', [PatientController::class, 'create_patient']);
// store
Route::post('/store', [PatientController::class, 'store_patient']);
// edit
Route::get('/edit/{id}', [PatientController::class, 'edit_patient']);
// update
Route::put('/update/{id}', [PatientController::class, 'update_patient']);
// delete
Route::delete('/delete/{id}', [PatientController::class, 'delete_patient']);



// Appointment Controller
// creates
Route::get('/create', [AppointmentController::class, 'create_appointment']);
// store
Route::post('/store', [AppointmentController::class, 'store_appointment']);
// edit
Route::get('/edit/{id}', [AppointmentController::class, 'edit_appointment']);
// update
Route::put('/update/{id}', [AppointmentController::class, 'update_appointment']);
// delete
Route::delete('/delete/{id}', [AppointmentController::class, 'delete_appointment']);



// Emergency Controller
// create
Route::get('/create', [EmergencyController::class, 'create_emergency']);
// store
Route::post('/store', [EmergencyController::class, 'store_emergency']);
// edit
Route::get('/edit/{id}', [EmergencyController::class, 'edit_emergency']);
// update
Route::put('/update/{id}', [EmergencyController::class, 'update_emergency']);
// delete
Route::delete('/delete/{id}', [EmergencyController::class, 'delete_emergency']);



// Medical History Controller
// create
Route::get('/create', [MedicalHistoryController::class, 'create_medical_history']);
// store
Route::post('/store', [MedicalHistoryController::class, 'store_medical_history']);
// edit
Route::get('/edit/{id}', [MedicalHistoryController::class, 'edit_medical_history']);
// update
Route::put('/update/{id}', [MedicalHistoryController::class, 'update_medical_history']);
// delete
Route::delete('/delete/{id}', [MedicalHistoryController::class, 'delete_medical_history']);



// Room Controller
// create
Route::get('/create', [RoomController::class, 'create_room']);
// store
Route::post('/store', [RoomController::class, 'store_room']);
// edit
Route::get('/edit/{id}', [RoomController::class, 'edit_room']);
// update
Route::put('/update/{id}', [RoomController::class, 'update_room']);
// delete
Route::delete('/delete/{id}', [RoomController::class, 'delete_room']);


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
