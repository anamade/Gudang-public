<a href="{{ route('product_detail') }}" class="bg-white rounded-lg shadow-lg p-3 relative">
    <img class="mx-auto" src="{{asset('images/product-1.png')}}" alt="">
    <div>
        <p class="font-medium text-center text-gray-800"> T shirt polos</p>
        <div class="flex flex-col items-end gap-3 my-3">
            <strong class="text-violet-600">Rp.15000</strong>
            <strike class="text-gray-400">Rp.20000</strike>
        </div>
    </div>
    <div class="flex justify-between items-center mb-2">
        <div class="flex gap-1">
            <span style="background-color:#acacac" class="w-5 h-5 rounded-full">&nbsp;</span>
            <span style="background-color:#cc00ff" class="w-5 h-5 rounded-full">&nbsp;</span>
            <span style="background-color:#004867" class="w-5 h-5 rounded-full">&nbsp;</span>
            <span style="background-color:#000000" class="w-5 h-5 rounded-full">&nbsp;</span>
        </div>
        <div class="flex gap-1 text-gray-400 text-sm">
            <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
            <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
            <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
            <span class=" flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">XL</span>

        </div>
    </div>

    <div class="flex justify-between items-center">
        <span class="text-gray-400"><i class='bx bx-star'></i>4.5</span>
        <span class="text-violet-600 flex items-center font-bold"><i class='bx bx-cart-add'></i>Buy Now</span>
    </div>
    <div class="absolute top-2 left-3 right-3 flex justify-between items-center">
        <span class=" bg-red-600 text-white rounded px-2 text-xs">15% Off</span>
        <span class="bg-white shadow-md rounded-full w-7 h-7 flex items-center justify-center"><i class='bx bxs-heart text-2xl'></i></span>
    </div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</a>