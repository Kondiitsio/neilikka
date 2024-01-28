<x-layout>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<style>
.choices__inner {
    margin-top: 0.25rem;
    border-radius: 0.375rem;
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity));
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    outline: 2px solid transparent;
    outline-offset: 2px;
    font-size: 0.875rem/* 14px */;
    line-height: 1.25rem/* 20px */;
}
.choices__input {
    background-color: white;
}
/* .choices__item--selectable {
background-color: #ff6347;
color: #ffffff;
} */
</style>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      var element = document.querySelector('#categories');
      var choices = new Choices(element);
    });
</script>


<section class="container m-auto pt-40 px-8">
    <h2 class="text-xl font-bold text-gray-900">Lisää tuote</h2>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-[20%_80%]">


    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mt-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Tuotteen nimi</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="mt-4">
            <label for="categories" class="block text-sm font-medium text-gray-700">Tuote kategoriat</label>
            <select multiple id="categories" name="categories[]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Tuote kuvaus</label>
            <textarea type="text" name="description" id="description" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>

        <div class="mt-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Tuotteen hinta</label>
            <input type="number" name="price" id="price" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="mt-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Tuotteen kuva</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="mt-6">
            <button type="submit" class="flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Lisää tuote</button>
        </div>
    </form>


    <div class="px-4 sm:px-6 lg:px-8">

        <div class="mt-8 flow-root">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <div class="relative">
                <!-- Selected row actions, only show when rows are selected. -->
                <!-- <div class="absolute top-0 left-14 flex h-12 items-center space-x-3 bg-white sm:left-12"> -->
                <!--   <button type="button" class="inline-flex items-center rounded bg-white px-2 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-30 disabled:hover:bg-white">Bulk edit</button> -->
                <!--   <button type="button" class="inline-flex items-center rounded bg-white px-2 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-30 disabled:hover:bg-white">Delete all</button> -->
                <!-- </div> -->

                <table class="min-w-full table-fixed divide-y divide-gray-300">
                  <thead>
                    <tr>
                      <th scope="col" class="relative px-7 sm:w-12 sm:px-6">
                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      </th>
                      <th scope="col" class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">Nimi</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Hinta</th>
                      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-3">
                        <span class="sr-only">Edit</span>
                      </th>
                    </tr>
                  </thead>
                  @foreach($products as $product)
                  <tbody class="divide-y divide-gray-200 bg-white">
                    <!-- Selected: "bg-gray-50" -->
                    <tr>

                      <td class="relative px-7 sm:w-12 sm:px-6">
                        <!-- Selected row marker, only show when row is selected. -->
                        <!-- <div class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div> -->

                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      </td>
                      <!-- Selected: "text-indigo-600", Not Selected: "text-gray-900" -->
                      <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900">{{ $product->name }}</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->price }}€</td>
                      <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-3">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only"></span></a>
                      </td>
                      <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-3">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Remove<span class="sr-only"></span></a>
                      </td>

                    </tr>

                    <!-- More people... -->
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</section>
</x-layout>
