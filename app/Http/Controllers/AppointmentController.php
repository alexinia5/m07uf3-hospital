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

        return redirect()->route('appointment')->with('success', 'Appointment created correctly.');
    }

    // edit
    public function edit_appointment($id) {
        $appointment=Appointment::findOrFail($id);
        return view('edit_appointment', ['appointment' => $appointment]);
    }

    // update
    public function update_appointment(Request $request, Appointment $appointment) {
        $validatedData = $request->validate([
            'date_hour' => 'required|date',
            'status' => 'required|string|max:15',
            'motive' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'observations' => 'string|max:20',
        ]);

        $appointment = Appointment::update($validatedData);

        return redirect()->route('appointment', $appointment)->with('success', 'Appointment updated correctly.');
    }

    // delete
    function delete_appointment($id) {
        $appointment = Appointment::destroy($id);
        return view('appointment', ['appointment' => $appointment]);
    }
}
