<?php include("../config/database.php"); include("../includes/header.php"); ?>

<h2>Daftar Katalog</h2>
<a href="add.php" class="btn btn-primary">Tambah Barang</a>
<table class="table table-bordered mt-3">
    <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM katalog");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nama_barang']}</td>
                <td>Rp " . number_format($row['harga'], 2, ',', '.') . "</td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Hapus</a>
                </td>
            </tr>";
    }
    ?>
</table>

<?php include("../includes/footer.php"); ?>
