<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
    <style>
input[type=text], select,textarea{
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
        <h3>Tambah Identitas</h3>
    </header>
    <form action="Proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Nama: </label>
                <textarea name="Nama"></textarea>
            </p>
            <p>
                <label for="Alamat">Alamat: </label>
                <textarea name="Alamat"></textarea>
            </p>
            <p>
                <label for="Telp">Telp: </label>
                <input type="text" name="Telp" placeholder="Telp" />
            </p>
            <p>
                <label for="prodi">Prodi: </label>
                <input type="text" name="prodi" placeholder="prodi" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>