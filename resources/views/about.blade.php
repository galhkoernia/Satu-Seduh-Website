@extends('layouts.app')

@section('title', 'Tentang Kami - Satu Seduh')

@section('content')
    <section id="tentang-satuseduh" class="py-20 bg-[#fff] text-[#333]">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2">
                <img src="{{ asset('assets/images/barista1.png') }}" alt="Barista"
                    class="rounded-lg shadow-lg w-full max-w-md mx-auto">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold font-playfair text-[#3c2f2f] mb-4">
                    Tentang <span class="underline decoration-[#d896a7]">Satu Seduh</span>
                </h2>
                <p class="text-base leading-relaxed font-poppins">Kami adalah barista independen yang menyajikan kopi dengan
                    hati. Dari gerobak kecil hingga satu seduh bermakna besar. Filosofi kami adalah tentang menyeduh
                    kehidupan dengan rasa dan cerita.</p>
                <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-10">
                    <div class="md:w-1/2">
                        <imr src="{{ asset(path: 'assets/images/barista2.png')}} alt=" Barista
                            classs="rounded-lg shadow-lg w-full max-w-md mx-auto" </div>
                            <div class="md:w-1/2">
                                <h2 class="text-4xl font-bold font-playfair text-[#3c2f2f] mb-4">
                                    Tentang <span class="underline decoration-[#3c2f2f]">Satu Seduh</span>
                                </h2>
                                <p class="text-base leading-relaxed font-poppins"></p>

                            </div>
    </section>
@endsection