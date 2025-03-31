<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RoomController extends Controller
{
    // create
    function create_room() {
        return view('create_room');
    }

    // store
    function store_room(Request $request) {
        $validator = Validator::make($request->all(), [
            'availability' => 'required|string|max:3',
            'date_admission' => 'required|date',
            'floor_num' => 'required|string|max:20',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Room::create($validator->validated());

        return redirect('/rooms')->with('success', 'Room created correctly.');
       
    }

    // edit
    public function edit_room($id) {
        $rooms=Room::findOrFail($id);
        return view('edit_room', ['rooms' => $rooms]);
    }

    // update
    public function update_room(Request $request, $id) {
        $rooms = Room::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'availability' => 'required|string|max:3',
            'date_admission' => 'required|date',
            'floor_num' => 'required|string|max:20',
            'patient_id' => 'required|exists:patients,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $rooms->update($validator->validated());

        return view('room', ['rooms' => $rooms] );
    }

    // delete
    function delete_room($id) {
        Room::destroy($id);
        return redirect('/rooms')->with('success', 'Room deleted.');
    }
}
