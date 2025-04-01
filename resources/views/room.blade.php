<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0">
    <div class="container p-9 w-full h-screen flex flex-row gap-8 max-sm:p-4 max-sm:flex-col sm:p-4 sm:gap-4">
        <x-navbar.navbar></x-navbar.navbar>

        <main class="flex flex-col gap-2 w-full bg-slate-200 p-6 rounded-xl border border-neutral-200">
            <div class="searcher-btn inline-flex items-start justify-between">
                <div class="inline-flex gap-3">
                    <div class="bg-white border border-neutral-300 p-4 w-52 rounded-xl">
                        <h3 class="text-base text-gray-600">Rooms Available</h3>
                        <h1 class="font-semibold text-2xl">4</h1>
                        <p class="font-light text-sm">Last update: 1 week</p>
                    </div>
                    <div class="bg-white border border-neutral-300 p-4 w-52 rounded-xl">
                        <h3 class="text-base text-gray-600">Rooms Not Available</h3>
                        <h1 class="font-semibold text-2xl">4</h1>
                        <p class="font-light text-sm">Last update: 1 week</p>
                    </div>
                </div>
                <div class="bg-white p-3 inline-flex gap-5 min-w-96 h-28 rounded-xl" style="background-image: url(https://img.freepik.com/free-vector/patient-lying-bed-intensive-therapy_74855-7774.jpg); background-size: contain; background-repeat: no-repeat; background-position-x: right;">
                    <div class="flex flex-col gap-4">
                        <h1 class="font-semibold text-xl">Add a new room</h1>
                        <a href="/rooms/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">+ Add room</a>
                    </div>
                    <span class="w-60"></span>
                </div>
            </div>
            <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
                <x-table.table :dataRow="$rooms" :dataColumn="['ID', 'Availability', 'Date Admission', 'Floor number', 'Patient', 'Actions']"
                :table="'rooms'"/>
            </div>
        </main>
    </div>
</body>
</html>