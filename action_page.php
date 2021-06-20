<?php
require('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

# abc123 = $2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6

if ($username == 'admin') {
    $sql = "SELECT * FROM admin";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($password, $row->password)) {
        $_SESSION['admin'] = 'admin';
        header('location: admin/');
    } else {
        ?>
        <script>
            alert('Sorry, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
} elseif ($username == 'staff') {
    $sql = "SELECT * FROM staff";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($password, $row->password)) {
        $_SESSION['staff'] = 'staff';
        header('location: staff/');
    } else {
        ?>
        <script>
            alert('Sorry, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
} else {
    $sql = "SELECT idpelanggan, password FROM pelanggan WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $num_rows = $stmt->num_rows;
    $stmt->bind_result($idpelanggan, $pswd);
    if ($num_rows == 1) {
        echo $conn->error;
        $stmt->fetch();
        if (password_verify($password, $pswd)) {
            $_SESSION['idpelanggan'] = $idpelanggan;
            header('location: pelanggan/');
        } else {
            ?>
            <script>
                alert('Sorry, invalid username/password!');
                window.location = './';
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('Sorry, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
    $stmt->close();
}