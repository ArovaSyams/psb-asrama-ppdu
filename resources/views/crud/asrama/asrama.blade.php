<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Asrama</title>
</head>

<body>
    <div class="container">

        <h1 class="mt-5">crud asrama</h1>
        <table class="table table-bordered">
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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asrama as $as)
                    <tr>
                        <td>{{ $as->id }}</td>
                        <td>{{ $as->nama }}</td>
                        <td>{{ $as->nomor_asrama }}</td>
                        <td>{{ $as->pengasuh }}</td>
                        <td>{{ $as->jumlah_santri }}</td>
                        <td>{{ $as->deskripsi }}</td>
                        <td>{{ $as->biaya_pendaftaran }}</td>
                        <td>{{ $as->biaya_perbulan }}</td>
                        <td>{{ $as->kuota_pendaftaran }}</td>
                        <td>
                            <a href="/asrama/{{ $as->id }}" class="btn btn-success">Edit</a>
                            <form action="/asrama/{{ $as->id }}" method="post"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="card mt-5">
            <div class="card-body">
                <h2>Tambah Data</h2>
                
                <form action="/asrama" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_asrama" class="form-label">nomor_asrama</label>
                        <input type="text" class="form-control" id="nomor_asrama" name="nomor_asrama">
                    </div>
                    <div class="mb-3">
                        <label for="pengasuh" class="form-label">pengasuh</label>
                        <input type="text" class="form-control" id="pengasuh" name="pengasuh">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_santri" class="form-label">jumlah_santri</label>
                        <input type="text" class="form-control" id="jumlah_santri" name="jumlah_santri">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="biaya_pendaftaran" class="form-label">biaya_pendaftaran</label>
                        <input type="text" class="form-control" id="biaya_pendaftaran" name="biaya_pendaftaran">
                    </div>
                    <div class="mb-3">
                        <label for="biaya_perbulan" class="form-label">biaya_perbulan</label>
                        <input type="text" class="form-control" id="biaya_perbulan" name="biaya_perbulan">
                    </div>
                    <div class="mb-3">
                        <label for="kuota_pendaftaran" class="form-label">kuota_pendaftaran</label>
                        <input type="text" class="form-control" id="kuota_pendaftaran" name="kuota_pendaftaran">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
