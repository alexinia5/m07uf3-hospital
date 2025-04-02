<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0">
    <div class="container p-9 w-full h-screen flex flex-row gap-8 max-sm:p-4 max-sm:flex-col sm:p-4 sm:gap-4">
      <x-navbar.navbar></x-navbar.navbar>
        {{-- @role('patient') --}}
        <main class="flex flex-col gap-2 w-full bg-slate-200 p-6 rounded-xl border border-neutral-200">
            <div class="searcher-btn inline-flex items-center justify-between">
                <x-search.search></x-search.search>
                <div>
                    <a href="/patients/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Create</a>
                </div>
            </div>
            <div class="bg-white p-3 h-72 inline-flex gap-5 rounded-xl" style="background-image: url(https://img.freepik.com/free-vector/doctor-examining-patient-clinic-illustrated_23-2148856559.jpg); background-size: contain; background-repeat: no-repeat; background-position-x: right;">
                <h1 class="font-semibold text-blue-950 text-xl">Patients Management</h1>
                <p>Manage patient information by updating personal details and contact information. Ensure all records are current, organize schedules, and maintain smooth coordination among the healthcare team.</p>
            </div>
            <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
                <x-table.table :dataRow="$patients" :dataColumn="['ID', 'DNI', 'Gender', 'Name', 'Phone', 'Address', 'Zip Code', 'Actions']"
                :table="'patients'"/>
            </div>
        </main>
        {{-- @endrole --}}
    </div>
</body>
</html>