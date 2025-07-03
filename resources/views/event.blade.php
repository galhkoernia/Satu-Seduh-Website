@extends('layouts.app')

@section('title', 'Event & Sosial Media - Satu Seduh')

@section('content')
    <section class="py-20 bg-[#fdfafa]">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-playfair font-bold text-[#3c2f2f] mb-8">Temukan Kami di Sosial Media</h2>

            <div class="bg-white/80 shadow-lg rounded-xl p-6 mx-auto max-w-2xl backdrop-blur">
                <p class="text-[#2c2c2c] font-poppins mb-4">Ikuti kami di Instagram untuk info event, promo, dan cerita
                    kopi!</p>
                <a href="https://instagram.com/satuseduh"
                    class="inline-block bg-[#333] text-white px-6 py-2 rounded-md hover:bg-black transition">
                    @satuseduh
                </a>
            </div>
        </div>
    </section>
@endsection