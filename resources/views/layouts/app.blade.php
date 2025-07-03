<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>@yield('title')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Font Google -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-white text-[#3c2f2f]">

    <!-- Navbar -->
    <nav class="bg-[#d2b48c] px-8 py-6 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-2xl font-bold font-playfair">Satu Seduh</a>
        <ul class="flex gap-10 text-lg font-semibold font-playfair">
            <li><a href="{{ url('/') }}" class="hover:text-white transition">Home</a></li>
            <li><a href="{{ url('/product') }}" class="hover:text-white transition">Product</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-white transition">About</a></li>
            <li><a href="{{ url('/event') }}" class="hover:text-white transition">Event</a></li>
        </ul>
    </nav>

    <!-- Konten Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#2d2d2d] text-white text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Satu Seduh. All rights reserved.</p>
    </footer>

</body>

</html>