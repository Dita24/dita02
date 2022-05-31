<?php
include("Connect.php");

if (isset($_POST['daftar'])) {

    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Telp = $_POST['Telp'];
    $prodi = $_POST['prodi'];

    mysqli_query($db, "INSERT INTO `pwdpraktikum` (`Nama`, `Alamat`, `Telp`, `prodi`)VALUES ('$Nama', '$Alamat', '$Telp', '$prodi');");
    // $query = mysqli_query($db, $sql);
        // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}