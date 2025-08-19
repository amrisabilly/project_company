<?php
require_once 'config.php';

// Jika ingin menghapus
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    // Hapus file foto jika ada
    $query = "SELECT foto FROM artikel WHERE id_artikel = $id";
    $result = mysqli_query($conn, $query);
    $artikel = mysqli_fetch_assoc($result);
    if($artikel['foto']) {
        unlink('uploads/' . $artikel['foto']);
    }
    mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = $id");
    header('Location: artikel.php');
}

$query = "SELECT * FROM artikel ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

$title = "Kelola Artikel"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Kelola Artikel</h1>
        <a href="artikel_add.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Tambah Artikel</a>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="p-6">
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-3 px-4">Judul</th>
                        <th class="text-left py-3 px-4">Deskripsi</th>
                        <th class="text-left py-3 px-4">Foto</th>
                        <th class="text-left py-3 px-4">Tanggal</th>
                        <th class="text-left py-3 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr class="border-b">
                        <td class="py-3 px-4"><?php echo $row['judul']; ?></td>
                        <td class="py-3 px-4"><?php echo substr($row['deskripsi'], 0, 100) . '...'; ?></td>
                        <td class="py-3 px-4">
                            <?php if($row['foto']): ?>
                                <img src="uploads/<?php echo $row['foto']; ?>" alt="Foto" class="w-10 h-10 object-cover rounded">
                            <?php else: ?>
                                <span class="text-gray-400">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td class="py-3 px-4"><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
                        <td class="py-3 px-4">
                            <a href="artikel_edit.php?id=<?php echo $row['id_artikel']; ?>" class="text-blue-500 hover:underline mr-3">Edit</a>
                            <a href="?delete=<?php echo $row['id_artikel']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>