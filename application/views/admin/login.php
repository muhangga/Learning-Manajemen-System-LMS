<style>
  html { background-color: white; }
</style>
<section class="section bg-white">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
          <img src="<?= base_url('vendor/image/FMIPA.JPG') ?>" alt="logo" width="100"">
        </div>
        <?= $this->session->flashdata('message'); ?>

        <div class="card card-primary shadow">
          <div class="card-header"><h4>Login Administrator</h4></div>


          <div class="card-body">
            <form method="POST" action="<?= base_url('Auth/login_admin') ?>">

              <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-book"></i>
                        </div>
                      </div>
                      <input type="email" id="email" class="form-control" name="email" required autofocus>
                      <div class="invalid-feedback">
                        Email harus di isi
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </div>
                      </div>
                      <input type="password" id="password" class="form-control" name="password" required autofocus>
                      <div class="invalid-feedback">
                        Password harus di isi
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Re-type Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </div>
                      </div>
                      <input type="password" id="password" class="form-control" name="password" required autofocus>
                      <div class="invalid-feedback">
                        Re-type password
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                  <div class="form-group">
                    <a href="<?= base_url('register_admin') ?>" class="mt-3 float-right text-muted pb-3">Belum punya akun? Buat akun!</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
