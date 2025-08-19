<?php include '../layout/header.php' ?>

<?php include '../components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include '../components/sidebar.php' ?>

<!-- Main Content Area -->
<div class="ml-[8em] p-6 pt-[15em]" id="mainContent">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <nav class="text-sm text-gray-500">
            <a href="../home.php" class="hover:text-[#00a9ce]">Beranda</a>
            <span class="mx-2">></span>
            <a href="index.php" class="hover:text-[#00a9ce]">Artikel</a>
            <span class="mx-2">></span>
            <span class="text-[#00a9ce]">Konsep</span>
        </nav>
    </div>

    <!-- Header -->
    <div class="bg-gradient-to-br from-[#00a9ce] to-[#007a9c] rounded-lg shadow-md p-8 mb-8 text-white">
        <div class="text-center">
            <div class="text-5xl mb-4">💡</div>
            <h1 class="text-4xl font-bold mb-4">Artikel Konsep</h1>
            <p class="text-lg opacity-90">Memahami konsep dasar dan teori dalam dunia logistik modern</p>
        </div>
    </div>

    <!-- Articles Grid -->
    <div class="space-y-8">
        <!-- Article 1 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="md:flex">
                <div class="md:w-1/3 bg-gradient-to-br from-blue-100 to-blue-200 p-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-6xl text-[#00a9ce] mb-4">🔗</div>
                        <span class="text-sm text-gray-600 font-medium">SUPPLY CHAIN</span>
                    </div>
                </div>
                <div class="md:w-2/3 p-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-[#00a9ce] text-white text-xs px-3 py-1 rounded-full font-medium">KONSEP DASAR</span>
                        <span class="text-gray-500 text-sm ml-4">📅 20 Januari 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Memahami Supply Chain Management dalam Era Digital</h2>
                    <p class="text-gray-600 mb-4">Supply Chain Management (SCM) adalah pendekatan strategis untuk mengelola aliran barang, informasi, dan keuangan dari pemasok hingga konsumen akhir. Dalam era digital saat ini, konsep SCM mengalami transformasi signifikan dengan integrasi teknologi IoT, AI, dan blockchain.</p>
                    <p class="text-gray-600 mb-6">Artikel ini membahas prinsip-prinsip dasar SCM, komponen utama dalam rantai pasok, serta strategi optimasi yang dapat diterapkan perusahaan untuk meningkatkan efisiensi operasional dan kepuasan pelanggan.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <span>👤 Dr. Ahmad Logistics</span>
                            <span class="mx-2">•</span>
                            <span>⏱️ 8 menit baca</span>
                        </div>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-6 py-2 rounded-md transition-colors text-sm font-medium">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 2 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="md:flex">
                <div class="md:w-1/3 bg-gradient-to-br from-green-100 to-green-200 p-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-6xl text-green-600 mb-4">🏢</div>
                        <span class="text-sm text-gray-600 font-medium">WAREHOUSE</span>
                    </div>
                </div>
                <div class="md:w-2/3 p-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-green-500 text-white text-xs px-3 py-1 rounded-full font-medium">OPTIMASI</span>
                        <span class="text-gray-500 text-sm ml-4">📅 18 Januari 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Strategi Optimasi Gudang untuk Efisiensi Maksimal</h2>
                    <p class="text-gray-600 mb-4">Optimasi gudang merupakan kunci utama dalam meningkatkan efisiensi operasional logistik. Konsep ini meliputi penataan layout yang efektif, sistem inventory management yang akurat, serta implementasi teknologi otomasi untuk meminimalkan waktu dan biaya operasional.</p>
                    <p class="text-gray-600 mb-6">Pelajari teknik-teknik terbaru dalam warehouse optimization, mulai dari metode ABC analysis, cross-docking, hingga implementasi WMS (Warehouse Management System) untuk mencapai efisiensi maksimal.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <span>👤 Sarah Warehouse Expert</span>
                            <span class="mx-2">•</span>
                            <span>⏱️ 6 menit baca</span>
                        </div>
                        <button class="bg-green-500 hover:bg-green-700 text-white px-6 py-2 rounded-md transition-colors text-sm font-medium">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Article 3 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="md:flex">
                <div class="md:w-1/3 bg-gradient-to-br from-emerald-100 to-emerald-200 p-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-6xl text-emerald-600 mb-4">🌱</div>
                        <span class="text-sm text-gray-600 font-medium">GREEN LOGISTICS</span>
                    </div>
                </div>
                <div class="md:w-2/3 p-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-emerald-500 text-white text-xs px-3 py-1 rounded-full font-medium">SUSTAINABILITY</span>
                        <span class="text-gray-500 text-sm ml-4">📅 15 Januari 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Green Logistics: Konsep Logistik Ramah Lingkungan</h2>
                    <p class="text-gray-600 mb-4">Green Logistics atau logistik hijau adalah konsep pengelolaan rantai pasok yang mengintegrasikan aspek keberlanjutan lingkungan dalam setiap aktivitas logistik. Konsep ini mencakup pengurangan emisi karbon, optimasi konsumsi energi, dan pengelolaan limbah yang bertanggung jawab.</p>
                    <p class="text-gray-600 mb-6">Eksplorasi berbagai strategi implementasi green logistics, manfaat ekonomi dan lingkungan yang dapat diperoleh, serta tantangan yang dihadapi perusahaan dalam menerapkan praktik logistik berkelanjutan.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <span>👤 Prof. Environmental Studies</span>
                            <span class="mx-2">•</span>
                            <span>⏱️ 10 menit baca</span>
                        </div>
                        <button class="bg-emerald-500 hover:bg-emerald-700 text-white px-6 py-2 rounded-md transition-colors text-sm font-medium">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Load More Button -->
    <div class="text-center mt-8">
        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-8 py-3 rounded-lg transition-colors font-medium">
            Muat Artikel Lainnya
        </button>
    </div>
</div>

<?php include '../layout/end-header.php' ?>