<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Emergency;
use Illuminate\Support\Facades\Validator;


class EmergencyController extends Controller
{
    // create
    function create_emergency() {
        return view('create_emergency');
    }

    // store
    function store_emergency(Request $request) {
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'level' => 'required|string|max:15',
            'diagnosis' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'doctor_id' => 'required|exists:doctors,id',
            'nurse_id' => 'required|exists:nurses,id',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Emergency::create($validator->validated());

        return redirect('emergencies')->with('success', 'Emergency created correctly.');
    }

    // read
    function read_emergency() {
        $emergency = Emergency::distinct()->get();
        return view('emergency', ['emergency' => $emergency]);
    }

    public function edit($id) {
        $emergencies=Emergency::findOrFail($id);
        return view('edit_emergency', ['emergencies' => $emergencies]);
    }

    // update
    public function update_emergency(Request $request, $id) {
        $emergencies = Emergency::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'level' => 'required|string|max:15',
            'diagnosis' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
            'doctor_id' => 'required|exists:doctors,id',
            'nurse_id' => 'required|exists:nurses,id',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $emergencies->update($validator->validated());

        return view('emergency', ['emergencies' => $emergencies]);
    }

    // delete
    function delete_emergency($id) {
        Emergency::destroy($id);
        return redirect('/emergencies')->with('success', 'Emergency deleted.');
    }
}
