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
        <div class="card mt-5">
            <div class="card-body">
                <h2>Edit Data Asrama</h2>
                
                <form action="/asrama/{{ $asrama->id }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $asrama->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_asrama" class="form-label">nomor_asrama</label>
                        <input type="text" class="form-control" id="nomor_asrama" name="nomor_asrama" value="{{ $asrama->nomor_asrama }}">
                    </div>
                    <div class="mb-3">
                        <label for="pengasuh" class="form-label">pengasuh</label>
                        <input type="text" class="form-control" id="pengasuh" name="pengasuh" value="{{ $asrama->pengasuh }}">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_santri" class="form-label">jumlah_santri</label>
                        <input type="text" class="form-control" id="jumlah_santri" name="jumlah_santri" value="{{ $asrama->jumlah_santri }}">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $asrama->deskripsi }}">
                    </div>
                    <div class="mb-3">
                        <label for="biaya_pendaftaran" class="form-label">biaya_pendaftaran</label>
                        <input type="text" class="form-control" id="biaya_pendaftaran" name="biaya_pendaftaran" value="{{ $asrama->biaya_pendaftaran }}">
                    </div>
                    <div class="mb-3">
                        <label for="biaya_perbulan" class="form-label">biaya_perbulan</label>
                        <input type="text" class="form-control" id="biaya_perbulan" name="biaya_perbulan" value="{{ $asrama->biaya_perbulan }}">
                    </div>
                    <div class="mb-3">
                        <label for="kuota_pendaftaran" class="form-label">kuota_pendaftaran</label>
                        <input type="text" class="form-control" id="kuota_pendaftaran" name="kuota_pendaftaran" value="{{ $asrama->kuota_pendaftaran }}">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>