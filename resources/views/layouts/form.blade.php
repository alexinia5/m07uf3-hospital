<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8">
        <header>
            <nav class="bg-sky-700 w-20 h-full rounded-2xl p-5 flex flex-col items-center gap-32
                max-sm:w-full max-sm:h-8 max-sm:flex-row max-sm:gap-3">
                <ul class="flex flex-col items-center justify-center gap-10
                    max-sm:flex-row max-sm:items-start max-sm:gap-5 max-sm:justify-start max-sm:p-3">
                    <li><a href="/">
                        <img src="img/patient.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/medicalhistories">
                        <img src="img/history.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/doctors">
                        <img src="img/doctor.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/specialties">
                        <img src="img/spec.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/nurses">
                        <img src="img/nurse.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/appointments">
                        <img src="img/appo.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/emergencies">
                        <img src="img/emer.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                    <li><a href="/rooms">
                        <img src="img/room.png" class="w-11 h-10 max-sm:w-8 max-sm:h-8 sm:w-11 sm:h-10 lg:w-11 lg:h-10" alt=""/>
                    </a></li>
                </ul>
            </nav>
        </header>
        <main class="w-full">
            @if ($errors->any())
                <div class="bg-red-100 px-6 py-4 mx-2 my-4 rounded-md text-lg flex flex-col items-start mx-auto max-w-lg absolute z-10 left-52">
                    <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5">
                        <path fill="currentColor"
                        d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                        </path>
                    </svg>
                    <span class="text-red-800 font-semibold pl-6">Cannot create</span>
                    <ul class="flex flex-col">
                    @foreach ($errors->all() as $error)
                        <li class="block sm:inline text-red-600 pl-6">{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>