<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-0 m-0 bg-blue-50">
    <div class="container p-9 w-full h-screen flex flex-row gap-8">
        <nav class="bg-blue-700 w-28 h-full rounded-2xl p-5 flex flex-col items-center gap-32">
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
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-3xl text-blue-900">Appointment</h1>
                <div class="rounded-full bg-blue-700 p-2 w-32 flex justify-center items-center">
                    <a href="/appointments/create" class="text-white">Create new</a>
                </div>
            </div>
            <div class="flex flex-row h-10 bg-slate-300 rounded-2xl"></div>
                {{-- <div class="dashboard">
                    <div class="max-w-sm w-full shadow-lg">
                    <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-t">
                        <div class="px-4 flex items-center justify-between">
                            <span  tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800">October 2020</span>
                            <div class="flex items-center">
                                <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="15 6 9 12 15 18" />
                                </svg>
                            </button>
                            <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="9 6 15 12 9 18" />
                                </svg>
                            </button>

                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-12 overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">1</p>
                                            </div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">2</p>
                                            </div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">3</p>
                                            </div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">4</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">5</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">6</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">7</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="w-full h-full">
                                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-indigo-700 rounded-full">8</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">9</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">10</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">11</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">12</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">13</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">14</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">15</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">16</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">17</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">18</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">19</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">20</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">21</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">22</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">23</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">24</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">25</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">26</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">27</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">28</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">29</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">30</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="md:py-8 py-5 md:px-16 px-5 dark:bg-gray-700 bg-gray-50 rounded-b">
                        <div class="px-4">
                            <div class="border-b pb-4 border-gray-400 border-dashed">
                                <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">9:00 AM</p>
                                <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Zoom call with design team</a>
                                <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Discussion on UX sprint and Wireframe review</p>
                            </div>
                            <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                                <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">10:00 AM</p>
                                <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Orientation session with new hires</a>
                            </div>
                            <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                                <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">9:00 AM</p>
                                <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Zoom call with design team</a>
                                <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Discussion on UX sprint and Wireframe review</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="big-calendar">
                    <div class="header flex justify-between border-b p-2">
                        <span class="text-lg font-bold">
                        2020 July
                        </span>
                        <div class="buttons">
                        <button class="p-1">
                            <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
                            </svg>
                        </button>
                        <button class="p-1">
                            <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                                <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                        </div>
                    </div>
                    <table class="w-72">
                        <thead>
                        <tr>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Sunday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Monday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Tuesday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Wednesday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Thursday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Friday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                            <span class="xl:block lg:block md:block sm:block hidden">Saturday</span>
                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">1</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div
                                    class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                                >
                                    <span class="event-name">
                                    Meeting
                                    </span>
                                    <span class="time">
                                    12:00~14:00
                                    </span>
                                </div>
                                <div
                                    class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                                >
                                    <span class="event-name">
                                    Meeting
                                    </span>
                                    <span class="time">
                                    18:00~20:00
                                    </span>
                                </div>
                                </div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">2</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">3</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">4</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">6</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">7</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div
                                    class="event bg-blue-400 text-white rounded p-1 text-sm mb-1"
                                >
                                    <span class="event-name">
                                    Shopping
                                    </span>
                                    <span class="time">
                                    12:00~14:00
                                    </span>
                                </div>
                                </div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500 text-sm">8</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                        </tr>
                
                        <!--         line 1 -->
                        <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">9</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">10</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">12</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">13</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">14</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">15</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500 text-sm">16</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                        </tr>
                        <!--         line 1 -->
                
                        <!--         line 2 -->
                        <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">16</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">17</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">18</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">19</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">20</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">21</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500 text-sm">22</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                        </tr>
                        <!--         line 2 -->
                
                        <!--         line 3 -->
                        <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">23</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">24</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">25</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">26</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">27</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">28</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500 text-sm">29</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                        </tr>
                        <!--         line 3 -->
                
                        <!--         line 4 -->
                        <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">30</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">31</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                    <span class="text-gray-500">1</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">2</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">3</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500">4</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                            <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                <span class="text-gray-500 text-sm">5</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                            </div>
                            </td>
                        </tr>
                        <!--         line 4 -->
                        </tbody>
                    </table>
                </div>
        </main>
    </div>
</body>
</html>