<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/script.js" defer></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo (Font Awesome) -->
        <a href="#" class="text-2xl font-bold text-blue-600 flex items-center">
            <i class="fas fa-plane-departure text-3xl"></i> <!-- Ikon Font Awesome -->
            <span class="ml-2">TravelKu</span> <!-- Nama brand -->
        </a>

        <!-- Menu Links -->
        <ul class="hidden md:flex space-x-8">
            <li><a href="#beranda" class="text-gray-700 hover:text-blue-600 transition duration-300">HOME</a></li>
            <li><a href="#tentang" class="text-gray-700 hover:text-blue-600 transition duration-300">ABOUT US</a></li>
            <li><a href="#destinasi" class="text-gray-700 hover:text-blue-600 transition duration-300">DESTINATION</a></li>
            <li><a href="#testimoni" class="text-gray-700 hover:text-blue-600 transition duration-300">TESTIMONI</a></li>
            <li><a href="#gallery" class="text-gray-700 hover:text-blue-600 transition duration-300">GALLERY</a></li>
            <li><a href="#kontak" class="text-gray-700 hover:text-blue-600 transition duration-300">CONTACT US</a></li>
        </ul>

        <!-- Tombol BOOK NOW -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="booking.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                BOOK NOW
            </a>
        </div>

        <!-- Tombol Menu Mobile -->
        <button class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>

 <!-- Hero Section -->
<div id="beranda" class="relative bg-cover bg-center text-white py-40 flex items-center justify-center" style="background-image: url('assets/images/header.png');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-black/20"></div> <!-- Overlay gradasi -->
    <div class="container mx-auto text-center relative z-10">
        <h1 class="text-6xl font-extrabold drop-shadow-lg animate-fade-in-up">
            Jelajahi <span class="">Keindahan Alam</span>
        </h1>
        <p class="mt-4 text-xl max-w-2xl mx-auto animate-fade-in-up delay-200">
            Nikmati pengalaman wisata tak terlupakan dengan TravelKu!
        </p>
        <a href="booking.php"
           class="mt-8 inline-block bg-white text-blue-900 px-8 py-4 rounded-full font-semibold text-lg shadow-lg hover:bg-yellow-500 transition-transform transform hover:scale-105 animate-fade-in-up delay-400">
            Pesan Sekarang
        </a>
    </div>
</div>

<!-- Tambahkan animasi Tailwind -->
<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 1s ease-out;
    }
</style>

    <!-- Layanan Kami -->
    <div class="container mx-auto mt-16">
    <h2 class="text-4xl font-bold text-center text-blue-600" data-aos="fade-up">Layanan Kami</h2>
    <p class="text-center text-gray-600 mt-2" data-aos="fade-up" data-aos-delay="100">
        Kami menyediakan berbagai layanan perjalanan terbaik untuk Anda!
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
        <!-- Card 1: Penerbangan -->
        <div class="bg-white p-8 rounded-xl shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center justify-center w-20 h-20 bg-blue-100 rounded-full mx-auto">
                <!-- Ikon SVG untuk Penerbangan -->
                <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-semibold mt-6 text-blue-600">Penerbangan</h3>
            <p class="mt-2 text-gray-600">Kami menyediakan tiket pesawat dengan harga terbaik.</p>
        </div>
        
        <!-- Card 2: Hotel -->
        <div class="bg-white p-8 rounded-xl shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center justify-center w-20 h-20 bg-yellow-100 rounded-full mx-auto">
                <!-- Ikon SVG untuk Hotel -->
                <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-semibold mt-6 text-yellow-500">Hotel</h3>
            <p class="mt-2 text-gray-600">Temukan penginapan nyaman dengan harga terjangkau.</p>
        </div>
        
        <!-- Card 3: Tur Wisata -->
        <div class="bg-white p-8 rounded-xl shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="600">
            <div class="flex items-center justify-center w-20 h-20 bg-green-100 rounded-full mx-auto">
                <!-- Ikon SVG untuk Tur Wisata -->
                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-semibold mt-6 text-green-500">Tur Wisata</h3>
            <p class="mt-2 text-gray-600">Nikmati tur wisata dengan pemandu profesional.</p>
        </div>
    </div>
</div>


    <!-- Destinasi Populer -->
    <div id="destinasi" class="container mx-auto mt-16">
    <h2 class="text-3xl font-bold text-center" data-aos="fade-up">Destinasi Populer</h2>
    <p class="mt-4 text-center text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        Temukan destinasi terbaik kami yang telah dipilih oleh ribuan traveler.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        <!-- Destinasi 1: Bali -->
        <div class="relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/images/bali.png" alt="Bali" class="w-full h-64 object-cover rounded-2xl transform hover:scale-105 transition duration-300">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6 rounded-2xl">
                <h3 class="text-xl font-semibold text-white">Bali</h3>
                <p class="mt-2 text-gray-300">Pulau surga dengan pantai indah dan budaya yang kaya.</p>
                <div class="mt-3 flex items-center">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="ml-2 text-white">4.5/5</span>
                </div>
            </div>
        </div>

        <!-- Destinasi 2: Lombok -->
        <div class="relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/images/lombok.png" alt="Lombok" class="w-full h-64 object-cover rounded-2xl transform hover:scale-105 transition duration-300">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6 rounded-2xl">
                <h3 class="text-xl font-semibold text-white">Lombok</h3>
                <p class="mt-2 text-gray-300">Destinasi eksotis dengan Gunung Rinjani dan pantai pasir putih.</p>
                <div class="mt-3 flex items-center">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="ml-2 text-white">5/5</span>
                </div>
            </div>
        </div>

        <!-- Destinasi 3: Yogyakarta -->
        <div class="relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="600">
            <img src="assets/images/yogyakarta.png" alt="Yogyakarta" class="w-full h-64 object-cover rounded-2xl transform hover:scale-105 transition duration-300">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6 rounded-2xl">
                <h3 class="text-xl font-semibold text-white">Yogyakarta</h3>
                <p class="mt-2 text-gray-300">Kota budaya dengan Candi Borobudur dan Malioboro.</p>
                <div class="mt-3 flex items-center">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="ml-2 text-white">4.7/5</span>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Tentang Kami -->
<div id="tentang" class="bg-gradient-to-r from-blue-50 to-indigo-50 py-20">
    <div class="container mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-5xl font-bold text-center text-blue-900" data-aos="fade-up">Tentang Kami</h2>
        <p class="text-center text-gray-600 mt-4 text-lg" data-aos="fade-up" data-aos-delay="100">
            TravelKu adalah mitra terbaik Anda untuk liburan yang tak terlupakan.
        </p>
        
        <!-- Konten -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-16">
            <!-- Gambar -->
            <div class="relative" data-aos="fade-right">
                <img src="assets/images/about.png" alt="Tentang Kami" class="w-full h-auto rounded-xl shadow-2xl">
                <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900">10+ Tahun Pengalaman</h3>
                    <p class="text-gray-600 mt-2">Kami telah melayani ribuan pelanggan sejak 2010.</p>
                </div>
            </div>

            <!-- Teks -->
            <div class="flex flex-col justify-center" data-aos="fade-left">
                <p class="text-gray-700 text-lg leading-relaxed">
                    TravelKu adalah perusahaan travel terpercaya yang telah melayani ribuan pelanggan sejak 2010. Kami menawarkan berbagai paket liburan ke destinasi populer di Indonesia dan luar negeri.
                </p>
                <p class="mt-6 text-gray-700 text-lg leading-relaxed">
                    Tim kami terdiri dari profesional berpengalaman yang siap membantu Anda merencanakan liburan impian Anda. Dengan layanan yang ramah dan solusi yang tepat, kami berkomitmen untuk memberikan pengalaman perjalanan yang tak terlupakan.
                </p>
                <div class="mt-8">
                    <a href="#layanan" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Lihat Layanan Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- gallery -->
<div id="gallery" class="bg-gray-50 py-16 mt-16">
<div class="container mx-auto mt-16">
    <h2 class="text-4xl font-bold text-center text-blue-600" data-aos="fade-up">Gallery Foto</h2>
    <p class="text-center text-gray-600 mt-2" data-aos="fade-up" data-aos-delay="100">
        Jelajahi momen indah dari perjalanan kami.
    </p>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-12">
        <!-- Foto 1 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="200">
            <img src="assets/images/galery/galery1.png" alt="Gallery 1" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Pantai Bali</p>
            </div>
        </div>

        <!-- Foto 2 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="300">
            <img src="assets/images/galery/galery2.png" alt="Gallery 2" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Gunung Rinjani</p>
            </div>
        </div>

        <!-- Foto 3 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="400">
            <img src="assets/images/galery/galery3.png" alt="Gallery 3" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Candi Borobudur</p>
            </div>
        </div>

        <!-- Foto 4 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="500">
            <img src="assets/images/galery/galery4.png" alt="Gallery 4" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Danau Toba</p>
            </div>
        </div>

        <!-- Foto 5 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="600">
            <img src="assets/images/galery/galery5.png" alt="Gallery 5" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Raja Ampat</p>
            </div>
        </div>

        <!-- Foto 6 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="700">
            <img src="assets/images/galery/galery6.png" alt="Gallery 6" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Pulau Komodo</p>
            </div>
        </div>

        <!-- Foto 7 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="800">
            <img src="assets/images/galery/galery7.png" alt="Gallery 7" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Bromo Tengger Semeru</p>
            </div>
        </div>

        <!-- Foto 8 -->
        <div class="relative overflow-hidden rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl" 
             data-aos="fade-up" data-aos-delay="900">
            <img src="assets/images/galery/galery8.png" alt="Gallery 8" class="w-full h-64 object-cover rounded-xl">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                <p class="text-white text-lg font-semibold">Ubud, Bali</p>
            </div>
        </div>
    </div>
</div>
    <!-- Testimoni -->
    <div id="testimoni" class="container mx-auto mt-16 px-4">
    <h2 class="text-4xl font-bold text-center text-gray-800 flex items-center justify-center gap-2" data-aos="fade-up">
        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 10l5 5m0 0l5-5m-5 5V3"></path>
        </svg>
        Testimoni Pelanggan
    </h2>
    <p class="text-center text-gray-600 mt-2" data-aos="fade-up" data-aos-delay="100">
        Apa kata mereka tentang pengalaman bersama TravelKu?
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform transform hover:scale-105 hover:rotate-1" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/images/testi1.png" alt="Travel 1" class="w-full h-40 object-cover rounded-md shadow-md mb-4">
            <div class="flex items-center gap-4">
                <img src="assets/images/user1.jpg" alt="User 1" class="w-14 h-14 rounded-full shadow-md">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.518 4.674a1 1 0 00.95.69h4.924c.969 0 1.371 1.24.588 1.81l-3.983 2.89a1 1 0 00-.364 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118l-3.983-2.89a1 1 0 00-1.175 0l-3.983 2.89c-.784.57-1.84-.197-1.54-1.118l1.518-4.674a1 1 0 00-.364-1.118l-3.983-2.89c-.783-.57-.38-1.81.588-1.81h4.924a1 1 0 00.95-.69l1.518-4.674z"></path>
                        </svg>
                        Ayu Rahayu
                    </h3>
                    <p class="text-sm text-gray-500">Pelanggan Setia</p>
                </div>
            </div>
            <p class="mt-4 text-gray-700 italic">“Liburan ke Bali bersama TravelKu sangat menyenangkan! Pelayanan ramah dan profesional.”</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform transform hover:scale-105 hover:rotate-1" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/images/testi2.png" alt="Travel 2" class="w-full h-40 object-cover rounded-md shadow-md mb-4">
            <div class="flex items-center gap-4">
                <img src="assets/images/user2.jpg" alt="User 2" class="w-14 h-14 rounded-full shadow-md">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.518 4.674a1 1 0 00.95.69h4.924c.969 0 1.371 1.24.588 1.81l-3.983 2.89a1 1 0 00-.364 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118l-3.983-2.89a1 1 0 00-1.175 0l-3.983 2.89c-.784.57-1.84-.197-1.54-1.118l1.518-4.674a1 1 0 00-.364-1.118l-3.983-2.89c-.783-.57-.38-1.81.588-1.81h4.924a1 1 0 00.95-.69l1.518-4.674z"></path>
                        </svg>
                        Vicidior
                    </h3>
                    <p class="text-sm text-gray-500">Pelanggan Setia</p>
                </div>
            </div>
            <p class="mt-4 text-gray-700 italic">“Lombok adalah surga! Terima kasih TravelKu untuk pengalaman tak terlupakan.”</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform transform hover:scale-105 hover:rotate-1" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/images/testi3.png" alt="Travel 2" class="w-full h-40 object-cover rounded-md shadow-md mb-4">
            <div class="flex items-center gap-4">
                <img src="assets/images/user2.jpg" alt="User 2" class="w-14 h-14 rounded-full shadow-md">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.518 4.674a1 1 0 00.95.69h4.924c.969 0 1.371 1.24.588 1.81l-3.983 2.89a1 1 0 00-.364 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118l-3.983-2.89a1 1 0 00-1.175 0l-3.983 2.89c-.784.57-1.84-.197-1.54-1.118l1.518-4.674a1 1 0 00-.364-1.118l-3.983-2.89c-.783-.57-.38-1.81.588-1.81h4.924a1 1 0 00.95-.69l1.518-4.674z"></path>
                        </svg>
                        Jonathan liandi
                    </h3>
                    <p class="text-sm text-gray-500">Pelanggan Setia</p>
                </div>
            </div>
            <p class="mt-4 text-gray-700 italic">“Lombok adalah surga! Terima kasih TravelKu untuk pengalaman tak terlupakan.”</p>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-blue-600 text-white mt-16 py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 TravelKu. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Inisialisasi AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>