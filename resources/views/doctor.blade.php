<!-- Doctor Template -->
@extends('layouts.app')

@section('title', 'Doctors Management')

@section('content')
    <div class="bg-white p-4 h-60 inline-flex justify-between rounded-xl" style="background-color: #FAFBFF;">
        <div class="flex flex-col gap-6">
            <h1 class="font-semibold text-sky-700 text-3xl">Doctors Management</h1>
            <p class="text-lg text-blue-950" style="width: 570px;">Effortlessly manage doctors by keeping track of their specialties, schedules, and availability. Update profiles, organize shifts, and ensure smooth coordination within the healthcare team.</p>
            <a href="/doctors/create" class="bg-sky-600 hover:bg-sky-500 text-white font-semibold py-2 px-4 rounded-full w-36">+ Add doctor</a>
        </div>
        <img class="rounded-xl pr-5" src="https://media.istockphoto.com/id/1290139310/vector/vector-of-a-medical-staff-group-of-doctors-and-nurses.jpg?s=612x612&w=0&k=20&c=cYvcXpTZhDWtfd0uZu6vucPOdHP0Zr3I1La0uKsb4rg=" alt="">
    </div>
    <div class="searcher-btn inline-flex items-center justify-between">
        <x-search.search></x-search.search>
    </div>
    <div class="table-pagination w-full flex flex-col items-start gap-6">
        <x-table.table :dataRow="$doctors" :dataColumn="['ID', 'DNI', 'Name', 'Gender', 'Phone', 'Position', 'Specialty', 'Actions']"
        :table="'doctors'"/>
    </div>
@endsection