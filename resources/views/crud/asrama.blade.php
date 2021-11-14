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
                <th>nama asrama</th>
                <th>nomor asrama</th>
                <th>pengasuh asrama</th>
                <th>jumlah santri</th>
                <th>deskripsi asrama</th>
                <th>biaya pendaftaran</th>
                <th>biaya perbulan</th>
                <th>kuota pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asrama as $as)
            <tr>
                <td>{{ $as->id }}</td>
                <td>{{ $as->nama_asrama }}</td>
                <td>{{ $as->nomor_asrama }}</td>
                <td>{{ $as->pengasuh_asrama }}</td>
                <td>{{ $as->jumlah_santri }}</td>
                <td>{{ $as->deskripsi_asrama }}</td>
                <td>{{ $as->biaya_pendaftaran }}</td>
                <td>{{ $as->biaya_perbulan }}</td>
                <td>{{ $as->kuota_pendaftaran }}</td>

            </tr>                
            @endforeach
        </tbody>
    </table>
</body>
</html>