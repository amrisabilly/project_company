<nav class="font-bold text-[30px] w-full h-[5em] flex shadow-lg fixed top-0 left-0 z-50">
    <div class="h-full w-[8em] bg-gradient-to-br from-[#00a9ce] to-[#007a9c] flex items-center justify-center relative overflow-hidden cursor-pointer" onclick="goToHome()">
        <div class="absolute inset-0 bg-white opacity-10 transform -skew-y-12"></div>
        <div class="absolute top-2 right-2 w-4 h-4 bg-white opacity-20 rounded-full"></div>
        <div class="absolute bottom-3 left-3 w-2 h-2 bg-white opacity-30 rounded-full"></div>
        <div class="text-center text-white z-10 flex flex-col items-center">
            <div class="text-[22px] font-extrabold tracking-tight leading-none">Swift</div>
            <div class="text-[12px] font-light tracking-widest -mt-1">LOGISTIK</div>
            <div class="w-8 h-0.5 bg-white mt-1 opacity-80"></div>
        </div>
    </div>
    <div class="h-full w-full bg-white flex flex-col border-l-2 border-[#00a9ce]">
        <div class="bg-gradient-to-r from-[#00a9ce] to-[#00bdd6] h-[3em] flex items-center">
            <h1 class="text-center text-white w-full text-[18px] tracking-wide">Solusi Pengiriman & Logistik Terpercaya</h1>
        </div>
        <div class="h-[2em] flex items-center bg-gradient-to-r from-white to-gray-50">
            <div class="text-center text-[#00a9ce] w-full text-[14px] flex justify-center items-center space-x-2">
                <span class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 cursor-pointer px-2 py-1 rounded-md hover:bg-blue-50" onclick="goToHome()">Beranda</span>
                <span class="text-gray-300 font-light">•</span>
                <span class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 cursor-pointer px-2 py-1 rounded-md hover:bg-blue-50" onclick="scrollToSection('about')">Tentang</span>
                <span class="text-gray-300 font-light">•</span>
                <span class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 cursor-pointer px-2 py-1 rounded-md hover:bg-blue-50" onclick="scrollToSection('services')">Layanan</span>
                <span class="text-gray-300 font-light">•</span>
                <span class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 cursor-pointer px-2 py-1 rounded-md hover:bg-blue-50" onclick="scrollToSection('visi-misi')">Visi Misi</span>
                <span class="text-gray-300 font-light">•</span>
                <span class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 cursor-pointer px-2 py-1 rounded-md hover:bg-blue-50" onclick="goToContact()">Kontak</span>
            </div>
        </div>
    </div>
</nav>

<script>
    // Navigation functions
    function goToHome() {
        window.location.href = getBasePath() + 'home.php';
    }

    function goToContact() {
        window.location.href = getBasePath() + 'contact.php';
    }

    // Helper function to determine the correct base path
    function getBasePath() {
        const currentPath = window.location.pathname;
        if (currentPath.includes('/articles/')) {
            return '../';
        } else if (currentPath.includes('/components/') || currentPath.includes('/layout/')) {
            return '../';
        }
        return '';
    }

    function scrollToSection(sectionId) {
        const currentPath = window.location.pathname;

        // Check if we're on the home page
        if (currentPath.includes('home.php') || currentPath.endsWith('/') || currentPath.endsWith('/index.php')) {
            // If on home page, scroll to section
            const element = document.getElementById(sectionId);
            if (element) {
                // Calculate offset for fixed navbar
                const navbarHeight = 80; // 5em converted to pixels
                const elementPosition = element.offsetTop - navbarHeight;

                window.scrollTo({
                    top: elementPosition,
                    behavior: 'smooth'
                });

                // Update URL hash without triggering scroll
                history.pushState(null, null, '#' + sectionId);
            } else {
                // Section not found on current page, go to home page
                window.location.href = getBasePath() + 'home.php#' + sectionId;
            }
        } else {
            // If not on home page, navigate to home page with section
            window.location.href = getBasePath() + 'home.php#' + sectionId;
        }
    }

    // Handle hash navigation when page loads
    window.addEventListener('load', function() {
        if (window.location.hash) {
            const sectionId = window.location.hash.substring(1);
            setTimeout(() => {
                scrollToSection(sectionId);
            }, 100);
        }
    });

    // Enhanced navigation function for better cross-page navigation
    function navigateToSection(sectionId) {
        const currentPath = window.location.pathname;

        // Always go to home page for main sections
        if (currentPath.includes('home.php')) {
            scrollToSection(sectionId);
        } else {
            window.location.href = getBasePath() + 'home.php#' + sectionId;
        }
    }

    // Override the onclick handlers to use enhanced navigation
    document.addEventListener('DOMContentLoaded', function() {
        // Update navbar links to use enhanced navigation
        const navbarLinks = document.querySelectorAll('[onclick*="scrollToSection"]');
        navbarLinks.forEach(link => {
            const onclick = link.getAttribute('onclick');
            if (onclick) {
                const sectionMatch = onclick.match(/scrollToSection\('([^']+)'\)/);
                if (sectionMatch) {
                    const sectionId = sectionMatch[1];
                    link.setAttribute('onclick', `navigateToSection('${sectionId}')`);
                }
            }
        });
    });
</script>