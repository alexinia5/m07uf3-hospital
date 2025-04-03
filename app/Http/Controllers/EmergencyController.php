<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Emergency;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
        return redirect('/emergencies')->with('success', 'Emergency deleted correctly.');
    }

    // count sever cases
    public function count_severs() {
        $sql = "SELECT count(*) FROM emergencies WHERE level = 'Sever'";
        $sever = DB::select($sql);
        $total_sever = $sever[0];
        return view('emergency', ['total_sever' => $total_sever]);
    }

    // count moderates cases
    public function count_moderates() {
        $sql = "SELECT count(*) FROM emergencies WHERE level = 'Moderate'";
        $moderate = DB::select($sql);
        $total_moderate = $moderate;
        return view('emergency', ['total_moderate' => $total_moderate]);
    }

    // count milds cases
    public function count_milds() {
        $sql = "SELECT count(*) FROM emergencies WHERE level = 'Mild'";
        $mild = DB::select($sql);
        $total_mild = $mild;
        return view('emergency', ['total_mild' => $total_mild]);
    }

    // count lows cases
    public function count_lows() {
        $sql = "SELECT count(*) FROM emergencies WHERE level = 'Low'";
        $low = DB::select($sql);
        $total_low = $low;
        return view('emergency', ['total_low' => $total_low]);
    }
}
