<!-- Emergency Template -->
@extends('layouts.app')

@section('title', 'Medical Histories Management')

@section('content')
    <div class="searcher-btn inline-flex items-center justify-between">
        <x-search.search></x-search.search>
        <div>
            <a href="/medicalhistories/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Create</a>
        </div>
    </div>
    <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
        <x-table.table :dataRow="$medical_histories" :dataColumn="['ID', 'Date', 'Diagnosis', 'Treatment', 'Patient', 'Actions']"
        :table="'medicalhistories'"/>
    </div>
@endsection