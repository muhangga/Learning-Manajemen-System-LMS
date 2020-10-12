<div class="main-content">
   <section class="section">
      <div class="section-header">
      <h1 style="font-size:18px;"><?= $title; ?></h1>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="#"><?= $dashboard; ?></a></div>
         <div class="breadcrumb-item"><a href="#"><?= $data_master; ?></a></div>
         <div class="breadcrumb-item"><a href="#"><?= $title; ?></a></div>
         <div class="breadcrumb-item"><?= $edit; ?></div>
      </div>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <div class="row ">
         <div class="col-12 col-md-12 col-lg-12 ">
            <div class="card shadow">
            <div class="card-header">
               <h4><?= $title; ?></h4>
            </div>

            <div class="card-body">
              <div class="row">
               <div class="col-lg-8">

                  <?= form_open_multipart('Main/update_mahasiswa'); ?>
                     <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>" readonly>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                        <label><input type="radio" class="form-group" id="status" name="status" value="1"> Aktif</label>
                        <label><input type="radio" class="form-group ml-3" id="status" name="status" value="0"> Tidak Aktif</label>
                        </div>
                     </div>
                     <button class="btn btn-primary">Simpan</button>
                 </div>
             </div>
          </div>
   </section>
</div>
      