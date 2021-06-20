<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pesanan</title>
</head>
<body>

<h1>Senarai Pesanan Pelanggan</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>ID Pesanan</th>
        <th>ID Pelanggan</th>
        <th>ID Buku</th>
        <th>Jumlah Bayaran</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pesanan ORDER BY idPesanan";
    $sql = "SELECT * FROM pesanan ORDER BY idPelanggan";
    $sql = "SELECT * FROM pesanan ORDER BY IdBuku";
    $sql = "SELECT * FROM pesanan ORDER BY jumlahBayaran";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idPesanan; ?></td>
            <td><?php echo $row->idPelanggan; ?></td>
            <td><?php echo $row->idBuku; ?></td>
            <td><?php echo $row->jumlahBayaran; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>