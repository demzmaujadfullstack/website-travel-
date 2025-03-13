<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $service = $_POST['service']; // Ambil data layanan dari form
    $date = $_POST['date'];

    // Query untuk menyimpan data ke database
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, destination, service, date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $destination, $service, $date]);

    // Redirect ke halaman pembayaran
    header("Location: payment.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - TravelKu</title>
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
                <li><a href="#paket" class="text-gray-700 hover:text-blue-600 transition duration-300">PACKAGES</a></li>
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

    <!-- Form Booking -->
    <form action="booking.php" method="POST" class="max-w-lg mx-auto mt-8 bg-white p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Form Booking</h2>
        
        <!-- Nama Lengkap -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-semibold mb-2">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Destinasi -->
        <div class="mb-4">
            <label for="destination" class="block text-gray-700 font-semibold mb-2">Destinasi</label>
            <select name="destination" id="destination" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                <option value="Bali">Bali</option>
                <option value="Lombok">Lombok</option>
                <option value="Yogyakarta">Yogyakarta</option>
            </select>
        </div>

        <!-- Layanan -->
        <div class="mb-4">
            <label for="service" class="block text-gray-700 font-semibold mb-2">Layanan</label>
            <select name="service" id="service" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                <option value="Penerbangan">Penerbangan</option>
                <option value="Hotel">Hotel</option>
                <option value="Tur Wisata">Tur Wisata</option>
            </select>
        </div>

        <!-- Tanggal Keberangkatan -->
        <div class="mb-6">
            <label for="date" class="block text-gray-700 font-semibold mb-2">Tanggal Keberangkatan</label>
            <input type="date" name="date" id="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
            Pesan Sekarang
        </button>
    </form>

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