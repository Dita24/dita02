<?php
include "Connect.php";
$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM pwdpraktikum WHERE Id_mahasiswa='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
        <style>
input[type=text], select,textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
    </head>

    <body>
        <header>
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses_edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="Id_mahasiswa" value="<?php echo $d['Id_mahasiswa']; ?>" />
                <p>
                    <label for="Nama">Nama: </label>
                    <input type="text" name="Nama" placeholder="nama lengkap" value="<?php echo $d['Nama']; ?>" />
                </p>
                <p>
                    <label for="Alamat">Alamat: </label>
                    <textarea name="Alamat"><?php echo $d['Alamat'] ?></textarea>
                </p>
                <p>
                    <label for="Telp">Nomor HP: </label>
                    <textarea name="Telp"><?php echo $d['Telp'] ?></textarea>
                </p>
                <p>
                    <label for="prodi">prodi: </label>
                    <input type="text" name="prodi" placeholder="prodi" value="<?php echo $d['prodi'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>