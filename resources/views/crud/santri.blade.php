<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asrama</title>
</head>
<body>
    crud asrama
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>nama santri</th>
                <th>nama asrama</th>
                <th>alamat</th>
                <th>unit pendidikan</th>
                <th>nama ayah</th>
                <th>nama ibu</th>
                <th>tanggal pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santri as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nama_santri }}</td>
                <td>{{ $s->asrama_id }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->unit_pendidikan }}</td>
                <td>{{ $s->nama_ayah }}</td>
                <td>{{ $s->nama_ibu }}</td>
                <td>{{ $s->tanggal_pendaftaran }}</td>
            </tr>                
            @endforeach
        </tbody>
    </table>
</body>
</html>