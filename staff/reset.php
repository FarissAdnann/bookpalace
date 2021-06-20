<?php
require '../conn.php';

$idPelanggan = $_GET['idPelanggan'];
$sql = "SELECT username FROM pelanggan WHERE idPelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idPelanggan);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$stmt->fetch();
$password = password_hash($username, PASSWORD_DEFAULT);
$stmt->close();

$sql = "UPDATE pelanggan SET password = ? WHERE idPelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idPelanggan);
$stmt->execute();

header('location: index.php?menu=senarai');