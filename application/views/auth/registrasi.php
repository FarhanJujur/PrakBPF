<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('index.php/auth/registrasi'); ?>">
                        <div class="form-group ">
                                <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user"
                                    id="nama" placeholder="First Name">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="LastName"class="form-control form-control-user" id="LastName"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" name="email"
                                placeholder="Email Address">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" value="<?= set_value('password1'); ?>"class="form-control form-control-user"
                                    id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Daftar Akun
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('index.php/Auth'); ?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>