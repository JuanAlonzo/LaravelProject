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
                      <div class="flex pt-6 item-center justify-center">
                        <a href="#">
                          <div class="w-4 mr-2 text-sm leading-6 text-gray-900 transform hover:text-gray-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                          </div>
                        </a>
                        <a href="#">
                          <div class="w-4 mr-2 text-sm leading-6 text-gray-900 transform hover:text-gray-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                              </svg>
                            </div>
                          </a>
                          <a href="#">
                            <div class="w-4 mr-2 text-sm leading-6 text-gray-900 transform hover:text-gray-500 hover:scale-110">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </div>
                          </a>
                        </div>
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
            @if ($forms->count() >= 3)
            <div class="p-4">
              {{$forms->links('components.pagination-tailwind')}}
            </div>
            @endif
      </div>
    </div>
</x-app-layout>