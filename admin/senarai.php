<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Buku</title>
</head>
<body>

<h1>Senarai Buku</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>ID Buku</th>
        <th>Tajuk Buku</th>
        <th>Harga Buku</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM buku ORDER BY idBuku";
    $sql = "SELECT * FROM buku ORDER BY Tajuk";
    $sql = "SELECT * FROM buku ORDER BY hargaBuku";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idBuku; ?></td>
            <td><?php echo $row->Tajuk; ?></td>
            <td><?php echo $row->hargaBuku; ?></td>
            <td>
                <a href="index.php?menu=edit&idBuku=<?php echo $row->idBuku; ?>">Edit</a>
                |
                <a href="padam.php?idBuku=<?php echo $row->idBuku; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>