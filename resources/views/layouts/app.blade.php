<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0">
    <div class="container p-4 w-full h-screen flex flex-row gap-8 max-sm:p-4 max-sm:flex-col sm:p-4 sm:gap-4">
        <header>
            <nav class="bg-sky-700 w-20 h-full rounded-2xl p-5 flex flex-col items-center gap-32
                max-sm:w-full max-sm:h-8 max-sm:flex-row max-sm:gap-3">
                <ul class="flex flex-col items-center justify-center gap-10
                    max-sm:flex-row max-sm:items-start max-sm:gap-5 max-sm:justify-start max-sm:p-3">
                    <li><a href="/">
                        <img src="/img/patient.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/medicalhistories">
                        <img src="/img/history.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/doctors">
                        <img src="/img/doctor.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/specialties">
                        <img src="/img/spec.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/nurses">
                        <img src="/img/nurse.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/appointments">
                        <img src="/img/appo.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/emergencies">
                        <img src="/img/emer.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/rooms">
                        <img src="/img/room.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                </ul>
            </nav>
        </header>
        <main class="flex flex-col gap-2 w-full bg-slate-200 p-4 rounded-xl border border-neutral-200">
            @yield('content')
        </main>
    </div>
</body>
</html>