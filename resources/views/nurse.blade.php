<!-- Nurse Template -->
@extends('layouts.app')

@section('title', 'Nurses Management')

@section('content')
    <div class="bg-white p-4 h-60 inline-flex justify-between rounded-xl" style="background-color: #f6fafd;">
        <div class="flex flex-col gap-6 items-start ">
            <h1 class="font-semibold text-sky-600 text-3xl">Nurses Management</h1>
            <p class="text-lg text-blue-950" style="width: 570px;">Streamline nurse management by overseeing their roles, work schedules, and availability. Keep profiles up to date, arrange shifts, and ensure seamless teamwork in the healthcare facility.</p>
            <a href="/doctors/create" class="bg-sky-500 hover:bg-indigo-300 text-white font-semibold py-2 px-4 rounded-full w-36">+ Add nurse</a>
        </div>
        <img class="rounded-2xl pr-5 w-75" src="https://img.freepik.com/premium-vector/group-professionals-doctors-hospital_24911-52459.jpg" alt="">
    </div>
    <div class="searcher-btn inline-flex items-center justify-between">
        <x-search.search></x-search.search>
    </div>
    <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
    <x-table.table :dataRow="$nurses" :dataColumn="['ID', 'DNI', 'Name', 'Gender', 'Phone', 'Actions']"
    :table="'nurses'"/>
    </div>
@endsection

