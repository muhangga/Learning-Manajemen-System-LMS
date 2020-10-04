<style>
  html { background-color: white; }
</style>
<section class="section bg-white">
   <div class="container mt-5">
      <div class="row">
         <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
         <div class="login-brand">
            <img src="<?= base_url('vendor/assets/img/stisla-fill.svg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
         </div>

         <div class="card card-primary shadow">
            <div class="card-header"><h4>Register</h4></div>

            <div class="card-body">
               <form method="POST">
               <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  <div class="invalid-feedback">
                  </div>
               </div>

               <div class="row">
                  <div class="form-group col-6">
                     <label for="email" class="d-block">Nama</label>
                     <input id="text" type="nama" class="form-control" name="nama">
                  </div>
                  <div class="form-group col-6">
                     <label for="npm" class="d-block">NPM</label>
                     <input id="text" type="npm" class="form-control" name="npm">
                  </div>
               </div>

               <div class="row">
                  <div class="form-group col-6">
                     <label for="password" class="d-block">Password</label>
                     <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                     <div id="pwindicator" class="pwindicator">
                     <div class="bar"></div>
                     <div class="label"></div>
                     </div>
                  </div>
                  <div class="form-group col-6">
                     <label for="password2" class="d-block">Re-type Password</label>
                     <input id="password2" type="password" class="form-control" name="password-confirm">
                  </div>
               </div>

               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                     Register
                  </button>
               </div>
               <a href="<?= base_url('login_user') ?>" class="text-muted float-right mt-2 pb-3">Sudah punya akun? Kembali ke Login</a>
               </form>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
