<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0">
    <div class="container p-9 w-full h-screen flex flex-row gap-8 max-sm:p-4 max-sm:flex-col sm:p-4 sm:gap-4">
        <x-navbar.navbar></x-navbar.navbar>
        <main class="flex flex-col gap-5 w-full bg-slate-200 p-3 rounded-xl border border-slate-200">
            <div class="searcher-btn flex flex-col gap-5">
                <x-search.search></x-search.search>
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
        </main>
    </div>
</body>
</html>