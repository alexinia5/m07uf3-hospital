<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // create
    function create_room() {
        return view('create_room');
    }

    // store
    function store_room(Request $request) {
        $validatedData = $request->validate([
            'availability' => 'required|string|max:2',
            'date_admission' => 'required|date',
            'floor_number' => 'required|string|max:20',
        ]);

        Room::create($validatedData);

        return redirect()->route('room')->with('success', 'Room created correctly.');
       
    }

    // edit
    public function edit_room($id) {
        $room=Room::findOrFail($id);
        return view('edit_room', ['room' => $room]);
    }

    // update
    public function update_room(Request $request, Room $room) {
        $validatedData = $request->validate([
            'availability' => 'required|string|max:2',
            'date_admission' => 'required|date',
            'floor_number' => 'required|string|max:20',
        ]);

        $room = Room::update($validatedData);

        return redirect()->route('room', $room)->with('success', 'Room updated correctly.');
    }

    // delete
    function delete_room($id) {
        $room = Room::destroy($id);
        return view('room', ['room' => $room]);
    }
}
