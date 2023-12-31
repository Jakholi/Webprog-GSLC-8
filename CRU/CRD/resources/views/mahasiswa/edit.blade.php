<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('mahasiswas.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label for="nim">NIM</label>

            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                name="nim" value="{{ old('nim') }}">

            @error('nim')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label for="nama">Nama</label>

            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                name="nama" value="{{ old('nama') }}">

            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label for="email">Email</label>

            <input type="text" class="form-control" id="email" name="email">

        </div>

        <div class="form-group">

            <label>Jenis Kelamin</label>

            <div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                        value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>

                    <label class="form-check-label" for="laki_laki">Laki-laki</label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                        value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>>

                    <label class="form-check-label" for="perempuan">perempuan</label>

                </div>

                @error('jenis_kelamin')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

        </div>

        <div class="form-group">

            <label for="jurusan">Jurusan</label>

            <select class="form-control" name="jurusan" id="jurusan">

                <option value="Teknik Informatika"
                    {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>

                    Teknik Informatika

                </option>

                <option value="Sistem Informasi" {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>

                    Sistem Informasi

                </option>

                <option value="Ilmu Komputer" {{ old('jurusan') == 'Ilmu Komputer' ? 'selected' : '' }}>

                    Ilmu Komputer

                </option>

                <option value="Teknik Komputer" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>

                    Teknik Komputer

                </option>

                <option value="Teknik Telekomunikasi"
                    {{ old('jurusan') == 'Teknik Telekomunikasi' ? 'selected' : '' }}>

                    Teknik Telekomunikasi

                </option>

            </select>

            @error('jurusan')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label for="alamat">Alamat</label>

            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') }}</textarea>

        </div>

        <button type="submit" class="btn btn-primary mb-2">Daftar</button>

    </form> 

    {{-- <div class="pt-3 d-flex justify-content-end align-items-center">
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
    </div> --}}

    {{-- <input type="text" name="nim" value="{{ old('nim') ?? $mahasiswa->nim }}">
    <input type="text" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}">
    <input type="text" name="jenis_kelamin" value="{{ old('nim') ?? $mahasiswa->jenis_kelamin }}">
    <input type="text" name="jurusan" value="{{ old('nim') ?? $mahasiswa->jurusan }}">
    <input type="text" name="alamat" value="{{ old('nim') ?? $mahasiswa->alamat }}"> --}}
</body>
</html>