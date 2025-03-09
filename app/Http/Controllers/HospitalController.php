<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    // hospital dashboard controller
    //main page
    function index() {
        return view('index');
    }

    // doctors section
    function doctors() {
        return view('doctors');
    }

    // nurses section
    function nurses() {
        return view('nurses');
    }

    // patients section
    function patients() {
        return view('patients');
    }

    // appointments section
    function appointments() {
        return view('appointments');
    }

    // emergencies section
    function emergencies() {
        return view('emergencies');
    }

    // specialties section
    function specialties() {
        return view('specialties');
    }

    // medical history section
    function medical_histories() {
        return view('medical_histories');
    }

    // rooms section
    function rooms() {
        return view('rooms');
    }
}