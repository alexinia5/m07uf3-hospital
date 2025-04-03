<!-- Emergency Template -->
@extends('layouts.app')

@section('title', 'Emergencies Management')

@section('content')
    <div class="bg-white p-3 inline-flex gap-3 w-full h-48 rounded-xl" style="background-color: #fbfbf2;">
        <div class="flex flex-col gap-4">
            <h1 class="font-semibold text-2xl text-red-700">There is a new emergency</h1>
            <p class="text-lg text-orange-950" style="width: 700px;">The hospital emergency department provides immediate care for critical patients, ensuring a fast and efficient response with specialized staff and advanced equipment.</p>
            <a href="/rooms/create" class="bg-red-500 hover:bg-red-400 text-white font-semibold py-2 px-4 rounded-full w-44">+ Add emergency</a>
        </div>
        <img class="rounded-2xl pr-5" src="https://img.freepik.com/free-vector/emergency-ambulance-concept_23-2148539305.jpg" alt="">
    </div>
    <div class="flex flex-row gap-6">
        <div class="table-pagination w-full flex flex-col items-start gap-6">
            <x-table.emergency-data :dataRow="$emergencies"/>
        </div>
        <div class="flex flex-col gap-6">
            <div class="bg-red-200 border border-neutral-300 p-3 w-28 rounded-xl">
                <h3 class="text-lg text-red-700">Sever</h3>
                {{-- <h1 class="font-semibold text-3xl text-red-600">{{ $total_sever }}</h1> --}}
            </div>
            <div class="bg-orange-200 border border-neutral-300 p-3 w-28 rounded-xl">
                <h3 class="text-lg text-orange-800">Moderate</h3>
                {{-- <h1 class="font-semibold text-3xl text-orange-600">{{ $total_moderate }}</h1> --}}
            </div>
            <div class="bg-yellow-100 border border-neutral-300 p-3 w-28 rounded-xl">
                <h3 class="text-lg text-yellow-600">Mild</h3>
                {{-- <h1 class="font-semibold text-3xl text-yellow-400">{{ $total_mild }}</h1> --}}
            </div>
            <div class="bg-green-100 border border-neutral-300 p-3 w-28 rounded-xl">
                <h3 class="text-lg text-green-700">Low</h3>
                {{-- <h1 class="font-semibold text-3xl text-green-400">{{ $total_low }}</h1> --}}
            </div>
        </div>
    </div>
@endsection