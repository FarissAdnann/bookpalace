<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
<h1>Daftar Buku Baru</h1>

<form action="daftar-simpan.php" method="post">
    <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="idBuku"></td>
        </tr>
        <tr>
            <td>Tajuk Buku</td>
            <td><input type="text" name="Tajuk"></td>
        </tr>
        <tr>
            <td>Harga Buku</td>
            <td><input type="text" name="hargaBuku"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>
</body>
</html>