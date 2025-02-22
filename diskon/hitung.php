<?php include("../config/database.php");
include("../includes/header.php"); ?>

<h2>Hitung Diskon</h2>
<form action="" method="post">
    <label>Pilih Barang:</label>
    <select name="barang_id" class="form-control" required>
        <?php
        $result = $conn->query("SELECT * FROM katalog");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['nama_barang']} - Rp " . number_format($row['harga'], 2, ',', '.') . " (Diskon: {$row['diskon']}%)</option>";
        }
        ?>
    </select>

    <button type="submit" name="hitung" class="btn btn-success mt-3">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $barang_id = $_POST['barang_id'];

    // Ambil harga dan diskon barang dari katalog
    $barang = $conn->query("SELECT * FROM katalog WHERE id=$barang_id")->fetch_assoc();
    $harga_awal = $barang['harga'];
    $diskon = $barang['diskon'];

    // Hitung harga setelah diskon
    $nilai_diskon = ($harga_awal * $diskon) / 100;
    $harga_setelah_diskon = $harga_awal - $nilai_diskon;

    // Simpan transaksi ke database
    $conn->query("INSERT INTO transaksi (barang_id, harga_awal, diskon, harga_setelah_diskon) 
                  VALUES ('$barang_id', '$harga_awal', '$diskon', '$harga_setelah_diskon')");

    echo "<div class='alert alert-success mt-3'>
            <h4>Hasil Perhitungan:</h4>
            <p><strong>Harga Awal:</strong> Rp " . number_format($harga_awal, 2, ',', '.') . "</p>
            <p><strong>Diskon:</strong> {$diskon}%</p>
            <p><strong>Harga Setelah Diskon:</strong> Rp " . number_format($harga_setelah_diskon, 2, ',', '.') . "</p>
          </div>";
}
?>
<a href="riwayat.php" class="btn btn-info mt-3">Lihat Riwayat Transaksi</a>


<?php include("../includes/footer.php"); ?>