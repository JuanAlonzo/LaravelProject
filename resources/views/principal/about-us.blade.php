<x-store-layout>
    <!-- component -->
    <div class="py-16 bg-white">  
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="md:5/12 lg:w-5/12">
                <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
            </div>
            <div class="md:7/12 lg:w-6/12">
                <h2 class="text-2xl text-red-500 font-bold md:text-4xl">¿Quienes somos?</h2>
                <p class="mt-6 text-gray-600">Somos una tienda peruana dedicada a la venta de productos. Buscamos ofrecer a nuestros clientes los precios 
                    más cómodos y satisfacer eficientemente las necesidades de nuestros clientes.<br> Asimismo, nos comprometemos 
                    a mejorar constantemente la experiencia de compra de nuestros clientes, brindando un servicio al cliente excepcional 
                    y una amplia variedad de productos.</p>
            </div>
            </div>
        </div>
    </div>

    <div class="mx-auto container">
        <div class="flex flex-wrap md:items-stretch py-5">
            <div class="lg:w-1/2 pr-4 pl-4 pb-4">
                <div class="contenedor-4 h-full p-6 border rounder-md">
                    <h2 class="font-bold text-lg">Nuestra Visión</h2>
                    <hr class="hr-css-bottom">
                    <p class="fw-dark">Nuestra visión es  convertirnos en un negocio orientado al servicio al cliente, rentable y equitativo en términos 
                        de precios, mientras buscamos crecer y mejorar en el mercado de la venta de alimentos.</p>
                </div>
            </div>
    
            <div class="lg:w-1/2 pr-4 pl-4 pb-4">
                <div class="contenedor-4 h-full p-6 border rounder-md">
                    <h2 class="font-bold text-lg">Nuestra Misión</h2>
                    <hr class="hr-css-bottom">
                    <p class="fw-dark">Nuestra misión es proporcionar a nuestros clientes productos de calidad a precios accesibles, a través de proveedores 
                        especializados y una gestión eficiente de la cadena de suministro. Nos esforzamos por ser un negocio justo y orientado 
                        al servicio al cliente, brindando una experiencia de compra satisfactoria.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto sm:px-4 max-w-full px-4 py-5 mb-3 bg-[#292929]">
        <div class="flex flex-wrap  items-center g-lg-5">
          <div class="lg:w-3/5 pr-4 pl-4 text-center text-lg-end">
            <h1 class="text-4xl fw-bold ps-10 text-body-emphasis text-start mb-3 text-white">¿Quieres saber más sobre nuestras promociones?</h1>
          </div>
          <div class="md:w-4/5 pr-4 pl-4 mx-auto lg:w-2/5">
            <form action="{{ route('contact.store') }}" method="POST" class="p-6 md:p-12">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label text-white">Nombres y Apellidos</label>
                <x-text-input id="name"
                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                type="text"
                placeholder="{{ __('Name') }}"
                :value="old('name')"
                name="name"
                required
                autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label text-white">Dirección de correo</label>
                <x-text-input id="email"
                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                type="email"
                placeholder="{{ __('Email') }}"
                :value="old('email')"
                name="email"
                required
                autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="flex justify-end pt-2">
                  <div class="flex-grow">
                      @if (session('status') === 'form-added')
                          <p
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          class="text-sm text-green-600"
                          >{{ __('Successfully added.') }}</p> 
                      @endif
                  </div>
                <x-primary-button class="bg-blue-800 hover:bg-blue-500">{{ __('Suscribe') }}</x-primary-button>
              </div>
            </form>
          </div>
        </div>
      </div>
</x-store-layout>