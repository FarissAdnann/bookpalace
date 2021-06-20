<?php
$idPelanggan = $_GET['idPelanggan'];
$sql = "SELECT username, namapenuh, icnum, email, phonenum FROM pelanggan WHERE idPelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idPelanggan);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username, $namapenuh, $icnum, $email, $phonenum);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Pelanggan</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idPelanggan" value="<?php echo $idPelanggan; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" value="<?php echo $username; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Penuh</td>
            <td><input type="text" name="namapenuh" value="<?php echo $namapenuh; ?>"></td>
        </tr>
        <tr>
            <td>IC Number</td>
            <td><input type="text" name="icnum" value="<?php echo $icnum; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phonenum" value="<?php echo $phonenum; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>