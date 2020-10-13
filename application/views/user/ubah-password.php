<div class="main-content">
   <section class="section">
      <div class="section-header">
      <h1 style="font-size:18px;"><?= $edit; ?></h1>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><?= $title; ?></a></div>
         <div class="breadcrumb-item active"><?= $edit; ?></div>
      </div>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <div class="row ">
         <div class="col-12 col-md-12 col-lg-12 ">
            <div class="card shadow">
            <div class="card-header">
               <h4><?= $edit; ?></h4>
            </div>

            <div class="card-body">
              <div class="row">
               <div class="col-lg-8">

                  <?= form_open_multipart('User/update_user'); ?>
                     <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="npm" name="npm" value="<?= $user['npm']; ?>" readonly>
                           <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-2">Gambar</div>
                        <div class="col-sm-10">
                           <div class="row">
                                 <div class="col-sm-3">
                                    <img src="<?= base_url('vendor/image/') . $user['gambar']; ?>" class="img-thumbnail">
                                 </div>
                                 <div class="col-sm-9">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                       <label class="custom-file-label" for="gambar">Choose file</label>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <button class="btn btn-primary">Simpan</button>
                 </div>
             </div>
          </div>
   </section>
</div>
      