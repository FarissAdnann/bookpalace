<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
</head>
<body>
<h1>Daftar Pelanggan Baru</h1>

<form action="daftar-simpan.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Nama Penuh</td>
            <td><input type="text" name="namapenuh"></td>
        </tr>
        <tr>
            <td>IC Number</td>
            <td><input type="text" name="icnum"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phonenum"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>
</body>
</html>