<?php
require_once 'config.php';

// Jika ingin menghapus
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM review WHERE id_review = $id");
    header('Location: review.php');
}

// Fetching semua review dan nama artikel terkait
$query = "SELECT r.*, u.nama FROM review r JOIN users u ON r.id_user = u.id_user ORDER BY r.created_at DESC";
$result = mysqli_query($conn, $query);

$title = "Kelola Review"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Kelola Review</h1>

    <div class="bg-white rounded-lg shadow">
        <div class="p-6">
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-3 px-4">User</th>
                        <th class="text-left py-3 px-4">Review</th>
                        <th class="text-left py-3 px-4">Rating</th>
                        <th class="text-left py-3 px-4">Tanggal</th>
                        <th class="text-left py-3 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr class="border-b">
                        <td class="py-3 px-4"><?php echo $row['nama']; ?></td>
                        <td class="py-3 px-4"><?php echo substr($row['text_review'], 0, 100) . '...'; ?></td>
                        <td class="py-3 px-4"><?php echo $row['rating']; ?>/5</td>
                        <td class="py-3 px-4"><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
                        <td class="py-3 px-4">
                            <a href="?delete=<?php echo $row['id_review']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>