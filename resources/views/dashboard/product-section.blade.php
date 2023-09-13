@if (isset($featuredProducts))
    <div class="max-w-3xl mx-auto">
      <div>
        <p class="leading-6 font-bold text-xl mb-3"> {{ __('See the principal products') }} </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($featuredProducts as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-40">
                  <img src="{{ asset($product->image) }}" alt="{{$product->name}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="px-4 py-3">
                    <h3 class="text-lg font-medium text-gray-900">{{ $product->name }}</h3>
                    <p class="text-gray-600">{{ $product->description }}</p>
                    <p class="text-gray-500 text-end leading-3">{{ $product->updated_at->diffForHumans()}}</p>
                </div>
            </div>
        @endforeach
    </div> 
    <div class="mt-6 flex justify-end">
      <x-primary-button>{{ __('See more products') }}</x-primary-button>
    </div>
  </div>
@endif