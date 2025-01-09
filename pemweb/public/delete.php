<?php
include '../config/database.php';
$id = $_GET['id'];
$conn->query("DELETE FROM pemesanan WHERE id=$id");
header('Location: index.php');
?>
