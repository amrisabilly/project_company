<?php include '../layout/header.php' ?>

<?php include '../components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include '../components/sidebar.php' ?>
<div class="min-h-screen flex justify-center items-center">
    <div class="bg-white rounded-lg shadow-md px-24 py-12 max-w-md mx-auto">
        <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Masuk</h2>
        <form class="space-y-4" action="../../../src/admin/controller/auth_login.php">
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
</div>
<!-- <?php include '../components/footer.php' ?> -->

<?php include '../layout/end-header.php' ?>