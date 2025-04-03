<!-- Patient Template -->
@extends('layouts.app')

@section('title', 'Patients Management')

@section('content')
    <div class="bg-white p-4 h-60 inline-flex justify-between rounded-xl" style="background-color: #f3f9ff;">
        <div class="flex flex-col gap-6 items-start ">
            <h1 class="font-semibold text-indigo-900 text-3xl">Patients Management</h1>
            <p class="text-lg text-blue-950" style="width: 570px;">Manage patient information by updating personal details and contact information. Ensure all records are current, organize schedules, and maintain smooth coordination among the healthcare team.</p>
            <a href="/doctors/create" class="bg-indigo-500 hover:bg-indigo-300 text-white font-semibold py-2 px-4 rounded-full w-36">+ Add patient</a>
        </div>
        <img class="rounded-2xl pr-5 w-75" src="https://img.freepik.com/free-vector/hand-drawn-patient-taking-medical-examination_23-2148842994.jpg?semt=ais_hybrid" alt="">
    </div>
    <div class="searcher-btn inline-flex items-center justify-between">
        <x-search.search></x-search.search>
    </div>
    <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
        <x-table.table :dataRow="$patients" :dataColumn="['ID', 'DNI', 'Gender', 'Name', 'Phone', 'Address', 'Zip Code', 'Actions']"
        :table="'patients'"/>
    </div>
@endsection