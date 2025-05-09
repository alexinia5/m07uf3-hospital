<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PatientController extends Controller
{
    // create
    function create_patient() {
        return view('create_patient');
    }

    // store
    function store_patient(Request $request) {
        $validator = Validator::make($request->all(), [
            'dni' => 'required|string:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|digits:9',
            'address' => 'required|string|max:50',
            'cp' => 'required|string|max:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Patient::create($validator->validated());

        return redirect('/')->with('success', 'Patient created correctly.');
    }

    // edit
    public function edit_patient($id) {
        $patients=Patient::findOrFail($id);
        return view('edit_patient', compact('patients'));
    }

    // update
    public function update_patient(Request $request, $id) {
        $patients = Patient::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'dni' => 'required|string|unique:patients,dni|max:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|digits:9',
            'address' => 'required|string|max:50',
            'cp' => 'required|string|max:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $patients->update($validator->validated());
        return view('patient', ['patients' => $patients]);
    }

    // delete
    function delete_patient($id) {
        Patient::destroy($id);
        return redirect('/')->with('success', 'Patient deleted correctly.');
    }
}
