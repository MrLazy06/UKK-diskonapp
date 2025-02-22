<?php include("../config/database.php");
include("../includes/header.php"); ?>

<h2>Riwayat Transaksi</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Awal</th>
            <th>Diskon</th>
            <th>Harga Setelah Diskon</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT transaksi.*, katalog.nama_barang 
                                FROM transaksi 
                                JOIN katalog ON transaksi.barang_id = katalog.id 
                                ORDER BY transaksi.waktu ASC");
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama_barang']}</td>
                    <td>Rp " . number_format($row['harga_awal'], 2, ',', '.') . "</td>
                    <td>{$row['diskon']}%</td>
                    <td>Rp " . number_format($row['harga_setelah_diskon'], 2, ',', '.') . "</td>
                    <td>{$row['waktu']}</td>
                    <td>
                        <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus transaksi ini?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>

<?php include("../includes/footer.php"); ?>