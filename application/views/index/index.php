<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
</head>

<body>

    <div class="top"></div>
    <div class="box-login">
        <h1 class="h1 text-center"><?= $title ?></h1>
        
        <?php $this->load->view('index/' .$page); ?>

    </div>

</body>

</html>