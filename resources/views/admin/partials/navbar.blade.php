<nav class="bg-gray-800 pt-0 md:pt-1 pb-1 px-1 h-auto fixed w-full z-20 top-0">
    <div class="flex flex-wrap items-center justify-between">
        <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
            <a href="#" class="flex items-center space-x-3">
                <img src="/logo.png" alt="logo" class="h-10 w-10 ml-4">
                <span class="text-white font-semibold text-xl hidden sm:block">LMSS | Admin </span>
            </a>
        </div>
        <div class="flex pt-2 content-center justify-between md:w-1/3 md:justify-end mr-2">
            <div class="relative inline-block dropdown ">

                <a class="bg-white rounded-md hover:bg-gray-500 hover:text-white py-2 px-4 block whitespace-no-wrap"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit()" href=" {{ route('logout') }}"> Sign Out

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
            </div>
        </div>
    </div>
</nav>