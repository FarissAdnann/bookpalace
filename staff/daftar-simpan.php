<?php
require '../conn.php';

$username = $_POST['username'];
$password = password_hash($username, PASSWORD_DEFAULT);
$namapenuh = $_POST['namapenuh'];
$icnum = $_POST['icnum'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];

$sql = "INSERT INTO pelanggan (idPelanggan, username, password, namapenuh, icnum, email, phonenum) VALUES (null, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssss', $username, $password, $namapenuh, $icnum, $email, $phonenum);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}