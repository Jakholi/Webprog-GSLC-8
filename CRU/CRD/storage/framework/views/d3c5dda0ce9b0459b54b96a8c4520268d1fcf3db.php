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
        <?php if(isset($mahasiswa)): ?>
            <h1 class="h2 mr-auto">Biodata <?php echo e($mahasiswa->nama); ?></h1>
            <a href="<?php echo e(route('mahasiswas.edit',['mahasiswa' => $mahasiswa->id])); ?>"
                class="btn btn-primary">Edit</a>
                <input type="text" name="nim" value="<?php echo e(old('nim') ?? $mahasiswa->nim); ?>">
                <input type="text" name="nama" value="<?php echo e(old('nama') ?? $mahasiswa->nama); ?>">
                <input type="text" name="jenis_kelamin" value="<?php echo e(old('nim') ?? $mahasiswa->jenis_kelamin); ?>">
                <input type="text" name="jurusan" value="<?php echo e(old('nim') ?? $mahasiswa->jurusan); ?>">
                <input type="text" name="alamat" value="<?php echo e(old('nim') ?? $mahasiswa->alamat); ?>">
        <?php endif; ?>
    </div>
</body>
</html><?php /**PATH C:\Web_latihan\CRD\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>