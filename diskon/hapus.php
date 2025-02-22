<?php 
include("../config/database.php"); 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM transaksi WHERE id=$id");
}

echo "<script>alert('Transaksi berhasil dihapus!'); window.location='riwayat.php';</script>";
?>
