<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicalHistoryController extends Controller
{
    // create
    function create_medical_history() {
        return view('create_medical_history');
    }

    // store
    function store_medical_history(Request $request) {  
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'diagnosis' => 'required|string|max:50',
            'treatment' => 'required|string|max:50',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        MedicalHistory::create($validator->validated());

        return redirect('/medicalhistories')->with('success', 'Medical history created correctly.');
    }

    // edit
    public function edit_medical_history($id) {
        $medicalhistories=MedicalHistory::findOrFail($id);
        return view('edit_medical_history', ['medicalhistories' => $medicalhistories]);
    }

    // update
    public function update_medical_history(Request $request, $id) {
        $medicalhistories = MedicalHistory::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'diagnosis' => 'required|string|max:50',
            'treatment' => 'required|string|max:50',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $medicalhistories->update($validator->validated());

        return view('medical_histories', ['medicalhistories' => $medicalhistories]);
    }

    // delete
    function delete_medical_history($id) {
        $medical_history = MedicalHistory::destroy($id);
        return redirect('/medicalhistories')->with('success', 'Medical history deleted.');
    }
}
