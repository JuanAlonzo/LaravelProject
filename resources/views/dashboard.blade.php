<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center">
      <div class="2xl:mx-auto 2xl:container lg:px-20 lg:pt-16 md:pt-12 md:px-6 pt-9 px-4 w-96 sm:w-auto">
        <div class="flex flex-col items-center justify-center">
          <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">{{ __("Welcome ") }} {{ $user->name }} {{ __(" to your Dashboard!") }}</h1>
        </div>
      </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-none">
                @include('dashboard.product-section')
            </div>
          </div>
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-none">
                @include('dashboard.category-section')
            </div>
          </div>
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-none">
                @include('dashboard.form-section')
            </div> 
          </div>
        </div>
    </div>
</x-app-layout>
