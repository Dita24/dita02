<?php

include("Connect.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM pwdpraktikum WHERE Id_mahasiswa=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}