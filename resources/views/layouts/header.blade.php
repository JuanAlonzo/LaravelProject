<div class="bg-yellow-300">
    <div class="border py-3 px-8 pb-6">
      <div class="flex justify-between">
        <div class="flex items-center">
          <x-custom-logo class="h-9 ml-4" />
        </div>
        <div class="ml-6 flex flex-1 gap-x-3">
          <input type="text" name="search" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" placeholder="Buscar" />
        </div>
  
        <div class="ml-2 flex">
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:text-gray-700">
            <span class="text-lg font-medium"><a href="{{ route('principal.index') }}">{{ __('Home') }}</a></span>
          </div>
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:text-gray-700">
            <span class="text-lg font-medium"><a href="">{{ __('Categories') }}</a></span>
          </div>
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:text-gray-700">
            <span class="text-lg font-medium"><a href="{{ route('contact.index') }}">{{ __('About Us') }}</a></span>
          </div>

          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-yellow-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" viewBox="0 0 20 20" fill="currentColor">
              <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
              <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Mis compras</span>
          </div>
  
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-yellow-400">
            <div class="relative">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
              </svg>
              <span class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</span>
            </div>
            <span class="text-sm font-medium">Carrito</span>
          </div>
  
          <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border border-yellow-500 py-2 px-4 hover:bg-yellow-400">
            <span class="text-sm font-medium">{{ __('Log in') }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>