<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BP</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<center>

<form action="action_page.php" method="post">
  <h3>Login</h3>
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required><br><br>
<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required><br><br>

<button type="submit">Login</button>

</form>
<br>
     
<h3>Nama sistem: Book Palace (BP)<h3>
            
<a href="admin/">Admin (Fikri)</a><br>
<br>-menguruskan senarai buku<br>
-melihat senarai pesanan pelanggan<br><br>
            
<a href="staff/">Staff (Faris)</a><br>
<br>-menguruskan senarai pelanggan<br><br>
            
<a href="pelanggan/">Pelanggan (Ng)</a><br>
<br>-menguruskan senarai pesanan<br><br>

<hr></hr>

<h3>Database : BP</h3>

<br>Buku(idBuku, Tajuk, hargaBuku)<br>

<br>Pesanan(idPesanan, idPelanggan, idbuku, jumlahBayaran)<br>

<br>Pelanggan(idPelanggan, username, password, namapenuh, icnum, email, phonenum)<br>

<br>Admin(password)<br>

<br>Staff(password)<br><br>

<hr></hr>

<h1>Table:Buku</h1>
<table border="1" cellpadding="5">
    
    <tr>
      <th>Name</th>
      <th>Type</th>
      <th>Extra</th>
    </tr>
    <tr>
      <td>idBuku</td>
      <td>int(5)</td>
      <td>PK  A_I</td>
    </tr>
    <tr>
      <td>Tajuk</td>
      <td>varchar(40)</td>
      <td></td>
    </tr>
    <tr>
        <td>hargaBuku</td>
        <td>int(10)</td>
        <td></td>
    </tr>
    </table>

<h1>Table:Pesanan</h1>
<table border="1" cellpadding="5">
    
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
    </tr>
    <tr>
        <td>idPesanan</td>
        <td>int(5)</td>
        <td>PK  A_I</td>
    </tr>
    <tr>
        <td>idPelanggan</td>
        <td>int(5)</td>
        <td>FK</td>
    </tr>
    <tr>
        <td>idBuku</td>
        <td>int(5)</td>
        <td>FK</td>
    </tr>
    <tr>
        <td>jumlahBayaran</td>
        <td>int(10)</td>
        <td></td>
    </tr>
    </table>

<h1>Table:Pelanggan</h1>
<table border="1" cellpadding="5">
    
        
    <tr>
      <th>Name</th>
      <th>Type</th>
      <th>Extra</th>
    </tr>
    <tr>
      <td>idPelanggan</td>
      <td>int(5)</td>
      <td>PK  A_I</td>
    </tr>
    <tr>
        <td>username</td>
        <td>varchar(10)</td>
        <td></td>
    </tr>
    <tr>
        <td>password</td>
        <td>varchar(250)</td>
        <td></td>
    </tr>
    <tr>
        <td>namapenuh</td>
        <td>varchar(70)</td>
        <td></td>
    </tr>
    <tr>
        <td>icnum</td>
        <td>varchar(15)</td>
        <td></td>
    </tr>
    <tr>
        <td>email</td>
        <td>varchar(40)</td>
        <td></td>
    </tr>
    <tr>
        <td>phonenum</td>
        <td>varchar(15)</td>
        <td></td>
    </tr>
    </table>

<h1>Table:Admin</h1>
<table border="1" cellpadding="5">
    
        
    <tr>
      <th>Name</th>
      <th>Type</th>
      <th>Extra</th>
    </tr>
    <tr>
      <td>password</td>
      <td>varchar(250)</td>
      <td></td>
    </tr>
    </table>

<h1>Table:Staff</h1>
<table border="1" cellpadding="5">
    
        
    <tr>
      <th>Name</th>
      <th>Type</th>
      <th>Extra</th>
    </tr>
    <tr>
      <td>password</td>
      <td>varchar(250)</td>
      <td></td>
    </tr>
    </table>

</center>
</body>
</html>
