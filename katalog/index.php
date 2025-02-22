<?php
include("../includes/header.php");
include("../config/database.php");

// Ambil data katalog dari database
$result = $conn->query("SELECT * FROM katalog ORDER BY id ASC");
?>

<h2>Daftar Katalog</h2>
<a href="add.php" class="btn btn-success mb-3">Tambah Barang</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Diskon (%)</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama_barang']}</td>
                <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                <td>{$row['diskon']}%</td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>

<?php include("../includes/footer.php"); ?>
