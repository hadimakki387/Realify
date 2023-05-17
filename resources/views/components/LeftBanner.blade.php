<div class="LeftBanner hidden">
  
  
  <div
    class="h-screen bg-zinc-700 absolute right-0 top-0 text-white py-2 px-8 w-80 space-y-8"
  >
    <div class="flex justify-end items-start mt-4">
      <button class="CloseLeftBannerButton"><i class="fa-solid fa-x"></i></button>
    </div>
    <div class="flex justify-start">
      <a href="#">Sign up or Log in</a>
    </div>
    <div
      x-data="{ show: false }"
      @click.away="show = false"
      @click="show = !show"
      class="flex justify-between"
    >
      <div class="grid w-full">
        <div class="flex  justify-between">
            <p class="font-semibold">Buy</p>
            <i class="fa-solid fa-caret-down"></i>
        </div>

        <div @click="show = !show" x-show="show" class="mt-4 grid gap-4">
          <a href="#" class="hover:underline ">Home for sale</a>
          <a href="#" class="hover:underline ">Open Houses</a>
          <a href="#" class="hover:underline ">New Homes</a>
          <a href="#" class="hover:underline ">Recently Sold</a>
        </div>
      </div>
    </div>

    <div
      x-data="{ show: false }"
      @click.away="show = false"
      @click="show = !show"
      class="flex justify-between"
    >
      <div class="grid w-full">
        <div class="flex  justify-between">
            <p class="font-semibold">Rent</p>
            <i class="fa-solid fa-caret-down"></i>
        </div>

        <div @click="show = !show" x-show="show" class="mt-4 grid gap-4">
          <a href="#" class="hover:underline ">All Rentals</a>
          <a href="#" class="hover:underline ">Apartments for Rent</a>
          <a href="#" class="hover:underline ">Houses For Rent</a>
          <a href="#" class="hover:underline ">post A Rental Listing</a>
        </div>
      </div>
    </div>

    <div
      x-data="{ show: false }"
      @click.away="show = false"
      @click="show = !show"
      class="flex justify-between"
    >
      <div class="grid w-full">
        <div class="flex  justify-between">
            <p class="font-semibold">Mortgage</p>
            <i class="fa-solid fa-caret-down"></i>
        </div>

        <div @click="show = !show" x-show="show" class="mt-4 grid gap-4">
          <a href="#" class="hover:underline ">Mortgage Overview</a>
          <a href="#" class="hover:underline ">Get pre-Qualified</a>
          <a href="#" class="hover:underline ">Mortgage Rates</a>
          <a href="#" class="hover:underline ">Refinance Rates</a>
          <a href="#" class="hover:underline ">Mortgage Calculator</a>
          <a href="#" class="hover:underline ">Affordability Calculator</a>
          <a href="#" class="hover:underline ">Refinance Calculator</a>
        </div>
      </div>
    </div>

  </div>
</div>
