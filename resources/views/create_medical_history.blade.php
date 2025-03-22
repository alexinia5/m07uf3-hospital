<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Room</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8">
      <x-navbar.navbar></x-navbar.navbar>
      <main class="flex items-center justify-center w-full bg-[url('./img/backblue.jpeg')] bg-cover bg-center h-screen p-6 rounded-xl border border-neutral-200">
        <div class="bg-white w-full max-w-lg border-2 border-zinc-200 rounded-xl p-4 flex flex-col gap-6 items-center">
          <h1 class="text-2xl font-semibold">Make a room</h1>
          <x-forms.create-form :route="'/medicalhistories/store'" :data="['ID', 'Date', 'Diagnosis', 'Treatment', 'Patient']"/>
        </div>
      </main>
    </div>
</body>
</html>