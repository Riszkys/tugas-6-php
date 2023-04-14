<!DOCTYPE html>
<html>
<?php
date_default_timezone_set('Asia/Jakarta'); // set timezone
$nama = $_POST['nama'];
$email = $_POST['email'];
$jam = date('H:i:s');
$hari = date('l');
$tanggal = date('d F Y');
?>

<head>
    <title>Login Berhasil</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['nama']) && !empty($_POST['email'])) {
            echo "<h1>Login Berhasil</h1>";
            echo "<p>Nama: " . $nama . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Jam Login: " . $jam . "</p>";
            echo "<p>Hari: " . $hari . "</p>";
            echo "<p>Tanggal Login: " . $tanggal . "</p>";
        } else {
            header("Location: error.php");
        }
    }
    ?>
</body>

</html>