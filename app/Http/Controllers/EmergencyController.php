<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Emergency;

class EmergencyController extends Controller
{
    // create
    function create_emergency() {
        return view('create_emergency');
    }

    // store
    function store_emergency(Request $request) {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'level' => 'required|string|max:15',
            'diagnosis' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
        ]);

        Emergency::create($validatedData);

        return redirect()->route('emergency')->with('success', 'Emergency created correctly.');
    }

    // read
    function read_emergency() {
        $emergency = Emergency::distinct()->get();
        return view('emergency', ['emergency' => $emergency]);
    }

    public function edit($id) {
        $emergency=Emergency::findOrFail($id);
        return view('edit_emergency', ['emergency' => $emergency]);
    }

    // update
    public function update_emergency(Request $request, Emergency $emergency) {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'level' => 'required|string|max:15',
            'diagnosis' => 'required|string|max:50',
            'floor_num' => 'required|string|max:20',
        ]);

        $emergency = Emergency::update($validatedData);

        return redirect()->route('emergency', $emergency)->with('success', 'Emergency updated correctly.');
    }

    // delete
    function delete_emergency($id) {
        $emergency = Emergency::destroy($id);
        return view('emergency', ['emergency' => $emergency]);
    }
}
