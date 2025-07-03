@extends('layouts.app')

@section('title', 'Produk - Satu Seduh')

@section('content')
    <section id="produk" class="py-20 bg-white text-center">
        <h2 class="text-3xl font-abril-fatface font-bold text-[#5e3c2b] mb-8 relative inline-block">
            Produk Unggulan
            <span class="block w-16 h-1 bg-[#b76e4c] mx-auto mt-2 rounded"></span>
        </h2>

        <div class="max-w-6xl mx-auto px-4 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card Produk Americano -->
            <div class="bg-white rounded-lg shadow hover:scale-100 transition-transform p-4">
                <img src="{{ asset('assets/images/americanocoffee.png') }}" alt="Produk 1"
                    class="w-full h-64 object-cover rounded mb-4">
                <h3 class="text-xl font-playfair text-[#3c2f2f]">Kopi Latte</h3>
                <p class="text-sm text-[#5a4d4d]">Aroma khas dan cita rasa lembut.</p>
            </div>
            <!-- Card Produk Cappuccino -->
            <div class="bg-white rounded-lg shadow hover:scale-100 transition-transform p-4">
                <img src="{{ asset('assets/images/cappucinocoffee.png') }}" alt="Produk 2"
                    class="w-full h-64 object-cover rounded mb-4">
                <h3 class="text-xl font-playfair text-[#3c2f2f]">Cappuccino</h3>
                <p class="text-sm text-[#5a4d4d]">Kombinasi sempurna espresso dan susu.</p>
            </div>
            <!-- Card Produk Manual Brew-->
            <div class="bg-white rounded-lg shadow hover:scale-100 transition-transform p-4">
                <img src="{{ asset('assets/images/manualbrewcoffee.png') }}" alt="Produk 3"
                    class="w-full h-64 object-cover rounded mb-4">
                <h3 class="text-xl font-playfair text-[#3c2f2f]">Manual Brew Coffee</h3>
                <p class="text-sm text-[#5a4d4d]">Kombinasi sempurna espresso dan susu.</p>
            </div>
            <!-- Card Produk Mocha Coffee-->
            <div class="bg-white rounded-lg shadow hover:scale-100 transition-transform p-4">
                <img src="{{ asset('assets/images/mochacoffee.png') }}" alt="Produk 4"
                    class="w-full h-64 object-cover rounded mb-4">
                <h3 class="text-xl font-playfair text-[#3c2f2f]">Mocha Coffee</h3>
                <p class="text-sm text-[#5a4d4d]">Kombinasi sempurna espresso dan susu.</p>
            </div>
        </div>
    </section>
@endsection