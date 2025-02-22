<?php include("../config/database.php"); include("../includes/header.php"); ?>

<h2>Tambah Barang ke Katalog</h2>
<form action="" method="post">
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" class="form-control" required>

    <label>Harga:</label>
    <input type="number" name="harga" class="form-control" required>

    <label>Diskon (%):</label>
    <input type="number" name="diskon" class="form-control" min="0" max="100" required>

    <button type="submit" name="simpan" class="btn btn-primary mt-3">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];

    $conn->query("INSERT INTO katalog (nama_barang, harga, diskon) VALUES ('$nama_barang', '$harga', '$diskon')");
    echo "<script>alert('Barang berhasil ditambahkan!'); window.location='list.php';</script>";
}
?>

<?php include("../includes/footer.php"); ?>
