<html>

<head>
    <title>Biodata</title>
</head>

<body>
    <div class="content">
        <header>
            <h1 class="judul" style="text-align: center ;"> Biodata Anda</h1>
        </header>
    </div>
</body>
<?php
if (isset($_POST['input'])); {
    $nim = $_POST['nim'];
    echo "<center> Nim : $nim" . "<br>";

    $nama = $_POST['nama'];
    echo "<center> Nama : $nama" . "<br>";

    $alamat = $_POST['alamat'];
    echo "Alamat : $alamat" . "<br>";

    $jenis_kelamin = $_POST["jenis_kelamin"];
    echo "Jenis Kelamin :
<b><font color='blue'>$jenis_kelamin</font></b>" . "<br>";
    $st = $_POST['status'];
    echo "Status : <b>$st</b>" . "<br>";

    $hobby = $_POST["hobby"];
    echo "Hobby : $hobby " . "<br>";

    $tanggal = $_POST['tanggal'];
    echo "Tanggal Lahir : $tanggal<br>";

    echo "<br>";
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_name, "images" . $file);
?>
    <table border="1">
        <tr>
            <td>FOTO ANDA</td>
        </tr>

        <tr>
            <td> <img src="images<?php echo $file ?>" style="width:300px"></td>
        </tr>
    </table>

<?php } ?>

</html>