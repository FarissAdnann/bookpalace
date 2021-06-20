<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar Kata Laluan</title>
</head>
<body>
<h1>Tukar Kata Laluan</h1>

<form action="katalaluan-tukar.php" method="post">
    <table>
        <tr>
            <td>Kata laluan asal</td>
            <td><input type="password" name="kata1" required></td>
        </tr>
        <tr>
            <td>Kata laluan baru</td>
            <td><input type="password" name="kata2" required></td>
        </tr>
        <tr>
            <td>Ulang kata laluan baru</td>
            <td><input type="password" name="kata3" required></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Tukar</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>