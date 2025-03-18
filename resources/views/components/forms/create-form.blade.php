
<form class="w-full max-w-lg flex flex-col items-center" action="{{ $route }}" method="post">
  @csrf
  @foreach ($data as $item)
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">{{ $item }}</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded }py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="{{ $item }}" type="text">
    </div>
  @endforeach
  <div>
    <button type="submit"
        class="relative inline-flex items-center justify-start inline-block px-5 py-2.5 overflow-hidden font-medium transition-all bg-blue-700 rounded-lg hover:bg-indigo-50 group">
        <span
        class="absolute inset-0 border-0 group-hover:border-[25px] ease-linear duration-100 transition-all border-indigo-50 rounded-lg"></span>
        <span
        class="relative w-full text-base font-semibold text-left text-white transition-colors duration-200 ease-in-out group-hover:text-indigo-600">Create</span>
    </button>
  </div>
</form>
