<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelanggan</title>
</head>
<body>
<h1>Senarai Pelanggan</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Nama Penuh</th>
        <th>IC Number</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pelanggan ORDER BY namapenuh";
    $sql = "SELECT * FROM pelanggan ORDER BY icnum";
    $sql = "SELECT * FROM pelanggan ORDER BY email";
    $sql = "SELECT * FROM pelanggan ORDER BY phonenum";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->namapenuh; ?></td>
            <td><?php echo $row->icnum; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->phonenum; ?></td>
            <td>
                <a href="reset.php?idPelanggan=<?php echo $row->idPelanggan; ?>">Reset</a>
                |
                <a href="index.php?menu=edit&idPelanggan=<?php echo $row->idPelanggan; ?>">Edit</a>
                |
                <a href="padam.php?idPelanggan=<?php echo $row->idPelanggan; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>