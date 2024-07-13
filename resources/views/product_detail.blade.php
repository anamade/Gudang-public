@extends('layouts.app')

@push('scripts')
<script>
    let currentImage = 0;

    const viewImage = (e, index) => {
        currentImage = index;
        document.getElementById('bigImage').src = e.querySelector('img').src;
    }

    const nextPrevious = (index) => {
        let i = currentImage + index;
        let images = document.getElementById('images').querySelectorAll('img');
        if (i >= images.length || i < 0) return;
        currentImage = i;
        let arr = [];
        images.forEach(element => arr.push(element.src));
        document.getElementById('bigImage').src = arr[currentImage];
    }
</script>
@endpush

@section('body_content')
<section class="px-6 md:px-20 mt-6">
    <div class="flex flex-wrap md:flex-nowrap gap-6 ">
        <!-- left -->
        <div class="shrink-0 flex gap-4">
            <div id="images" class="flex flex-col gap-3 max-h-96 overflow-y-auto">
                @foreach (range(1, 4) as $item)
                <div onclick="viewImage(this, {{ $loop->index }})" class="bg-white rounded-md shadow p-1 cursor-pointer">
                    <img class="w-16" src="{{ asset('images/product-' . $loop->iteration . '.png') }}" alt="Product Image {{ $loop->iteration }}" />
                </div>
                @endforeach
            </div>

            <div class="h-96 relative bg-white rounded-md shadow-md p-3">
                <img id="bigImage" class="h-full aspect-[2/3]" src="{{ asset('images/product-1.png') }}" alt="Product Image">
                <span onclick="nextPrevious(-1)" class="absolute top-1/2 left-1 bg-slate-200 rounded-full w-5 h-5 shadow flex items-center justify-center transform -translate-y-1/2">
                    <i class='bx bx-chevron-left text-xl text-gray-400 hover:text-violet-600 duration-200 cursor-pointer'></i>
                </span>
                <span onclick="nextPrevious(1)" class="absolute top-1/2 right-1 bg-slate-200 rounded-full w-5 h-5 shadow flex items-center justify-center transform -translate-y-1/2">
                    <i class='bx bx-chevron-right text-xl text-gray-400 hover:text-violet-600 duration-200 cursor-pointer'></i>
                </span>
            </div>
        </div>
        <!-- left end -->

        <!-- right -->
        <div class="w-full flex flex-col gap-4">
            <div class="flex gap-3">
                <span class="bg-red-600 text-white rounded px-2 text-xs">15% Off</span>
                <span class="text-gray-400 text-sm"><i class='bx bx-star'></i>4.5</span>
            </div>

            <!-- Brand -->
            <h2>Men Blue Shirt</h2>
            <div class="text-sm text-gray-800">
                <p><span class="text-gray-400">SKU:</span>FK0001</p>
                <p><span class="text-gray-400">BRAND:</span>Brand Name</p>
            </div>

            <!-- Price -->
            <div>
                <span class="text-rose-500 font-bold text-xl">Rp.15000</span>
                <sub class="text-gray-400"><strike>Rp.25000</strike></sub>
            </div>

            <!-- Colors -->
            <div>
                <p class="text-gray-400">Colors:</p>
                <div class="flex gap-1">
                    <span style="background-color:#acacac" class="w-5 h-5 rounded-full">&nbsp;</span>
                    <span style="background-color:#cc00ff" class="w-5 h-5 rounded-full">&nbsp;</span>
                    <span style="background-color:#004867" class="w-5 h-5 rounded-full">&nbsp;</span>
                    <span style="background-color:#000000" class="w-5 h-5 rounded-full">&nbsp;</span>
                </div>
            </div>

            <!-- Size -->
            <div>
                <p class="text-gray-400">Size:</p>
                <div class="flex gap-1 text-gray-400 text-sm">
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">XL</span>
                </div>
                <a href="#" class="text-gray-400 text-sm">Size Guide</a>
            </div>

            <!-- Quantity -->
            <div>
                <p class="text-gray-400">Quantity :</p>
                <div class="flex items-center gap-2">
                    <input type="text" value="1" readonly class="bg-slate-200 rounded border border-gray-300 focus:outline-none px-2 text-lg font-medium w-20">
                    <button class="rounded border w-7 h-7 border-gray-300"><i class='bx bx-plus text-xl'></i></button>
                    <button class="rounded border w-7 h-7 border-gray-300"><i class='bx bx-minus text-xl'></i></button>
                </div>
            </div>

            <!-- Wishlist, Add to Cart, and Buy Now -->
            <div class="flex items-center gap-4">
                <span class="bg-white shadow-md rounded-full w-7 h-7 flex items-center justify-center"><i class='bx bxs-heart text-2xl text-gray-500'></i></span>
                <button class="rounded border border-violet-600 w-28 text-center drop-shadow font-medium text-violet-600 py-0.5">Add To Cart</button>
                <button class="border border-violet-600 rounded w-28 text-center drop-shadow font-medium text-white bg-violet-500 py-0.5">Buy Now</button>
            </div>
        </div>
        <!-- right end -->
    </div>
    <!-- Detail Product -->
    <div>
        <h3 class="text-lg text-gray-400 font-medium my-6">Product Description</h3>
        <div class="text-gray-500">
            Sebagai mahasiswa Teknik Informatika, saya sedang menempuh pendidikan untuk mengembangkan
            keterampilan dan pengetahuan di bidang teknologi informasi. Saya memiliki minat yang mendalam
            dalam pemrograman, pengembangan perangkat lunak, dan inovasi teknologi. Dalam studi saya, saya telah mempelajari
            berbagai bahasa pemrograman seperti Python, Java, dan C++, serta teknik pengembangan aplikasi dan
            prinsip-prinsip jaringan komputer.
        </div>
    </div>
    <section class="mt-6">
        <h3 class="text-gray-800 font-medium mb-2">Featured Product</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach (range(1, 12) as $item)
            <x-product.card1 />
            @endforeach
        </div>
    </section>

</section>
@endsection