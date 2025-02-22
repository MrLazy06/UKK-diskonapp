<?php
include("../config/database.php");
$id = $_GET['id'];
$conn->query("DELETE FROM katalog WHERE id=$id");
echo "<script>alert('Barang dihapus!'); window.location='list.php';</script>";
?>
