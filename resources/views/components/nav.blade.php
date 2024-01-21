<nav class="fixed top-0 left-0 bg-white w-full shadow">
    <div class="container m-auto flex justify-between items-center">
        <a href="/"><h1 class="pl-8 py-4 text-xl font-bold hover:underline">Neilikka</h1></a>
        <div class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">

            <div class="group relative py-2">
                <div class="flex items-center justify-between space-x-5 bg-white px-4">
                    <a href="/products" class="menu-hover my-2 hover:underline py-2 text-base text-black mx-4">
                        Tuotteet
                    </a>
                </div>
                <div class="invisible absolute flex w-full flex-col bg-white py-1 px-4 text-gray-800 shadow-xl group-hover:visible">
                    <a href="/sisakasvit" class="my-2 block py-1 font-semibold hover:underline md:mx-2">
                        Sisäkasvit
                    </a>

                    <a href="/ulkokasvit" class="my-2 block py-1 font-semibold hover:underline md:mx-2">
                        Ulkokasvit
                    </a>
                    <a href="tyokalut" class="my-2 block py-1 font-semibold hover:underline md:mx-2">
                        Työkalut
                    </a>
                    <a href="kasvien-hoito" class="my-2 block py-1 font-semibold hover:underline md:mx-2">
                        Kasvien hoito
                    </a>
                </div>
            </div>
            <a class="hover:underline mx-4" href="myymalat">Myymälät</a>
            <a class="hover:underline mx-4" href="tietoa-meista">Tietoa mesitä</a>
            <a class="hover:underline mx-4" href="#">Ota yhteyttä</a>
        </div>
        <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
            <div class="w-5 h-1 bg-gray-600 mb-1"></div>
            <div class="w-5 h-1 bg-gray-600 mb-1"></div>
            <div class="w-5 h-1 bg-gray-600 "></div>
            <div class="absolute top-0 -right-full h-screen w-8/12 bg-white border opacity-0
            group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                <div class="flex flex-col items-center w-full text-base cursor-pointer pt-10 font-semibold">

                    <a href="/products" class="hover:underline py-4 px-6 w-full">Tuotteet</a>
                    <a href="/myymalat"class="hover:underline py-4 px-6 w-full">Myymälät</a>
                    <a href="/tietoa-meista" class="hover:underline py-4 px-6 w-full">Tietoa meistä</a>
                    <a href="/ota-yhteytta" class="hover:underline py-4 px-6 w-full">Ota yhteyttä</a>
                </div>
            </div>
        </button>
    </div>
</nav>
