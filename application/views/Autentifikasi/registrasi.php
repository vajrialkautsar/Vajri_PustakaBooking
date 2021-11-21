<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Menjadi Member</h1>
                                    </div>
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <form class="user" method="post" action="<?= base_url('Autentifikasi/registrasi'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" value="<?=set_value('nama'); ?>" id="nama" placeholder="Nama Lengkap" name="nama">
                                            <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?=set_value('email'); ?>" id="email" placeholder="Alamat Email" name="email">
                                            <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
                                            <?= form_error('password1','<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Ulangi Password" name="password2">
                                            <?= form_error('password2','<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>  
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Menjadi Member</button>
                                    </form>
                                        <hr>
                                            <div class="text-center">
                                                <a class="small" href="<?=base_url('Autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                            </div>
                                            <div class="text-center">
                                                Sudah menjadi member?<a class="small" href="<?=base_url('Autentifikasi'); ?>">Login!</a>
                                            </div>
                                        </hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>