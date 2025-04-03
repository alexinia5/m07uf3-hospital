<div class="relative h-full flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8  bg-no-repeat bg-cover rounded-3xl"
style="background-image: url(https://img.freepik.com/premium-vector/vector-medical-technology-network-concept-design-hexagon-technology-frame-design_178863-1314.jpg); background-size: cover;">
    <div class="absolute bg-black opacity-20 inset-0 z-0 rounded-3xl"></div>
    <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
        <div class="grid gap-8 grid-cols-1">
            <div class="flex flex-col ">
                <div class="flex flex-col sm:flex-row items-center">
                    <h2 class="font-semibold text-lg mr-auto">Create</h2>
                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="mt-5">

                <form class="w-full max-w-lg flex flex-col items-center" action="{{ $route }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        @foreach ($data as $item)
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 max-sm:mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">{{ $item }}</label>
                                <input class="appearance-none p-1 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded mb-3 leading-tight focus:outline-none focus:bg-white" name="{{ strtolower($item) }}" type="text">
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-block rounded-sm bg-cyan-500 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:ring-3 focus:outline-hidden">
                            <span>Create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>