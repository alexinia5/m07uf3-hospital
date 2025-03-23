<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // create
    function create_appointment() {
        return view('create_appointment');
    }

    // store
    function store_appointment(Request $request) {
        $validatedData = $request->validate([
            'date_hour' => 'required|date',
            'status' => 'required|string|max:15',
            'motive' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'observations' => 'string|max:20',
        ]);

        Appointment::create($validatedData);

        return redirect('/appointments')->with('success', 'Patient created.');
    }

    // edit
    public function edit_appointment($id) {
        $appointment=Appointment::findOrFail($id);
        return view('edit_appointment', ['appointment' => $appointment]);
    }

    // update
    public function update_appointment(Request $request, Appointment $appointments) {
        $validatedData = $request->validate([
            'date_hour' => 'required|date',
            'status' => 'required|string|max:15',
            'motive' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'observations' => 'string|max:20',
        ]);

        $appointments->update($validatedData);

        return view('appointment', compact('appointments'))->with('success', 'Appointment updated correctly.');
    }

    // delete
    function delete_appointment($id) {
        Appointment::destroy($id);
        return redirect('/appointments')->with('success', 'Appointment deleted.');
    }
}
