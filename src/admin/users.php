<?php
require_once 'config.php';

// jika ingin menghapus user
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE id_user = $id");
    header('Location: users.php');
}

$query = "SELECT * FROM users ORDER BY id_user DESC";
$result = mysqli_query($conn, $query);

$title = "Kelola Users"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Kelola Users</h1>
        <a href="user_add.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Tambah User</a>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="p-6">
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-3 px-4">Nama</th>
                        <th class="text-left py-3 px-4">Email</th>
                        <th class="text-left py-3 px-4">Role</th>
                        <th class="text-left py-3 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr class="border-b">
                        <td class="py-3 px-4"><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td class="py-3 px-4"><?php echo htmlspecialchars($row['email']); ?></td>
                        <td class="py-3 px-4"><?php echo $row['role']; ?></td>
                        <td class="py-3 px-4">
                            <a href="user_edit.php?id=<?php echo $row['id_user']; ?>" class="text-blue-500 hover:underline mr-3">Edit</a>
                            <a href="?delete=<?php echo $row['id_user']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>