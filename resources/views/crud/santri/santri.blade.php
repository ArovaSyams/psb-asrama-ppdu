<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Santri</title>
</head>
<body>
    <div class="container">

        <h1 class="mt-5">CRUD Santri</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama santri</th>
                    <th>nama asrama</th>
                    <th>alamat</th>
                    <th>unit pendidikan</th>
                    <th>nama ayah</th>
                    <th>nama ibu</th>
                    <th>aksi</th>
                    {{-- <th>tanggal pendaftaran</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($santri as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nama_santri }}</td>
                    <td>{{ $s->asrama->nama }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->unit_pendidikan }}</td>
                    <td>{{ $s->nama_ayah }}</td>
                    <td>{{ $s->nama_ibu }}</td>
                    <td>
                        <a href="/santri/{{ $s->id }}" class="btn btn-success">Edit</a>
                        <form action="/santri/{{ $s->id }}" method="post"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    {{-- <td>{{ $s->tanggal_pendaftaran }}</td> --}}
                </tr>                
                @endforeach
            </tbody>
        </table>

        <div class="card mt-5">
            <div class="card-body">
                <h2>Tambah Data</h2>
                
                <form action="/santri" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_santri" class="form-label">nama_santri</label>
                        <input type="text" class="form-control" id="nama_santri" name="nama_santri">
                    </div>
                    <div class="mb-3">
                        <label for="nama_asrama" class="form-label">nama_asrama</label>
                        <select class="form-select" aria-label="Default select example" name="asrama_id">
                            <option selected>Pilih asrama</option>
                            @foreach ($asrama as $s)
                            <option value="{{ $s->id }}">{{ $s->nama }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="unit_pendidikan" class="form-label">unit_pendidikan</label>
                        <input type="text" class="form-control" id="unit_pendidikan" name="unit_pendidikan">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ayah" class="form-label">nama_ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ibu" class="form-label">nama_ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>


    </div>
</body>
</html>