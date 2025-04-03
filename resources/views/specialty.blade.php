<!-- Room Template -->
@extends('layouts.app')

@section('title', 'Specialties Management')

@section('content')
    <div class="searcher-btn inline-flex items-center justify-between">
        <div>
            <a href="/specialties/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Create</a>
        </div>
    </div>
    <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
        <x-table.table :dataRow="$specialties" :dataColumn="['ID', 'Name', 'Location Departament', 'Actions']"
        :table="'specialties'"/>
    </div>
@endsection