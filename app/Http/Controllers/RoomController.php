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
            'availability' => 'required|string|max:2',
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
        return view('edit_room', compact($rooms));
    }

    // update
    public function update_room(Request $request, Room $rooms) {
        $validatedData = $request->validate([
            'availability' => 'required|string|max:2',
            'date_admission' => 'required|date',
            'floor_number' => 'required|string|max:20',
        ]);

        $rooms->update($validatedData);

        return view('room', compact('rooms'))->with('success', 'Room updated correctly.');
    }

    // delete
    function delete_room($id) {
        Room::destroy($id);
        return redirect('/rooms')->with('success', 'Room deleted.');
    }
}
