<x-store-layout>
    @include('principal.home.splidejs')

    <!-- Productos destacados -->
    <div class="container mx-auto pb-6">
        @if (isset($featuredProducts))
        <p class="leading-6 font-bold text-xl mb-3">Productos Destacados:</p>
        <div class="grid grid-cols-5 sm:grid-cols-3 md:grid-cols-2 md:gap-4 lg:grid-cols-5 xl:grid-cols-5 gap-x-4">
        @foreach ($featuredProducts as $product)
          <div class="relative">
            <img src="{{ asset($product->image) }}" alt="{{$product->name}}" class="object-cover w-full h-64">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-white bg-opacity-75">
              <h2 class="font-bold text-lg">{{ $product->name }}</h2>
              <p class="text-gray-600">S/.{{ $product->price }}</p>
              <p class="text-green-600">{{ $product->state}}</p>
            </div>
          </div>
          @endforeach
        </div>
        @endif
    </div>

    <section class="max-w-4xl mx-auto">
        @if (isset($latestCategories))
        <div>
          <p class="leading-6 font-bold text-xl mb-3">Nuestras Principales Categorias:</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 gap-4">
            @foreach ($latestCategories as $category)
            <a href="{{ route('products.category', $category->name) }}">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="px-4 py-2">
                        <h3 class="text-lg font-medium text-gray-900">{{ $category->name }}</h3>
                        <p class="text-gray-600">{{ $category->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endif
      </section>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-2">
                <div class="bg-white rounded-lg">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Mira nuestros productos:</h2>
                        @include('principal.home.products')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>