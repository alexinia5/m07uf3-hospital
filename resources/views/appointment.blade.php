<!-- Appointment Template -->
@extends('layouts.app')

@section('title', 'Appointments Management')

@section('content')
    <div class="searcher-btn flex flex-col gap-5">
        <div class="searcher-btn inline-flex items-center justify-between">
            <x-search.search></x-search.search>
        </div>
        <div class="inline-flex justify-between">
            <div class="bg-white p-3 inline-flex gap-5 min-w-96 h-40 rounded-xl" style="background-image: url(https://unblast.com/wp-content/uploads/2020/04/Female-Doctor-Vector-Illustration.jpg); background-size: contain; background-repeat: no-repeat; background-position-x: right;">
                <div class="flex flex-col gap-4">
                    <h1 class="font-semibold text-2xl w-56 text-blue-950">Add appointment in your schedule now</h1>
                    <a href="/appointments/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 w-48 rounded-full">+ Add appointment</a>
                </div>
                <span class="w-48"></span>
            </div>
            <div class="calendar h-full">
                <x-calendar.calendar></x-calendar.calendar>
            </div>
        </div>
    </div>
    <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
        <x-table.table :dataRow="$appointments"
        :dataColumn="['ID', 'Date hour', 'Motive', 'Floor number', 'Observations', 'Doctor', 'Nurse', 'Patient', 'Actions']"
        :table="'appointments'"/>
    </div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            let clickDates = document.querySelectorAll('.click-date');
            let date;

            for (let date of clickDates) {
                date.addEventListener('click', (e) => {
                    dateClicked = e.target;

                    if (dateClicked == {{ $date_hour }}) {
                        console.log(dateClicked)
                    }
                })
            }
        });
    </script>
@endsection