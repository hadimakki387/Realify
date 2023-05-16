<x-layout>
    <div class="flex justify-between items-center h-12 px-4 mt-2 mx-1">
        <div class="flex gap-8 place-items-center">
            <div>
                <p class="text-2xl font-medium">Realify</p>
            </div>
            <div class="relative">
                <button class="dropbtn  px-5 py-2 rounded-md hover:bg-green-700 hover:text-white transition-all duration-75">Buy</button>
                <div class="dropdown-content hidden absolute shadow-md shadow-black p-2 ">
                    <a href="#" class="block mt-1 hover:bg-red-500">Homes</a>
                    <a href="#" class="block mt-1">Condos</a>
                    <a href="#" class="block mt-1">Apartments</a>
                </div>
            </div>
            <div class="relative">
                <button class="dropbtn px-5 py-2 rounded-md hover:bg-green-700 hover:text-white transition-all duration-75">Rent</button>
                <div class="dropdown-content hidden absolute shadow-md shadow-black p-2">
                    <a href="#" class="block mt-1">Houses</a>
                    <a href="#" class="block mt-1">Apartments</a>
                    <a href="#" class="block mt-1">Rooms</a>
                </div>
            </div>
            <div class="relative ">
                <button class="dropbtn px-5 py-2 rounded-md hover:bg-green-700 hover:text-white transition-all duration-75">Mortgage</button>
                <div class="dropdown-content hidden absolute shadow-md shadow-black p-2">
                    <a href="#" class="block mt-1">30-year fixed</a>
                    <a href="#" class="block mt-1">15-year fixed</a>
                    <a href="#" class="block mt-1">ARM</a>
                </div>
            </div>
        </div>
        <div class="flex place-items-center gap-8">
            <a href="#" class="px-5 py-2 rounded-md hover:bg-green-700 hover:text-white transition-all duration-75">
                Saved Homes
            </a>
            <a href="#" class="px-5 py-2 rounded-md hover:bg-green-700 hover:text-white transition-all duration-75">
                Saved Searches
            </a>
            <a href="#" class="px-5 py-2 rounded-md border border-neutral-600 hover:bg-gray-100 transition-all duration-75">
                Sign up or Login
            </a>
            <div>
                drop
            </div>
        </div>
    </div>
</x-layout>
