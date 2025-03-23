<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    // create
    function create_medical_history() {
        return view('create_medical_history');
    }

    // store
    function store_medical_history(Request $request) {  
        $validatedData = $request->validate([
            'date' => 'required|date',
            'diagnosis' => 'required|string|max:50',
            'treatment' => 'required|string|max:50',
        ]);

        MedicalHistory::create($validatedData);

        return redirect('/medicalhistories')->with('success', 'Medical history created correctly.');
    }

    // edit
    public function edit_medical_history($id) {
        $medical_histories=MedicalHistory::findOrFail($id);
        return view('edit_medical_history', compact('medical_histories'));
    }

    // update
    public function update_medical_history(Request $request, MedicalHistory $medical_histories) {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'diagnosis' => 'required|string|max:50',
            'treatment' => 'required|string|max:50',
        ]);

        $medical_histories = MedicalHistory::update($validatedData);

        return view('medical_histories', compact('medical_histories'))->with('success', 'Medical history updated correctly.');
    }

    // delete
    function delete_medical_history($id) {
        $medical_history = MedicalHistory::destroy($id);
        return redirect('/medicalhistories')->with('success', 'Medical history deleted.');
    }
}
