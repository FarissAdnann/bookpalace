<?php
require '../conn.php';

$idBuku = $_POST['idBuku'];
$Tajuk = $_POST['Tajuk'];
$hargaBuku = $_POST['hargaBuku'];

$sql = "INSERT INTO buku VALUES (null, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $Tajuk, $hargaBuku);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, ID Buku ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}