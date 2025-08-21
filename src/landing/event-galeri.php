<?php include 'layout/header.php' ?>

<?php include 'components/navbar.php' ?>


<div class="bg-white rounded-lg shadow-md p-8 pt-[12em]">
    <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Galeri Acara</h2>
    <p class="text-gray-600 mb-8 text-center">Dokumentasi kegiatan dan kerjasama dengan klien-klien kami</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 ps-[4em] mt-[5em]">
        <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="h-48 flex items-center justify-center relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://logisly.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findex_shipper.f2a6c4a1.jpg&w=3840&q=75');">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="text-center text-white relative z-10">
                </div>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-gray-800 mb-2">PT. ABC Logistik</h3>
                <p class="text-sm text-gray-600">Pengiriman barang elektronik ke Jakarta</p>
                <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2024</span>
            </div>
        </div>

        <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="h-48 flex items-center justify-center relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://logisly.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findex_ts.d27e9841.jpg&w=3840&q=75');">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="text-center text-white relative z-10">
                </div>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-gray-800 mb-2">CV. Maju Bersama</h3>
                <p class="text-sm text-gray-600">Armada truk untuk distribusi nasional</p>
                <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2024</span>
            </div>
        </div>

        <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="h-48 flex items-center justify-center relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://logisly.com/_next/image?url=%2Fstatic%2Fimg%2Fkumpulan-truk.png&w=3840&q=75');">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="text-center text-white relative z-10">
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

<?php include 'layout/end-header.php' ?>