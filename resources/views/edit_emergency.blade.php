<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Emergency</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8
    max-sm:p-4 max-sm:flex-col max-sm:gap-5">
      <x-navbar.navbar></x-navbar.navbar>
      <main class="flex flex-col items-center gap-10 w-full">
        <div class="bg-white w-full max-w-lg border-2 border-zinc-200 rounded-xl p-4 flex flex-col gap-6 items-center">
          <h1 class="text-2xl font-semibold">Update emergency</h1>
          <x-forms.update-form :data="['Date', 'Level', 'Diagnosis', 'Floor Number', 'Doctor', 'Nurse', 'Patient']"/>
        </div>
      </main>
    </div>
</body>
</html>