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
            @if (session('success'))
                <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 absolute z-20">
                    <div class="flex items-center justify-center w-12 bg-emerald-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                        </svg>
                    </div>
                
                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success!</span>
                            <p class="text-sm text-gray-600 dark:text-gray-200">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                {{ session()->forget('success') }}
            @endif
            @if ($errors->any())
                <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 absolute z-20">
                    <div class="flex items-center justify-center w-12 bg-red-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                        </svg>
                    </div>
                
                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-red-500 dark:text-red-400">Error!</span>
                            @foreach ($errors->all() as $error)
                                <p class="text-sm text-gray-600 dark:text-gray-200">
                                    {{ $error }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>