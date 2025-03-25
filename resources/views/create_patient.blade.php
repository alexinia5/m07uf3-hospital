<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Patient</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8
    max-sm:p-4 max-sm:flex-col max-sm:gap-5">
      <x-navbar.navbar></x-navbar.navbar>
      <main class="flex flex-col items-center gap-10 w-full">
          @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 
            px-4 py-3 rounded absolute right-5" role="alert">
              <h2 class="font-semibold">Validate errors</h2>
              <ul class="flex flex-col">
                @foreach ($errors->all() as $error)
                  <li class="block sm:inline">{{ $error }}</li>
                @endforeach
              </ul>
              <button class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
              </button>
            </div>
          @endif
          <div class="bg-white w-full max-w-lg border-2 border-zinc-200 rounded-xl p-4 flex flex-col gap-6 items-center">
            <h1 class="text-2xl font-semibold">Create a patient</h1>
            <x-forms.create-form :route="'/patients/store'" :data="['DNI', 'Name', 'Gender', 'Phone', 'Address', 'Zip Code']"/>
          </div>
      </main>
    </div>
</body>
</html>