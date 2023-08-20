<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Gestiona las suscripciones del formulario') }}
      </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <ul role="list" class="divide-y divide-gray-100">
              @if ($forms->count() > 0)
                @foreach ($forms as $form)
                <li class="flex justify-between gap-x-6 p-5">
                  <div class="flex gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset('images/features/user-solid.svg') }}" alt="">
                    <div class="min-w-0 flex-auto">
                      <p class="text-sm font-semibold leading-6 text-gray-900">{{$form->name}}</p>
                      <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$form->email}}</p>
                    </div>
                  </div>
                  <div class="hidden sm:flex sm:flex-col sm:items-end">
                    <p class="mt-1 text-xs leading-5 text-gray-500">{{ __("Last seen") }} - <time datetime="2023-01-23T13:23Z">{{$form->created_at->format('j M Y, H:i a')}}</time></p>
                  </div>
                </li>
                @endforeach
              @else
              <li class="flex justify-between gap-x-6 p-5">
                <div class="flex gap-x-4">
                  <p class="text-sm font-semibold leading-6 text-gray-900">No hay datos</p>
                </div>
              </li>
              @endif
            </div>
            <div class="p-4">
              {{$forms->links('components.pagination-tailwind')}}
            </div>
            
      </div>
    </div>

</x-app-layout>