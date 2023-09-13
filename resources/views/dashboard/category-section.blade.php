<section class="max-w-4xl mx-auto">
  <div>
    <p class="leading-6 font-bold text-xl mb-3"> {{ __('See the principal categories') }} </p>
  </div>
    @if (isset($categories))
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6 gap-4">
        @foreach ($categories as $category)
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-4 py-2">
                <h3 class="text-lg font-medium text-gray-900">{{ $category->name }}</h3>
                <p class="text-gray-600">{{ $category->created_at->diffForHumans() }}</p>
            </div>
          </div>
        @endforeach
      </div>
      <div class="mt-6 flex justify-end">
        <x-primary-button>{{ __('See more categories') }}</x-primary-button>
      </div>
    @endif
</section>