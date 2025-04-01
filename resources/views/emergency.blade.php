<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emergency Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8 max-sm:p-4 max-sm:flex-col sm:p-4 sm:gap-4">
        <x-navbar.navbar></x-navbar.navbar>
        <main class="flex flex-col gap-2 w-full bg-slate-200 p-6 rounded-xl border border-neutral-200">
            <div class="searcher-btn inline-flex items-center justify-between">
                <x-search.search></x-search.search>
                <div>
                    <a href="/emergencies/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Create</a>
                </div>
            </div>
            <div class="table-pagination w-full h-full flex flex-col items-start gap-6">
                <x-table.table :dataRow="$emergencies" :dataColumn="['ID', 'Date', 'Level', 'Diagnosis', 'Floor Number', 'Doctor', 'Nurse', 'Patient', 'Actions']"
                :table="'emergencies'"/>
            </div>
        </main>
    </div>
</body>
</html>