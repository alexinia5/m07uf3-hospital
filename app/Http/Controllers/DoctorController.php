<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    // create
    function create_doctor() {
        return view('create_doctor');
    }

    // store
    function store_doctor(Request $request) {

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

        Doctor::create($validatedData);

        return redirect('/doctors')->with('success', 'Doctor created correctly.');
    }

    // edit
    public function edit_doctor($id) {
        $doctors=Doctor::findOrFail($id);
        return view('edit_doctor', compact($doctors));
    }

    // update
    public function update_doctor(Request $request, Doctor $doctors) {
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

        $doctors->update($validatedData);

        return view('doctor', compact('doctors'))->with('success', 'Doctor updated correctly.');
    }

    // delete
    function delete_doctor($id) {
        Doctor::destroy($id);
        return redirect('/doctors')->with('success', 'Doctor deleted.');
    }
}
