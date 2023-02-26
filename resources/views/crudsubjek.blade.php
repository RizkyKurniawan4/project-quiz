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
    <a href="/crudguru/gurutambah">Tambah Guru</a>
    <table border="1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>Id</th>
            <th>Subjek</th>
            <th>Waktu</th>
        </tr>
        @foreach($subjek as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->subjek}}</td>
            <td>{{$m->waktu}}</td>
			<td>
				<a href="/crudguru/edit/{{ $m->id }}">Edit</a>
				|
				<a href="/crudguru/hapus/{{ $m->id }}">Hapus</a>
			</td>
        </tr>
        @endforeach
    </table>
</body>
</html>