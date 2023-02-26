<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
</head>
<body>
    <center>
    <h1>Tambah Data Guru</h1>
    <a href="/crudguru">Kembali</a>
    <br><br>
    <form action="/crudguru/proses" method="post">
        <ul>
            <label>Nama : </label>
            <input type="text" name="nama" required="required">
        </ul>
        <ul>
            <label>Alamat : </label>
            <br>
            <textarea name="alamat"cols="30" rows="10" required></textarea>
        </ul>
        <ul>
            <label>
                Tempat Lahir :
            </label>
            <input type="text" name="tempatlahir" required>
        </ul>
        <ul>
            <label>Tanggal Lahir : </label>
            <input type="date" name="tanggallahir">
        </ul>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>