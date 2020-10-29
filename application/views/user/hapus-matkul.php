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

                  <form action="<?= base_url('User/hapus_matkul') ?>" method="POST">

                     <div class="form-group">
                        <label for="nama" class=" col-form-label">Nama Lengkap</label>
                           <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>

                     <?php foreach($matkul_user as $m) :
                        $matkul = $m['matkul'];
                     endforeach; 

                     if(empty($m)) : ?>
                        <div class="form-group">
                           <p>Tidak ada mata kuliah yang diambil, silahkan ambil terlebih dahulu!</p>
                        </div>
                     <?php endif; ?>
       
                     <?php foreach($matkul_user as $mk) : ?>
                        <div class="form-group">
                           <input type="checkbox" name="matkul[]" id="matkul[]" value="<?= $mk['matkul'] ?>">
                           <span class="ml-1"><?= $mk['matkul'] ?></span>
                        </div>
                     <?php endforeach; ?>
                     <button class="btn btn-primary">Simpan</button>
                 </div>
               </form>
             </div>
          </div>
   </section>
</div>
      