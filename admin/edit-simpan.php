<?php
require '../conn.php';

$idBuku = $_POST['idBuku'];
$Tajuk = $_POST['Tajuk'];
$hargaBuku = $_POST['hargaBuku'];

$sql = "UPDATE buku SET Tajuk = ?, hargaBuku = ? WHERE idBuku = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sii', $Tajuk, $hargaBuku, $idBuku);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');