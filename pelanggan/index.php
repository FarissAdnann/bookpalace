<?php
require '../conn.php';

# kalau customer. Dalam session ada idcustomer
if (!isset($_SESSION['idpelanggan'])) {
    header('location: ../logout.php');
} else {
    $idpelanggan = $_SESSION['idpelanggan'];
    $sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
    $row = $conn->query($sql)->fetch_object();
    $fullname = $row->namapenuh;
}
# jangan bubuh kalau bukan customer
?>
<!doctype html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<center>
<h1>Nama Sistem : Book Palace (BP)</h1>
<a href="pelanggan/">Nama Programmer:pelanggan(Ng)</a>
</center>
<div class="topnav">
    <a href="index.php?menu=senarai">Senarai Pesanan</a>
    <a href="index.php?menu=daftar">Daftar Pesanan</a>
    <a href="index.php?menu=katalaluan">Kata Laluan</a>
    <a href="../logout.php">Keluar</a>
</div>
</nav>

<div>
    <?php
    $menu = 'senarai';
    if (isset($_GET['menu'])) $menu = $_GET['menu'];
    require "$menu.php";
    ?>
</div>

<footer style="background-color: lightblue">
    Nama Pelanggan: <?php echo $fullname; ?>
</footer>
</body>
</html>