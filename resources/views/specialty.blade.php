<!-- Room Template -->
@extends('layouts.app')

@section('title', 'Specialties Management')

@section('content')
    <div class="searcher-btn inline-flex items-center justify-between">
        <div>
            <a href="/specialties/create" class="bg-sky-700 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded">+ Add specialty</a>
        </div>
    </div>
    <div class="inline-flex flex-wrap justify-start items-start">
        <x-card.card :dataRow="$specialties"></x-card.card>
    </div>
@endsection