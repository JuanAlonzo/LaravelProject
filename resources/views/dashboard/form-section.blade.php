@if (isset($featuredForms))
                <div class="max-w-none mx-auto">
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($featuredForms as $form)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-40">
                              <img src="{{ asset($form->image) }}" alt="{{$form->name}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="px-4 py-2">
                                <h3 class="text-lg font-medium text-gray-900">{{ $form->name }}</h3>
                                <p class="text-gray-600">{{ $form->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
                @endif