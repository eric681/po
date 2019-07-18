<form action="<?= base_url() ?>welcome/" class="form" method="post">
    <?php echo $this->session->flashdata("k"); ?>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email Address" id="email" class="form-control" value="<?= set_value('email') ?>">
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Password" class="form-control" id="email">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <hr>
    <input type="submit" class="btn btn-info btn-block" value="Login">
    <div class="ex text-center">
        <a href="#">Forget Password?</a>
    </div>
    <div class="ex text-center">
        <a href="<?= base_url() ?>welcome/register">Create Account</a>
    </div>
</form>