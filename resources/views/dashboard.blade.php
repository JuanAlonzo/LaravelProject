<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('dashboard.principal-section')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-none">
                    @include('dashboard.form-section')
                </div> 
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-none">
                    @include('dashboard.category-section')
                </div>
              </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-none">
                    @include('dashboard.product-section')
                </div>
            </div>
        </div>
    </div>

    <!-- component -->
    <div class="flex justify-center items-center">
        <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
        <div role="main" class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">{{ __("Welcome to your Dashboard!") }}</h1>
            <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/3 md:w-10/12 w-11/12">
                <strong>{{ $user->name }}
                    {{ $user->lastname }}
                </strong>, enjoy you're time here, you've come to the right place.</p>
        </div>
        <div class="lg:flex items-stretch md:mt-12 mt-8">
            <div class="lg:w-1/2">
            <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
                <div class="sm:w-1/2 relative">
                <div>
                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
                    <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    </div>
                </div>
                <img src="https://i.ibb.co/DYxtCJq/img-1.png" class="w-full rounded-lg" alt="chair" />
                </div>
                <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                <div>
                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
                    <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    </div>
                </div>
                <img src="https://i.ibb.co/3C5HvxC/img-2.png" class="w-full rounded-lg" alt="wall design" />
                </div>
            </div>
            <div class="relative">
                <div>
                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </a>
                </div>
                </div>
                <img src="https://i.ibb.co/Ms4qyXp/img-3.png" alt="sitting place" class="w-full mt-8 md:mt-6 hidden sm:block" />
                <img class="w-full mt-4 sm:hidden rounded-lg" src="https://i.ibb.co/6XYbN7f/Rectangle-29.png" alt="sitting place" />
            </div>
            </div>
            <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
            <div class="relative">
                <div>
                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </a>
                </div>
                </div>
                <img src="https://i.ibb.co/6Wfjf2w/img-4.png" alt="sitting place" class="w-full sm:block hidden rounded-lg" />
                <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png" alt="sitting place" />
            </div>
            <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
                <div class="relative w-full">
                <div>
                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
                    <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    </div>
                </div>
                <img src="https://i.ibb.co/3yvZBpm/img-5.png" class="w-full rounded-lg" alt="chair" />
                </div>
                <div class="relative w-full sm:mt-0 mt-4">
                <div>
                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
                    <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    </div>
                </div>
                <img src="https://i.ibb.co/gDdnJb5/img-6.png" class="w-full rounded-lg" alt="wall design" />
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="p-6 sm:p-6">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information</h3>
              <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
            </div>
            <div class="mt-6 mx-6 border-t border-gray-100">
              <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Full Name")}}</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Email address")}}</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->email }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Number")}}</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->number }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">{{ __("Attachments")}}</dt>
                  <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                    <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                      <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                        <div class="flex w-0 flex-1 items-center">
                          <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                          </svg>
                          <div class="ml-4 flex min-w-0 flex-1 gap-2">
                            <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                            <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                          </div>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                        </div>
                      </li>
                      <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                        <div class="flex w-0 flex-1 items-center">
                          <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                          </svg>
                          <div class="ml-4 flex min-w-0 flex-1 gap-2">
                            <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                            <span class="flex-shrink-0 text-gray-400">4.5mb</span>
                          </div>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                        </div>
                      </li>
                    </ul>
                  </dd>
                </div>
              </dl>
            </div>
          </div>
      </div>
    </div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5">
          <div class="bg-white rounded-lg">
              <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
              <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
          
              <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-6 xl:gap-x-8">
                @foreach ($products as $product)
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-40">
                        <img src="{{ asset($product->image) }}" alt="{{$product->name}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{$product->name}}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">{{$product->category->name}}</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">S/.{{$product->price}}</p>
                    </div>
                </div>
                @endforeach
              </div>
              
              </div>
          </div>
        </div>

        {{-- Section 2 --}}
        <div class="bg-white mt-5 rounded-lg">
          <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 class="sr-only">Products</h2>
      
          <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
              <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
              <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
              </a>
              <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
              <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
              </a>
              <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
              <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
              </a>
              <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
              <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
              </a>
      
              <!-- More products... -->
          </div>
          </div>
      </div>
      </div>
    </div>
</x-app-layout>
