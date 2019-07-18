<form action="<?= base_url() ?>welcome/register" class="form" method="post">
    <div class="form-group">
        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" name="no_hp" placeholder="Nomor HP" class="form-control">
        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email Address" class="form-control">
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input type="password" name="password1" placeholder="Password" class="form-control">
            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group col-md-6">
            <input type="password" name="password2" placeholder="Repeat Password" class="form-control">
        </div>
    </div>
    <hr>
    <input type="submit" class="btn btn-info btn-block" value="Register">

    <div class="ex text-center">
        <a href="<?= base_url() ?>welcome/">Already have an Account?</a>
    </div>
</form>