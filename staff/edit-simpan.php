<?php
require '../conn.php';

$idPelanggan = $_POST['idPelanggan'];
$namapenuh = $_POST['namapenuh'];
$icnum = $_POST['icnum'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];

$sql = "UPDATE pelanggan SET namapenuh = ?, icnum = ?, email = ?, phonenum = ? WHERE idPelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sisss', $namapenuh, $icnum, $email, $phonenum, $idPelanggan);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');