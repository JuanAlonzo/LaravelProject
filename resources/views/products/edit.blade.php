<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <!-- Name -->
            <x-text-input id="name" 
            class="block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
            type="text" 
            placeholder="{{ __('Name') }}" 
            :value="old('name', $product->name)" 
            name="name"
            required autofocus/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <!-- Price -->
            <x-text-input id="price" 
            class="block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
            type="text" 
            placeholder="{{ __('Price') }}" 
            :value="old('price', $product->price)" 
            name="price"
            required autofocus/>
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                
            <!-- Description -->
            <textarea id="description"
            name="description" 
            autofocus
            placeholder="{{ __('Description') }}"
            class="block w-full mt-2 border-gray-300 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('description', $product->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            
            <!-- Category -->
            <x-select-input id="category" 
            class="block mt-1 w-full focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50"
            name="category_id"
            required autofocus>
                <option value="{{$product->category->id}}" selected>{{$product->category->name}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </x-select-input>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
            
            <!-- State -->
            <x-select-input id="state" 
            class="block mt-1 w-full focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50" 
            name="state"
            required autofocus>
                <option value="{{$product->state}}" selected>{{$product->state}}</option>
                <option value="Disponible">{{ __("Available") }}</option>
                <option value="No Disponible">{{ __("Not Available") }}</option>
            </x-select-input>
            <x-input-error :messages="$errors->get('state')" class="mt-2" />

            <!-- Image -->
            <div class="mt-2 flex justify-center rounded-lg border">
              <img id="view_image" class="h-32 w-h-32 object-cover object-center">
            </div>
            
              <!-- Image -->
            <img class="border rounded mt-3" src="{{ asset($product->image) }}" alt="{{$product->name}}" width="150" height="150">
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
                <x-primary-button class="ml-4 mt-4">{{ __("Update") }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>

<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function (e) {
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#view_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>