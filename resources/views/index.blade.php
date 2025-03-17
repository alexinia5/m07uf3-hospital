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
        <x-navbar.navbar></x-navbar.navbar>
        <main class="flex flex-col gap-6 w-full">
            <x-search.search></x-search.search>
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