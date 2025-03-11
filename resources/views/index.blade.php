<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8">
        <nav class="bg-blue-700 w-28 rounded-2xl p-5 flex flex-col items-center gap-32">
            <a href="/" class="font-semibold text-white">Hospital</a>
            <ul class="flex flex-col items-center gap-5">
                <li><a href="/patients" class="text-white" >Patients</a></li>
                <li><a href="/doctors" class="text-white">Doctors</a></li>
                <li><a href="/nurses" class="text-white">Nurses</a></li>
                <li><a href="/appointments" class="text-white">Appointments</a></li>
                <li><a href="/emergencies" class="text-white">Emergencies</a></li>
                <li><a href="/rooms" class="text-white">Rooms</a></li>
            </ul>
        </nav>
        <main class="flex flex-col gap-6 w-full">
            <div class="search-conf">
                <input type="text"placeholder="Search for patients, events..." class="p-3 rounded-2xl w-full">
                <div class="icons"></div>
            </div>
            <div class="h-44 bg-blue-600 rounded-2xl"></div>
            <div class="dashboard"></div>
            <div class="shecdule-plans"></div>
        </main>
        <aside class="w-96 flex flex-col gap-6">
            <div class="bg-slate-200 h-48 rounded-2xl"></div>
            <div class="bg-slate-200 h-full rounded-2xl"></div>
        </aside>
    </div>
</body>
</html>