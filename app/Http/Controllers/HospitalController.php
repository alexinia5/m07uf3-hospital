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

class HospitalController extends Controller
{
    // hospital dashboard controller
    // doctors section
    function doctors() {
        $doctors = Doctor::orderby('id', 'desc')->paginate(5);
        return view('doctor', compact('doctors'));
    }

    // nurses section
    function nurses() {
        $nurses = Nurse::orderby('id', 'desc')->paginate(5);
        return view('nurse', compact('nurses'));
    }

    // patients section
    function patients() {
        $patients = Patient::orderby('id', 'desc')->paginate(5);
        return view('patient', compact('patients'));
    }

    // appointments section
    function appointments() {
        $appointments = Appointment::orderby('id', 'desc')->paginate(6);
        return view('appointment', compact('appointments'));
    }

    // emergencies section
    function emergencies() {
        $emergencies = Emergency::orderby('id', 'desc')->paginate(7);
        return view('emergency', compact('emergencies'));
    }

    // specialties section
    function specialties() {
        $specialties = Specialty::orderby('id', 'desc')->paginate(7);
        return view('specialty', compact('specialties'));
    }

    // medical history section
    function medicalhistories() {
        $medical_histories = MedicalHistory::orderby('id', 'desc')->paginate(7);
        return view('medical_histories', compact('medical_histories'));
    }

    // rooms section
    function rooms() {
        $rooms = Room::orderby('id', 'desc')->paginate(8);
        return view('room', compact('rooms'));
    }
}