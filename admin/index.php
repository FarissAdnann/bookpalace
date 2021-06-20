<?php
require '../conn.php';

# kalau admin
if (!isset($_SESSION['admin'])) {
    header('location: ../logout.php');
}
# jangan bubuh kalau bukan admin

?>
<!doctype html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<center>
<h1>Nama Sistem : Book Palace (BP)</h1>
<a href="admin/">Nama Programmer:Admin(Fikri)</a>
</center>
<div class="topnav">
    <a href="index.php?menu=senarai">Senarai Buku</a>
    <a href="index.php?menu=daftar">Daftar Buku</a>
    <a href="index.php?menu=senarai-pesanan">Senarai Pesanan Pelanggan</a>
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
    Pentadbir Sistem: Fikri
</footer>
</body>
</html>