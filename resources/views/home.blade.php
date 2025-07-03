@extends('layouts.app')

@section('title', 'Home - Satu Seduh')

@section('content')

    <!-- HERO Section -->
    <section id="hero" class="relative min-h-screen bg-[#fdfafa] flex items-center justify-center overflow-hidden">
        <img src="{{ asset('assets/images/satu-seduh.jpg') }}" alt="Logo Background"
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] max-w-[100%] opacity-100% z-0">

        <div class="relative z-10 bg-white/55 rounded-xl p-8 shadow-md backdrop-blur-sm max-w-2xl text-center">
            <img src="{{ asset('assets/images/logocoffee.png') }}" alt="Logo" class="mx-auto w-48 mb-6">
            <div class="filosofi-text">
                <h1 class="text-3xl font-playfair text-[#3c2f2f] mb-4">Filosofi Secangkir Kopi</h1>
                <p class="text-[#3c2f2f]">Secangkir kopi memiliki rasa yang khas, seperti hidup yang memiliki cerita.
                    Kami hadir untuk menyajikan lebih dari sekedar rasa, namun juga membawa makna.</p>
            </div>
        </div>

        <!-- Dekorasi Furniture -->
        <img src="{{ asset('assets/images/kursi.png') }}" alt="Dekor Kursi"
            class="absolute bottom-0 right-[-15%] w-[600px] opacity-90 hidden md:block">
        <img src="{{ asset('assets/images/mejacoffee.png') }}" alt="Dekor Meja"
            class="absolute bottom-0 right-[5%] w-[400px] opacity-90 hidden md:block">
    </section>

    <!-- PRODUK Section -->
    <section id="produk" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-[#3c2f2f] mb-12 font-playfair">Daftar Produk Unggulan</h2>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                @php
                    $produkList = [
                        ['judul' => 'Americano Coffee', 'img' => 'americanocoffee.png', 'deskripsi' => 'Campuran espresso dengan air panas. Rasanya lebih ringan dari espresso tapi tetap memiliki aroma kuat.', 'harga' => 'Rp18.000', 'link' => 'americanocoffee.html'],
                        ['judul' => 'Cappuccino Coffee', 'img' => 'cappucinocoffee.png', 'deskripsi' => 'Espresso, susu panas, dan foam. Tekstur creamy dan rasa lembut.', 'harga' => 'Rp25.000', 'link' => 'cappuccinocoffee.html'],
                        ['judul' => 'Manual Brew Coffe', 'img' => 'manualbrewcoffee.png', 'deskripsi' => 'V60, French Press, atau Chemex. Hasil lebih jernih dan kompleks secara rasa.', 'harga' => 'Rp20.000', 'link' => 'manualbrewcoffee.html'],
                        ['judul' => 'Mocha Coffee', 'img' => 'mochacoffee.png', 'deskripsi' => 'Kopi + susu + cokelat bubuk. Perpaduan lembut dan manis.', 'harga' => 'Rp20.000', 'link' => 'mochacoffee.html'],
                    ];
                @endphp

                @foreach($produkList as $produk)
                    <div
                        class="bg-white rounded-lg shadow hover:shadow-md transition-transform duration-300 hover:scale-105 flex flex-col">
                        <img src="{{ asset('assets/images/' . $produk['img']) }}" alt="{{ $produk['judul'] }}"
                            class="h-64 object-cover rounded-t-lg">
                        <div class="p-4 flex flex-col flex-grow">
                            <h5 class="text-xl font-semibold text-[#3c2f2f] font-playfair mb-2">{{ $produk['judul'] }}</h5>
                            <p class="text-sm text-[#5a4d4d] mb-3 flex-grow">{{ $produk['deskripsi'] }}</p>
                            <p class="text-sm text-gray-500 mb-3">{{ $produk['harga'] }}</p>
                            <a href="{{ $produk['link'] }}"
                                class="mt-auto inline-block px-4 py-2 border border-gray-800 text-gray-800 hover:bg-gray-800 hover:text-white transition rounded-lg text-sm">Detail</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- FILOSOFI Section -->
    <section id="tentang-satuseduh" class="py-20 bg-white text-[#333]">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
            <div class="text-center lg:text-left">
                <img src="{{ asset('assets/images/barista.png') }}" alt="Ilustrasi Barista"
                    class="mx-auto lg:mx-0 max-w-md rounded-xl shadow">
            </div>
            <div>
                <h2 class="text-3xl font-bold font-playfair text-[#3c2f2f] mb-4">
                    Satu<span class="underline decoration-pink-300">Seduh</span> ☕
                </h2>
                <p class="text-base leading-relaxed mb-6">
                    Dalam satu seduhan, terkandung cerita.<br>
                    Tentang pertemuan, keheningan, dan makna yang perlahan larut bersama aroma kopi.<br><br>
                    Satu Seduh bukan sekadar tempat menikmati kopi, tapi ruang untuk merasa, merenung, dan menemukan kembali
                    diri—satu tegukan pada satu waktu.<br><br>
                    Karena kami percaya, hal-hal terbaik dalam hidup dimulai dari satu seduh yang tulus.
                </p>
                <a href="https://instagram.com/satu_seduh" target="_blank"
                    class="inline-flex items-center gap-2 bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-black transition">
                    <img src="{{ asset('assets/images/ig_icon.png') }}" alt="Instagram" class="w-5">
                    <span>@satu_seduh</span>
                </a>
            </div>
        </div>
    </section>

@endsection