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