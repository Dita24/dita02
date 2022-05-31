<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button-Hapus {
  background-color: #8FBC8F; /* Dark Sea Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

</style>

<body>

    <a href="tambah.php" class="button">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table border="1" id="customers">
        <tr>
            <th>No</th>
            <th>Id_mahasiswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Prodi</th>
            <th>Aksi</th>
            </tr>
            <?php
        include 'Connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM pwdpraktikum");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Id_mahasiswa']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['Telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                <a href="Edit.php?id=<?php echo $d['Id_mahasiswa']; ?>"class="button">EDIT</a>
                    <a href="Hapus.php?id=<?php echo $d['Id_mahasiswa']; ?>"class="button-Hapus">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>