<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurse Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
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
            <main class="flex flex-col gap-8 w-full">
                <div class="flex flex-row justify-around items-center h-16 bg-blue-100 rounded-xl p-4">
                    <h1 class="font-semibold text-blue-950">NURSE MANAGER</h1>
                    <div>
                        <a href="/nurses/create" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Create new nurse</a>
                    </div>
                </div>
                <div class="search flex flex-row">
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="border-2 border-gray-300 bg-white h-10 w-96 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                          type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="table">
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                          <thead class="bg-blue-200">
                            <tr>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date Birth</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">DNI</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Gender</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Phone</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Actions</th>
    
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            <a href="/patients/read">
                                <tr class="hover:bg-gray-50">
                                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                      <div class="relative h-10 w-10">
                                        <img
                                          class="h-full w-full rounded-full object-cover object-center"
                                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUHwrUfgmrAyFYXPwiWmP4UwFgo83Z5VEV8A&s"
                                          alt=""
                                        />
                                        <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                      </div>
                                      <div class="text-sm">
                                          <div class="font-medium text-gray-700 m-2">Everly Zamora Ruíz</div>
                                      </div>
                                    </th>
                                    <td class="px-6 py-4">12-10-2000</td>
                                    <td class="px-6 py-4">28394020</td>
                                    <td class="px-6 py-4">Female</td>
                                    <td class="px-6 py-4">690736444</td>
                                    <td class="px-6 py-4">
                                      <div class="flex justify-end gap-4">
                                        <a x-data="{ tooltip: 'Delete' }" href="/nurses/delete">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6"
                                            x-tooltip="tooltip"
                                          >
                                            <path
                                              stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            />
                                          </svg>
                                        </a>
                                        <a x-data="{ tooltip: 'Edite' }" href="/nurses/edit">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6"
                                            x-tooltip="tooltip"
                                          >
                                            <path
                                              stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            />
                                          </svg>
                                        </a>
                                      </div>
                                    </td>
                                </tr>
                            </a>
                          </tbody>
                        </table>
                      </div>
                </div>
            </main>
        </div>
    </body>
</body>
</html>