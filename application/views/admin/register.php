<style>
  html { background-color: white; }
</style>
<section class="section bg-white">
   <div class="container mt-5">
      <div class="row">
         <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
         <div class="login-brand">
            <img src="<?= base_url('vendor/image/FMIPA.JPG') ?>" alt="logo" width="130">
         </div>

         <div class="card card-primary shadow">
            <div class="card-header"><h4>Register Administrator</h4></div>

            <?= $this->session->flashdata('gagal'); ?>

            <div class="card-body">
               <form method="POST" action="<?= base_url('Auth/register_admin') ?>">
               <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
               </div>

               <div class="form-group">
                  <label for="email" class="d-block">Nama</label>
                  <input id="text" type="nama" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
               </div>

               <div class="row">
                  <div class="form-group col-6">
                     <label for="password1" class="d-block">Password</label>
                     <input id="password" type="password" class="form-control" name="password1">
                     <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-6">
                     <label for="password2" class="d-block">Re-type Password</label>
                     <input id="password2" type="password" class="form-control" name="password2">
                  </div>
               </div>

               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                     Register
                  </button>
               </div>
               <a href="<?= base_url('login_admin') ?>" class="text-muted float-right mt-2 pb-3">Sudah punya akun? Kembali ke Login</a>
               </form>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
