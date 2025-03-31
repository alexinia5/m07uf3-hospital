<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SpecialtyController extends Controller
{
    // create
    function create_specialty() {
        return view('create_specialty');
    }

    // store
    function store_specialty(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'location_departament' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Specialty::create($validator->validated());

        return redirect('/specialties')->with('success', 'Specialty created correctly.');
       
    }

    // edit
    public function edit_specialty($id) {
        $specialties=Specialty::findOrFail($id);
        return view('edit_specialty', ['specialties' => $specialties]);
    }

    // update
    public function update_specialty(Request $request, $id) {
        $specialties = Specialty::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'location_departament' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $specialties->update($validator->validated());

        return view('specialty', ['specialties' => $specialties]);
    }

    // delete
    function delete_specialty($id) {
        Specialty::destroy($id);
        return redirect('/specialties')->with('success', 'Specialty deleted.');
    }
}
