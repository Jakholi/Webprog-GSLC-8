<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="pt-3 d-flex justify-content-end align-items-center">
        @isset($mahasiswa)
            <h1 class="h2 mr-auto">Biodata {{ $mahasiswa->nama }}</h1>
            <a href="{{ route('mahasiswas.edit',['mahasiswa' => $mahasiswa->id]) }}"
                class="btn btn-primary">Edit</a>
                <input type="text" name="nim" value="{{ old('nim') ?? $mahasiswa->nim }}">
                <input type="text" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}">
                <input type="text" name="jenis_kelamin" value="{{ old('nim') ?? $mahasiswa->jenis_kelamin }}">
                <input type="text" name="jurusan" value="{{ old('nim') ?? $mahasiswa->jurusan }}">
                <input type="text" name="alamat" value="{{ old('nim') ?? $mahasiswa->alamat }}">
        @endisset
    </div>
</body>
</html>