<?php
require '../conn.php';

$idPelanggan = $_GET['idPelanggan'];
$sql = "DELETE FROM pelanggan WHERE idPelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idPelanggan);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');