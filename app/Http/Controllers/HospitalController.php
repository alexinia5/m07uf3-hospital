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
        // $date = Appointment::select('date_hour');
        return view('appointment', compact('appointments'));
    }

    // emergencies section
    function emergencies() {
        $emergencies = Emergency::orderby('level', 'desc')->paginate(7);
        $total_sever = Emergency::where('level', 'Sever')->count();
        $total_moderate = Emergency::where('level', 'Moderate')->count();
        $total_mild = Emergency::where('level', 'Mild')->count();
        $total_low = Emergency::where('level', 'Low')->count();
        
        return view('emergency', compact(
            'emergencies',
            'total_sever',
            'total_moderate',
            'total_mild',
            'total_low',
        ));
    }

    // specialties section
    function specialties() {
        $specialties = Specialty::orderby('id', 'desc')->paginate(10);
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
        $total_available = Room::where('availability', 'Yes')->count();
        $total_not_available = Room::where('availability', 'No')->count();
       
        return view('room', compact(
            'rooms',
            'total_available',
            'total_not_available'
        ));
    }
}