<?php
require '../conn.php';

$idBuku = $_GET['idBuku'];
$sql = "DELETE FROM buku WHERE idBuku= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idBuku);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');