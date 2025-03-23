<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nurse;

class NurseController extends Controller
{
    // create
    function create_nurse() {
        return view('create_nurse');
    }

    // store
    function store_nurse(Request $request) {
        $validatedData = $request->validate([
            'dni' => 'required|unique|string|max:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|integer|max:9',
            'position' => 'required|string',
        ],
        [
            'dni.required' => 'Already exists this DNI.',
            'name.required' => 'Already exists this name.',
            'phone.required' => 'Already exists this phone.',

        ]);

        Nurse::create($validatedData);

        return redirect('/nurses')->with('success', 'Nurse created correctly.');
    }

    // edit
    public function edit_nurse($id) {
        $nurses=Nurse::findOrFail($id);
        return view('edit_nurse', compact($nurses));
    }

    // update
    public function update_nurse(Request $request, Nurse $nurses) {
        $validatedData = $request->validate([
            'dni' => 'required|unique|string|max:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|integer|max:9',
            'position' => 'required|string',
        ],
        [
            'dni.required' => 'Already exists this DNI.',
            'name.required' => 'Already exists this name.',
            'phone.required' => 'Already exists this phone.',
        ]);

        $nurses->update($validatedData);

        return view('nurse', compact('nurses'))->with('success', 'Nurse updated correctly.');
    }

    // delete
    function delete_nurse($id) {
        Nurse::destroy($id);
        return redirect('/nurses')->with('success', 'Nurse deleted.');
    }
}
