<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    // create
    function create_appointment() {
        return view('create_appointment');
    }

    // store
    function store_appointment(Request $request) {
        $validator = Validator::make($request->all(), [
            'date_hour' => 'required|date',
            'motive' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'observations' => 'string|max:20',
            'doctor_id' => 'required|exists:doctors,id',
            'nurse_id' => 'required|exists:nurses,id',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Appointment::create($validator->validated());

        return redirect('/appointments')->with('success', 'Appointment created correctly.');
    }

    // edit
    public function edit_appointment($id) {
        $appointment=Appointment::findOrFail($id);
        return view('edit_appointment', ['appointment' => $appointment]);
    }

    // update
    public function update_appointment(Request $request, $id) {
        $appointments = Appointment::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'date_hour' => 'required|date',
            'motive' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'observations' => 'string|max:20',
            'doctor_id' => 'required|exists:doctors,id',
            'nurse_id' => 'required|exists:nurses,id',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $appointments->update($validator->validated());

        return view('appointment', ['appointments' => $appointments]);
    }

    // delete
    function delete_appointment($id) {
        Appointment::destroy($id);
        return redirect('/appointments')->with('success', 'Appointment deleted.');
    }
}
