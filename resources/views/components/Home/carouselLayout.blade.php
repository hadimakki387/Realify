<div class=" mx-5 mt-16">
        
    <div class="flex items-center justify-center ">
        <div class="relative w-screen h-[400px]">
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
              
              {{$slot}}
              
            </div>
          </div>
          <div class="absolute top-1/2 -translate-y-1/2 flex items-center justify-between w-full">
            <button class="bg-white rounded-full p-2 prevSlide " >
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button class="bg-white rounded-full p-2 nextSlide" >
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    
      
</div>