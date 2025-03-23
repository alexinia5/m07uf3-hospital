<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Emergency;
use App\Models\MedicalHistory;
use App\Models\Nurse;
use App\Models\Room;
use App\Models\Specialty;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    // hospital dashboard controller
    // doctors section
    function doctors() {
        $doctors = Doctor::paginate(8);
        return view('doctor', compact('doctors'));
    }

    // nurses section
    function nurses() {
        $nurses = Nurse::paginate(8);
        return view('nurse', compact('nurses'));
    }

    // patients section
    function patients() {
        $patients = Patient::paginate(8);
        return view('patient', compact('patients'));
    }

    // appointments section
    function appointments() {
        $appointments = Appointment::paginate(8);
        return view('appointment', compact('appointments'));
    }

    // emergencies section
    function emergencies() {
        $emergencies = Emergency::paginate(8);
        return view('emergency', compact('emergencies'));
    }

    // specialties section
    function specialties() {
        $specialties = Specialty::paginate(8);
        return view('specialty', compact('specialties'));
    }

    // medical history section
    function medicalhistories() {
        $medical_histories = MedicalHistory::paginate(7);
        return view('medical_histories', compact('medical_histories'));
    }

    // rooms section
    function rooms() {
        $rooms = Room::paginate(7);
        return view('room', compact('rooms'));
    }
}