<div class="main-content">
   <section class="section">
      <div class="section-header">
      <h1 style="font-size:18px;"><?= $matkul; ?></h1>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><?= $title; ?></a></div>
         <div class="breadcrumb-item active"><?= $matkul; ?></div>
      </div>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <div class="row ">
         <div class="col-12 col-md-12 col-lg-12 ">
            <div class="card shadow">
            <div class="card-header">
               <h4><?= $matkul; ?></h4>
            </div>

            <div class="card-body">
              <div class="row">
               <div class="col-lg-6">

                  <form action="<?= base_url('User/ambil_matkul') ?>" method="POST">

                  <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">

                     <div class="form-group">
                        <label for="name" class=" col-form-label">Nama Lengkap</label>
                           <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     
                     <div class="form-group">
                        <label>Pilih matakuliah yang ingin diambil</label>
                        <select class="custom-select">
                           <option selected disabled>==================== Pilih Matkul =======================</option>
                           <?php foreach($get_matkul as $mk) : ?>
                              <option value="<?= $mk['matkul'] ?>" name="inputmatkul"><?= $mk['matkul'] ?></option>
                           <?php endforeach; ?>
                           </select>
                        </div>
                     <button class="btn btn-primary">Simpan</button>
                 </div>
               </form>
             </div>
          </div>
   </section>
</div>
      