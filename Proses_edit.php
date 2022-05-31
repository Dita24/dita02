<?php
include("Connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['Id_mahasiswa'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Telp = $_POST['Telp'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE pwdpraktikum SET Nama='$Nama', Alamat='$Alamat', Telp='$Telp', prodi='$prodi' WHERE Id_mahasiswa=$id";
    $query = mysqli_query($db, $sql);

    header('Location:index.php');
}