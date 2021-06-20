<?php
$idBuku = $_GET['idBuku'];
$sql = "SELECT Tajuk, hargaBuku FROM buku WHERE idBuku = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idBuku);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Tajuk, $hargaBuku);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Buku</h1>

<form action="edit-simpan.php" method="post">
    <table>
        <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="idBuku" value="<?php echo $idBuku; ?>" readonly></td>
        </tr>
        <tr>
            <td>Tajuk Buku</td>
            <td><input type="text" name="Tajuk" value="<?php echo $Tajuk; ?>"></td>
        </tr>
        <tr>
            <td>Harga Buku</td>
            <td><input type="text" name="hargaBuku" value="<?php echo $hargaBuku; ?>"></td>
        </tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>