<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-bold text-yellow-600">Product Manager</h1>
            <nav class="space-x-6">
                <a href="#home" class="hover:text-yellow-600">Home</a>
                <a href="#about" class="hover:text-yellow-600">About</a>
                <a href="#features" class="hover:text-yellow-600">Features</a>
                <a href="#faq" class="hover:text-yellow-600">FAQ</a>
                <a href="#contact" class="hover:text-yellow-600">Contact</a>
            </nav>
            <a href="/register" class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700">Get Started</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-28 bg-white">
        <div class="container mx-auto grid md:grid-cols-2 items-center px-6 py-16">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 leading-tight">Kelola Produk Anda Dengan Mudah</h2>
                <p class="mt-4 text-gray-600">
                    Aplikasi manajemen produk modern untuk mengatur stok, harga, dan laporan hanya dengan satu dashboard.
                </p>
                <a href="/login" class="mt-6 inline-block bg-yellow-600 text-white px-6 py-3 rounded-lg shadow hover:bg-yellow-700">Mulai Sekarang</a>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/anim.gif') }}"  alt="Product Management" class="w-80">
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-12">Fitur Utama</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-yellow-50 p-6 rounded-lg shadow">
                    <h4 class="text-xl font-semibold mb-2">Kelola Stok</h4>
                    <p class="text-gray-600">Pantau stok barang secara real-time dan hindari kehabisan produk.</p>
                </div>
                <div class="bg-yellow-50 p-6 rounded-lg shadow">
                    <h4 class="text-xl font-semibold mb-2">Laporan Penjualan</h4>
                    <p class="text-gray-600">Dapatkan laporan lengkap untuk meningkatkan strategi bisnis.</p>
                </div>
                <div class="bg-yellow-50 p-6 rounded-lg shadow">
                    <h4 class="text-xl font-semibold mb-2">Multi User</h4>
                    <p class="text-gray-600">Akses mudah untuk tim dengan sistem hak akses yang aman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-16 bg-yellow-50">
        <div class="container mx-auto grid md:grid-cols-2 gap-8 items-center px-6">
            <img src="https://img.icons8.com/fluency/512/dashboard-layout.png" alt="Dashboard" class="rounded-lg shadow">
            <div>
                <h3 class="text-3xl font-bold mb-4">Tentang Aplikasi</h3>
                <p class="text-gray-600">
                    Aplikasi ini dirancang untuk memudahkan UMKM dan perusahaan dalam mengelola produk.
                    Dengan fitur yang lengkap, bisnis Anda akan berjalan lebih efisien.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16 bg-yellow-400">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-8 text-white">FAQ</h3>
            <div class="space-y-4">
                <details class="bg-white rounded-lg p-4 shadow">
                    <summary class="font-semibold cursor-pointer">Apakah aplikasi ini gratis?</summary>
                    <p class="mt-2 text-gray-600">Ya, ada versi gratis dengan fitur terbatas. Premium tersedia.</p>
                </details>
                <details class="bg-white rounded-lg p-4 shadow">
                    <summary class="font-semibold cursor-pointer">Apakah bisa multi user?</summary>
                    <p class="mt-2 text-gray-600">Ya, bisa digunakan oleh beberapa user dengan role berbeda.</p>
                </details>
                <details class="bg-white rounded-lg p-4 shadow">
                    <summary class="font-semibold cursor-pointer">Bagaimana cara mendaftar?</summary>
                    <p class="mt-2 text-gray-600">Klik tombol "Get Started" untuk membuat akun baru.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <p>&copy; 2025 Product Manager. All rights reserved.</p>
            <div class="space-x-4">
                <a href="#" class="hover:text-yellow-400">Privacy Policy</a>
                <a href="#" class="hover:text-yellow-400">Terms</a>
            </div>
        </div>
    </footer>

</body>
</html>
