<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form action="<?= base_url('user/add_siswa') ?>" method="post">
            <div class="row">
                <div class="col-md-2">Nama</div>
                <input type="text" name="nama" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Alamat</div>
                <input type="text" name="alamat" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Tempat Lahir</div>
                <input type="text" name="tempat_lahir" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Tanggal Lahir</div>
                <input type="date" name="tanggal_lahir" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Agama</div>
                <input type="text" name="agama_id" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Jenis Kelamin</div>
                <input type="text" name="jk_id" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Sekolah Asal</div>
                <input type="text" name="sekolah_asal" class="col-md-10">
            </div>
            <div class="row">
                <div class="col-md-2">Jurusan</div>
                <input type="text" name="jurusan_id" class="col-md-10">
            </div>

            <input type="submit" value="Send">
        </form>


    </div>
    <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>