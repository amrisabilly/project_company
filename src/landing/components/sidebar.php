<!-- Side Bar kiri -->
<nav class="flex fixed left-0 top-[10em] z-40">
    <!-- Sidebar Content -->
    <div id="sidebar" class="bg-gradient-to-b from-[#00a9ce] to-[#007a9c] h-[calc(90vh-5em)] w-[4em] transition-all duration-300 shadow-lg overflow-hidden hover:w-[13.9em] group">
        <div class="p-3 h-full flex flex-col">
            <!-- Main Navigation -->
            <ul class="space-y-3 mt-4 flex-1">
                <!-- Artikel Section -->
                <li class="text-white">
                    <div class="flex items-center hover:bg-white hover:bg-opacity-20 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="toggleSubmenu('articles')">
                        <span class="text-lg">📄</span>
                        <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Artikel</span>
                        <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xs" id="articles-arrow">▶</span>
                    </div>
                    <ul id="articles-menu" class="ml-6 mt-2 space-y-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 hidden">
                        <li class="flex items-center text-xs text-gray-200 hover:text-white cursor-pointer py-1 pl-2 hover:bg-white hover:bg-opacity-10 rounded" onclick="loadArticleCategory('konsep')">
                            <span class="mr-2 text-[10px]">•</span>Konsep
                        </li>
                        <li class="flex items-center text-xs text-gray-200 hover:text-white cursor-pointer py-1 pl-2 hover:bg-white hover:bg-opacity-10 rounded" onclick="loadArticleCategory('teknologi')">
                            <span class="mr-2 text-[10px]">•</span>Teknologi
                        </li>
                        <li class="flex items-center text-xs text-gray-200 hover:text-white cursor-pointer py-1 pl-2 hover:bg-white hover:bg-opacity-10 rounded" onclick="loadArticleCategory('informasi')">
                            <span class="mr-2 text-[10px]">•</span>Informasi
                        </li>
                        <li class="flex items-center text-xs text-gray-200 hover:text-white cursor-pointer py-1 pl-2 hover:bg-white hover:bg-opacity-10 rounded" onclick="loadAllArticles()">
                            <span class="mr-2 text-[10px]">•</span>Semua Artikel
                        </li>
                    </ul>
                </li>

                <!-- Event Gallery -->
                <li class="flex items-center text-white hover:bg-white hover:bg-opacity-20 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadEventGallery()">
                    <span class="text-lg">🎉</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Event Gallery</span>
                </li>

                <!-- Foto Klien -->
                <li class="flex items-center text-white hover:bg-white hover:bg-opacity-20 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadPhotoGallery()">
                    <span class="text-lg">📸</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Foto Klien</span>
                </li>

                <!-- Contact -->
                <li class="flex items-center text-white hover:bg-white hover:bg-opacity-20 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadContactPage()">
                    <span class="text-lg">📞</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Kontak</span>
                </li>

            </ul>

            <!-- Authentication Section at Bottom -->
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-6">
                <div class="border-t border-white border-opacity-30 pt-4 space-y-2">
                    <button onclick="loadSignIn()" class="w-full bg-white bg-opacity-20 text-white text-sm py-2 px-3 rounded-md hover:bg-opacity-30 transition-all duration-300 font-medium">
                        Sign in
                    </button>
                    <button onclick="loadSignUp()" class="w-full bg-white text-[#00a9ce] text-sm py-2 px-3 rounded-md hover:bg-gray-100 transition-all duration-300 font-medium">
                        Sign up
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toggle Button -->
    <div class="h-[calc(100vh-5em)] w-[4em] flex items-start justify-center pt-4">
        <button onclick="toggleSidebar()" class="bg-[#00a9ce] hover:bg-[#007a9c] text-white p-3 rounded-md shadow-lg transition-all duration-300 hover:scale-105">
            <span id="toggleIcon">→</span>
        </button>
    </div>
</nav>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const toggleIcon = document.getElementById('toggleIcon');

        if (sidebar.classList.contains('w-[4em]')) {
            sidebar.classList.remove('w-[4em]', 'hover:w-[15em]');
            sidebar.classList.add('w-[15em]');
            toggleIcon.textContent = '←';
        } else {
            sidebar.classList.remove('w-[15em]');
            sidebar.classList.add('w-[4em]', 'hover:w-[15em]');
            toggleIcon.textContent = '→';
        }
    }

    function toggleSubmenu(menuId) {
        const menu = document.getElementById(menuId + '-menu');
        const arrow = document.getElementById(menuId + '-arrow');

        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            arrow.textContent = '▼';
        } else {
            menu.classList.add('hidden');
            arrow.textContent = '▶';
        }
    }

    function loadEventGallery() {
        const mainContent = document.getElementById('mainContent');
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Galeri Acara</h2>
            <p class="text-gray-600 mb-8">Dokumentasi berbagai acara dan kegiatan perusahaan kami</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-100 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🎊</div>
                    <h3 class="font-semibold mb-2">Ulang Tahun Perusahaan</h3>
                    <p class="text-sm text-gray-600">Perayaan Ulang Tahun ke-15</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="font-semibold mb-2">Upacara Penghargaan</h3>
                    <p class="text-sm text-gray-600">Mitra Logistik Terbaik 2024</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="font-semibold mb-2">Acara Kemitraan</h3>
                    <p class="text-sm text-gray-600">Penandatanganan Kemitraan Strategis</p>
                </div>
            </div>
        </div>
    `;
    }

    function loadPhotoGallery() {
        const mainContent = document.getElementById('mainContent');
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Galeri Foto Klien</h2>
            <p class="text-gray-600 mb-8">Dokumentasi kegiatan dan kerjasama dengan klien-klien kami</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                        <div class="text-center text-gray-600">
                            <span class="text-4xl">📦</span>
                            <p class="mt-2 text-sm">Muat Barang</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-2">PT. ABC Logistik</h3>
                        <p class="text-sm text-gray-600">Pengiriman barang elektronik ke Jakarta</p>
                        <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2024</span>
                    </div>
                </div>

                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-blue-300 to-blue-400 flex items-center justify-center">
                        <div class="text-center text-white">
                            <span class="text-4xl">🚛</span>
                            <p class="mt-2 text-sm">Armada Truk</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-2">CV. Maju Bersama</h3>
                        <p class="text-sm text-gray-600">Armada truk untuk distribusi nasional</p>
                        <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2024</span>
                    </div>
                </div>

                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-green-300 to-green-400 flex items-center justify-center">
                        <div class="text-center text-white">
                            <span class="text-4xl">🏢</span>
                            <p class="mt-2 text-sm">Gudang</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-2">PT. Global Trading</h3>
                        <p class="text-sm text-gray-600">Fasilitas gudang modern di Surabaya</p>
                        <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2023</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-6 py-3 rounded-lg transition-colors duration-300 font-medium">
                    Muat Lebih Banyak Foto
                </button>
            </div>
        </div>
    `;
    }

    function loadKamiLogin() {
        const mainContent = document.getElementById('mainContent');
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Tim Kami</h2>
            <p class="text-gray-600 mb-8">Bertemu dengan tim profesional yang siap melayani kebutuhan logistik Anda</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <div class="w-20 h-20 bg-[#00a9ce] rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl">👨</div>
                    <h3 class="font-semibold text-gray-800 mb-2">John Doe</h3>
                    <p class="text-sm text-gray-600">CEO & Founder</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <div class="w-20 h-20 bg-[#00a9ce] rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl">👩</div>
                    <h3 class="font-semibold text-gray-800 mb-2">Jane Smith</h3>
                    <p class="text-sm text-gray-600">Operations Manager</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <div class="w-20 h-20 bg-[#00a9ce] rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl">👨</div>
                    <h3 class="font-semibold text-gray-800 mb-2">Mike Johnson</h3>
                    <p class="text-sm text-gray-600">Logistics Director</p>
                </div>
            </div>
        </div>
    `;
    }

    function loadSignIn() {
        const mainContent = document.getElementById('mainContent');
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8 max-w-md mx-auto">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Masuk</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <button type="submit" class="w-full bg-[#00a9ce] text-white py-2 px-4 rounded-md hover:bg-[#007a9c] transition-colors">
                    Masuk
                </button>
            </form>
        </div>
    `;
    }

    function loadSignUp() {
        const mainContent = document.getElementById('mainContent');
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8 max-w-md mx-auto">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Daftar</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <button type="submit" class="w-full bg-[#00a9ce] text-white py-2 px-4 rounded-md hover:bg-[#007a9c] transition-colors">
                    Daftar
                </button>
            </form>
        </div>
    `;
    }

    function loadContactPage() {
        window.location.href = 'contact.php';
    }

    function loadHomePage() {
        window.location.href = 'home.php';
    }

    // Enhanced functions for better navigation
    function loadAboutSection() {
        if (window.location.pathname.includes('home.php')) {
            scrollToSection('about');
        } else {
            window.location.href = 'home.php#about';
        }
    }

    function loadServicesSection() {
        if (window.location.pathname.includes('home.php')) {
            scrollToSection('services');
        } else {
            window.location.href = 'home.php#services';
        }
    }

    // Enhanced article navigation functions
    function loadArticleCategory(category) {
        const currentPath = window.location.pathname;
        if (currentPath.includes('articles/')) {
            window.location.href = `${category}.php`;
        } else {
            window.location.href = `articles/${category}.php`;
        }
    }

    function loadAllArticles() {
        const currentPath = window.location.pathname;
        if (currentPath.includes('articles/')) {
            window.location.href = 'index.php';
        } else {
            window.location.href = 'articles/index.php';
        }
    }
</script>