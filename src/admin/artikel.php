<?php
require_once 'config.php';

$query = "SELECT * FROM artikel ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

$title = "Kelola Artikel"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Kelola Artikel</h1>
        <a href="controller/artikel_add.php?action=add" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Artikel</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left py-2">Judul</th>
                    <th class="text-left py-2">Deskripsi</th>
                    <th class="text-left py-2 w-32">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr class="border-t">
                    <td class="py-3"><?= $row['judul'] ?></td>
                    <td class="py-3"><?= substr($row['deskripsi'], 0, 100) ?>...</td>
                    <td class="py-3">
                        <div class="flex space-x-4">
                            <a href="controller/artikel_edit.php?action=edit&id=<?= $row['id_artikel'] ?>" 
                               class="text-blue-500 hover:text-blue-600">
                                Edit
                            </a>
                            <a href="controller/artikel_delete.php?id=<?= $row['id_artikel'] ?>" 
                               class="text-red-500 hover:text-red-600"
                               onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'components/footer.php'; ?>