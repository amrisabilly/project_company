<?php
// Function to get base URL
function getBaseUrl()
{
    $currentPath = $_SERVER['PHP_SELF'];
    $basePath = '';

    if (strpos($currentPath, '/articles/') !== false) {
        $basePath = '../../landing/';
    } elseif (strpos($currentPath, '/auth/') !== false) {
        $basePath = '../../landing/';
    } elseif (strpos($currentPath, '/components/') !== false || strpos($currentPath, '/layout/') !== false) {
        $basePath = '../';
    } else {
        $basePath = '';
    }

    return $basePath;
}

$baseUrl = getBaseUrl();
?>

<div class="fixed top-0 left-0 z-50">
    <!-- Sidebar Column -->
    <div class="bg-gradient-to-b from-gray-100 to-gray-300 w-[4em] h-screen transition-all duration-300 shadow-lg hover:w-[13.9em] group absolute z-50">
        <!-- Logo at Top -->
        <a href="<?= $baseUrl ?>home.php" class="h-[9.5em] w-full  flex items-center justify-center relative  hover:opacity-90 transition-opacity">
            <img src="logo.png" alt="">
        </a>

        <!-- Sidebar Menu Content -->
        <div class="p-3 flex flex-col h-full gap-60">
            <ul class="space-y-3 mt-8">
                <!-- Artikel -->
                <li class="text-gray-700">
                    <div class="flex items-center hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="toggleSubmenu('articles')">
                        <span class="text-lg min-w-[1.5em]">📄</span>
                        <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Artikel</span>
                        <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xs" id="articles-arrow">▶</span>
                    </div>
                    <ul id="articles-menu" class="ml-6 mt-2 space-y-1 opacity-0 group-hover:opacity-100 transition-all duration-300 max-h-0 overflow-hidden">
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('konsep')">
                            <span class="mr-2 text-[10px]">•</span>Konsep
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('teknologi')">
                            <span class="mr-2 text-[10px]">•</span>Teknologi
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('informasi')">
                            <span class="mr-2 text-[10px]">•</span>Informasi
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadAllArticles()">
                            <span class="mr-2 text-[10px]">•</span>Semua Artikel
                        </li>
                    </ul>
                </li>

                <!--  -->
                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadEventGallery()">
                    <span class="text-lg min-w-[1.5em]">🎉</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Event Gallery</span>
                </li>


                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadPhotoGallery()">
                    <span class="text-lg min-w-[1.5em]">📸</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Foto Klien</span>
                </li>

                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadContactPage()">
                    <span class="text-lg min-w-[1.5em]">📞</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Kontak</span>
                </li>
            </ul>
            <!-- <ul class="space-y-3 mt-8 flex-1 h-[10em] bg-red-600">
                <li class="text-gray-700">
                    <div class="flex items-center hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="toggleSubmenu('articles')">
                        <span class="text-lg min-w-[1.5em]">📄</span>
                        <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Artikel</span>
                        <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xs" id="articles-arrow">▶</span>
                    </div>
                    <ul id="articles-menu" class="ml-6 mt-2 space-y-1 opacity-0 group-hover:opacity-100 transition-all duration-300 max-h-0 overflow-hidden">
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('konsep')">
                            <span class="mr-2 text-[10px]">•</span>Konsep
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('teknologi')">
                            <span class="mr-2 text-[10px]">•</span>Teknologi
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('informasi')">
                            <span class="mr-2 text-[10px]">•</span>Informasi
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadAllArticles()">
                            <span class="mr-2 text-[10px]">•</span>Semua Artikel
                        </li>
                    </ul>
                </li>

                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadEventGallery()">
                    <span class="text-lg min-w-[1.5em]">🎉</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Event Gallery</span>
                </li>

                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadPhotoGallery()">
                    <span class="text-lg min-w-[1.5em]">📸</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Foto Klien</span>
                </li>

                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadContactPage()">
                    <span class="text-lg min-w-[1.5em]">📞</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Kontak</span>
                </li>
            </ul> -->

            <!-- Authentication Section at Bottom -->
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
                <div class="border-t border-gray-400 border-opacity-50 pt-4 space-y-2">
                    <a href="<?= $baseUrl ?>../auth/login.php" class="block w-full bg-[#00a9ce] text-white text-sm py-2 px-3 rounded-md hover:bg-opacity-80 transition-all duration-300 font-medium text-center">
                        Masuk
                    </a>
                    <a href="<?= $baseUrl ?>../auth/register.php" class="block w-full bg-white text-gray-700 text-sm py-2 px-3 rounded-md hover:bg-gray-50 transition-all duration-300 font-medium border border-gray-300 text-center">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar - Fixed position -->
    <nav class="font-bold text-[30px] w-full h-[5em] shadow-lg fixed top-0  z-40">
        <!-- Navbar Content -->
        <div class="h-full w-full bg-white flex flex-col border-l-2 border-[#00a9ce]">
            <div class="bg-gradient-to-r from-[#00a9ce] to-[#00bdd6] h-[3em] flex items-center">
                <h1 class="text-center text-white w-full text-[18px] tracking-wide">Solusi Pengiriman & Logistik Terpercaya</h1>
            </div>
            <div class="h-[2em] flex items-center bg-gradient-to-r from-white to-gray-50">
                <div class="text-center text-[#00a9ce] w-full text-[14px] flex justify-center items-center space-x-2">
                    <a href="<?= $baseUrl ?>home.php" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Beranda</a>
                    <span class="text-gray-300 font-light">•</span>
                    <a href="<?= $baseUrl ?>home.php#about" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Tentang</a>
                    <span class="text-gray-300 font-light">•</span>
                    <a href="<?= $baseUrl ?>home.php#services" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Layanan</a>
                    <span class="text-gray-300 font-light">•</span>
                    <a href="<?= $baseUrl ?>home.php#visi-misi" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Visi Misi</a>
                    <span class="text-gray-300 font-light">•</span>
                    <a href="<?= $baseUrl ?>contact.php" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    function toggleSubmenu(menuId) {
        const submenu = document.getElementById(menuId + '-menu');
        const arrow = document.getElementById(menuId + '-arrow');

        if (submenu.style.maxHeight === '0px' || submenu.style.maxHeight === '') {
            submenu.style.maxHeight = '200px';
            arrow.innerHTML = '▼';
        } else {
            submenu.style.maxHeight = '0px';
            arrow.innerHTML = '▶';
        }
    }

    // Placeholder functions for menu actions
    function loadArticleCategory(category) {
        console.log('Loading articles for category:', category);
        // Implement your category loading logic here
    }

    function loadAllArticles() {
        console.log('Loading all articles');
        // Implement your all articles loading logic here
    }

    function loadEventGallery() {
        console.log('Loading event gallery');
        // Implement your event gallery loading logic here
    }

    function loadPhotoGallery() {
        console.log('Loading photo gallery');
        // Implement your photo gallery loading logic here
    }

    function loadContactPage() {
        console.log('Loading contact page');
        // Implement your contact page loading logic here
    }
</script>