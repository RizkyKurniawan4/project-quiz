<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD GURU</title>
</head>
<body>
    <center>
    <h1>Data Guru</h1>
    <a href="/crudguru/gurutambah">Tambah Subjek</a>
    <table border="1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Subjek</th>
        </tr>
        @foreach($guru as $g)
        <tr>
            <td>{{$g->id}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->alamat}}</td>
            <td>{{$g->tempatlahir}}</td>
            <td>{{$g->tanggallahir}}</td>
            <td>{{$g->subjek_id}}</td>
			<td>
				<a href="/crudguru/edit/{{ $g->id }}">Edit</a>
				|
				<a href="/crudguru/hapus/{{ $g->id }}">Hapus</a>
			</td>
        </tr>
        @endforeach
    </table>
</body>
</html>