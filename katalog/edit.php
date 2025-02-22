<?php 
include("../config/database.php"); 
include("../includes/header.php"); 

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan!'); window.location='list.php';</script>";
    exit;
}

$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM katalog WHERE id=$id");

if ($result->num_rows == 0) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='list.php';</script>";
    exit;
}

$row = $result->fetch_assoc();
?>

<h2>Edit Barang</h2>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" class="form-control" value="<?= $row['nama_barang']; ?>" required>

    <label>Harga:</label>
    <input type="number" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>

    <label>Diskon (%):</label>
    <input type="number" name="diskon" class="form-control" value="<?= $row['diskon']; ?>" min="0" max="100" required>

    <button type="submit" name="update" class="btn btn-success mt-3">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];

    $conn->query("UPDATE katalog SET nama_barang='$nama_barang', harga='$harga', diskon='$diskon' WHERE id=$id");
    echo "<script>alert('Data diperbarui!'); window.location='list.php';</script>";
}
?>

<?php include("../includes/footer.php"); ?>
