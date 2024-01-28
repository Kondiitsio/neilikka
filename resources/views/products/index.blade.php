<x-layout>
    <section class="container m-auto pt-40 px-8">
        <x-product-gategory-nav/>
    </section>

    <section class="container m-auto py-20 px-8">
        <div class="bg-white rounded-lg">
          <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-xl font-bold text-gray-900">Kaikki tuotteet</h2>

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
              <div>

                  <div class="h-72 w-full overflow-hidden rounded-lg">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="relative mt-4">
                    <h3 class="text-sm font-medium text-gray-900">{{ $product->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $product->price }}€</p>
                    @foreach($product->categories as $category)
                    <p class="mt-1 text-sm text-gray-500">{{ $category->name }}</p>
                    @endforeach
                  </div>
                <div class="mt-6">
                  <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Lisää ostoskoriin<span class="sr-only">, Lapio</span></a>
                </div>
              </div>
              @endforeach
              <!-- More products... -->
            </div>
          </div>
        </div>
    </section>
</x-layout>
