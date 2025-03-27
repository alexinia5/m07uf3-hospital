<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Doctor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8 
    max-sm:p-4 max-sm:flex-col max-sm:gap-5">
      <x-navbar.navbar></x-navbar.navbar>
      <main class="flex flex-col items-center gap-10 w-full">
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
        <div class="bg-white w-full max-w-lg border-2 border-zinc-200 rounded-xl p-4 flex flex-col gap-6 items-center">
          <h1 class="text-2xl font-semibold">Create a doctor</h1>
          <x-forms.create-form :route="'/doctors/store'" :data="['DNI', 'Gender', 'Name', 'Phone', 'Position', 'specialty_id']"/>
        </div>
      </main>
    </div>
</body>
</html>