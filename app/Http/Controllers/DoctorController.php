<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;


class DoctorController extends Controller
{
    // create
    function create_doctor() {
        return view('create_doctor');
    }

    // store
    function store_doctor(Request $request) {
        $validator = Validator::make($request->all(), [
            'dni' => 'required|string:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|digits:9',
            'position' => 'required|string',
            'specialty_id' => 'required|exists:specialties,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Doctor::create($validator->validated());
        
        return redirect('/doctors')->with('success', 'Doctor created correctly.');
    }

    // edit
    public function edit_doctor($id) {
        $doctors=Doctor::findOrFail($id);
        return view('edit_doctor', ['doctor' => $doctors]);
    }

    // update
    public function update_doctor(Request $request, $id) {
        $doctors = Doctor::findOrFail($id);
        // dd($doctor);
    
        $validator = Validator::make($request->all(), [
            'dni' => 'required|string|unique:doctors,dni|size:8',
            'gender' => 'required|string',
            'name' => 'required|string|max:50',
            'phone' => 'required|digits:9',
            'position' => 'required|string',
            'specialty_id' => 'required|exists:specialties,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $doctors->update($validator->validated());
        
        return view('doctor', ['doctors' => $doctors]);
    }

    // delete
    function delete_doctor($id) {
        Doctor::destroy($id);
        return redirect('/doctors')->with('success', 'Doctor deleted correctly.');
    }
}
