<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai</title>
</head>
<body>
<h1>Senarai Produk</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Nama Penuh</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM customer ORDER BY fullname";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->fullname; ?></td>
            <td>
                <a href="reset.php?idcustomer=<?php echo $row->idcustomer; ?>">Reset</a>
                |
                <a href="index.php?menu=edit&idcustomer=<?php echo $row->idcustomer; ?>">Edit</a>
                |
                <a href="padam.php?idcustomer=<?php echo $row->idcustomer; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>