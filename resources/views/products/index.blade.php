<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Products') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <x-text-input id="name" 
            class="block mt-1 w-full focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" 
            type="text" 
            placeholder="{{ __('Name') }}" 
            :value="old('name')" 
            name="name"
            required autofocus/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <!-- Price -->
            <x-text-input id="price" 
            class="block mt-1 w-full focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" 
            type="text" 
            placeholder="{{ __('Price') }}" 
            :value="old('price')" 
            name="price"
            required autofocus/>
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                
            <!-- Description -->
            <textarea id="description"
            name="description" 
            autofocus
            placeholder="{{ __('Description') }}"
            class="block w-full mt-1 border-gray-300 focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            
            <!-- Category -->
            <x-select-input id="category" 
            class="block mt-1 w-full border-gray-300 focus:border-yellow-300 focus:ring focus:ring-yellow-300 focus:ring-opacity-50 rounded-md shadow-sm text-gray-500"
            name="category_id"
            required autofocus>
                <option selected>{{ __("Add a Category")}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </x-select-input>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
            
            <!-- State -->
            <x-select-input id="state" 
            class="block mt-1 w-full border-gray-300 focus:border-yellow-500 focus:ring focus:ring-yellow-300 focus:ring-opacity-50 rounded-md shadow-sm text-gray-500" 
            name="state"
            required autofocus>
                <option selected>{{ __("Select a State") }}</option>
                <option value="Disponible">{{ __("Available") }}</option>
                <option value="No Disponible">{{ __("Not Available") }}</option>
            </x-select-input>
            <x-input-error :messages="$errors->get('state')" class="mt-2" />

            <!-- Image -->
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                <div class="text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                  </svg>
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                      <label for="image" 
                          class="relative cursor-pointer rounded-md bg-white font-semibold text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-yellow-600 focus-within:ring-offset-2 hover:text-yellow-500">
                        <span class="mx-2">{{ __("Upload a file") }}</span>
                        <input id="image" name="image" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">{{ __("or drag and drop") }}</p>
                    </div>
                  <p class="text-xs leading-5 text-gray-600">"PNG, JPG, GIF up to 10MB"</p>
                </div>
              </div>
              <x-input-error :messages="$errors->get('image')" class="mt-2" />

            <div class="flex items-center">
                <div class="flex-grow">
                    @if (session('status') === 'product-created')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-green-600"
                        >{{ __('Product created successfully.') }}</p>
                    @endif
                </div>
                <x-primary-button class="ml-4 mt-4">{{ __("Add") }}</x-primary-button>
            </div>
        </form>
    </div>

    <!-- Table component -->
    <div class="overflow-x-auto">
        <div class="min-w-screen bg-gray-100 flex items-center justify-center font-sans overflow-auto">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md my-6 rounded-lg">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-yellow-300 text-black uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">{{ __("Name") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("Description") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("Updated At") }}</th>
                                <th class="py-3 px-6 text-left">{{ __("Category") }}</th>
                                <th class="py-3 px-6 text-center">{{ __("Price") }}</th>
                                <th class="py-3 px-6 text-center">{{ __("State") }}</th>
                                <th class="py-3 px-6 text-center">{{ __("Image") }}</th>
                                <th class="py-3 px-6 text-center">{{ __("Actions") }}</th>
                            </tr>
                        </thead>
                        @if ($products->count() > 0)
                        <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($products as $product)
                                <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{$product->name}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{$product->description}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{$product->created_at->diffForHumans()}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{$product->category->name}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>S/. {{$product->price}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <x-span state="{{ $product->state }}" />
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <img src="{{ asset($product->image) }}" alt="{{$product->name}}" class="h-32 w-h-32 object-cover object-center">
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <a href="#">
                                                <div class="w-4 mr-2 transform hover:text-gray-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="w-4 mr-2 transform hover:text-gray-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="w-4 mr-2 transform hover:text-gray-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            @else
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border-b border-gray-200 bg-white">
                                        <td class="text-center text-sm leading-6 py-5">{{ __('No se encontraron productos') }}</td>
                                </tr>
                            </tbody>
                            @endif
                        </table>
                        <!-- Pagination -->
                    @if ($products->count() >= 5) 
                    <div class="p-4">
                        {{$products->links('components.pagination-tailwind')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>