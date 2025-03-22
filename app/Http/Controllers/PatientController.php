<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    // create
    function create_patient() {
        return view('create_patient');
    }

    // store
    function store_patient(Request $request) {

        $validatedData = $request->validate([
            'dni' => 'required|unique|string|max:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|integer|max:9',
            'address' => 'required|string|max:50',
            'cp' => 'required|string|max:5',
        ]
        // [
        //     'dni.required' => 'Already exists this DNI.',
        //     'name.required' => 'Already exists this name.',
        //     'phone.required' => 'Already exists this phone.',
        );

        Patient::create($validatedData);

        return view('patient');
    }

    // edit
    public function edit_patient($id) {
        $patient=Patient::findOrFail($id);
        return view('edit_patient', ['patient' => $patient]);
    }

    // update
    public function update_patient(Request $request, Patient $patients) {
        $validatedData = $request->validate([
            'dni' => 'required|unique|string|max:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|integer|max:9',
            'address' => 'required|string|max:50',
            'cp' => 'required|string|max:5',
        ],
        [
            'dni.required' => 'Already exists this DNI.',
            'name.required' => 'Already exists this name.',
            'phone.required' => 'Already exists this phone.',
        ]);

        $patients = Patient::update($validatedData);

        return view('patient', ['patients' => $patients])->with('success', 'Patient updated correctly.');
    }

    // delete
    function delete_patient($id) {
        $patient = Patient::destroy($id);
        return view('patient', ['patient' => $patient]);
    }
}
