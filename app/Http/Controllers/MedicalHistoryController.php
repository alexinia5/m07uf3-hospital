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

        return redirect()->route('medical_history')->with('success', 'Medical history created correctly.');
    }

    // edit
    public function edit_medical_history($id) {
        $medical_history=MedicalHistory::findOrFail($id);
        return view('edit_medical_history', ['medical_history' => $medical_history]);
    }

    // update
    public function update_medical_history(Request $request, MedicalHistory $medical_history) {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'diagnosis' => 'required|string|max:50',
            'treatment' => 'required|string|max:50',
        ]);

        $medical_history = MedicalHistory::update($validatedData);

        return redirect()->route('medical_history', $medical_history)->with('success', 'Medical history updated correctly.');
    }

    // delete
    function delete_medical_history($id) {
        $medical_history = MedicalHistory::destroy($id);
        return view('medical_history', ['medical_history' => $medical_history]);
    }
}
