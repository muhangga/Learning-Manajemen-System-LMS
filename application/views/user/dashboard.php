<div class="main-content">
   <section class="section">
      <div class="section-header">
      <h1 style="font-size:18px;"><?= $title; ?></h1>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>"><?= $title; ?></a></div>
      </div>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <section class="section-body">
          <!-- <h2 class="section-title">Dashboard User</h2> -->

          <marquee behavior="scroll" srcollamount="2" class="alert alert-info mb-4">Halo Selamat Datang <?= $user['nama'] ?> di Learning Manajemen System! Stay Healthy Everyone! <i class="fas fa-smile"></i></marquee>

          <div class="row">
             <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 pr-4" style="margin-bottom:18vh;">
                <div class="card card-success">
                   <div class="card-head">
                      <h4 style="font-size:15px;"><span class="fas fa-volume-up rotate-90 pl-4 pt-4 mr-3"></span>Pengumuman</h4>
                      <hr>
                      <p class="pl-4">
                      Untuk Mahasiswa baru silahkan ambil Mata kuliah sesuai dengan semester kalian, dan jangan lupa untuk tetap menjaga kesehatan selama pandemi ini. 
                      Perkuliahan akan dilaksanakan secara daring.. <br><br>
                      #StayHealthy <br>
                      #StaySafe <br>
                      #UseMasker
                      </p>
                   </div>
                </div>
             </div>
             <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                <div class="card card-primary">
                   <div class="card-head p-4">
                     <h4 style="font-size:16px;"><span class="fas fa-user rotate-90 mr-3 text-dark"></span>Profile Mahasiswa - <?= $user['nama'] ?></h4>
                     <hr>
                     
                        <div class="row">
                           <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                           <div align="center">
                              <img src="<?= base_url('vendor/image/') . $user['gambar'] ?>" style="border-radius:20px;" width="100%" title="<?= $user['nama'] ?>">
                           </div>
                        </div>

                        <div class="col-md-9 col-sm-3 col-xs-12 col-lg-9">
                           <table width="100%" class="mt-3">
                              <tr>
                                 <td width="30%">Nama</td>
                                 <td>: &nbsp <?= $user['nama'] ?></td>
                              </tr>
                              <tr>
                                 <td width="30%">NPM </td>
                                 <td>: &nbsp <?= $user['npm'] ?></td>
                              </tr>
                              <tr>
                                 <td width="30%">Email</td>
                                 <td>: &nbsp <?= $user['email'] ?></td>
                              </tr>
                              <tr>
                                 <td width="30%">Dibuat Tanggal</td>
                                 <td>: &nbsp <?= date('d F Y', $user['tanggal_dibuat']); ?></td>
                              </tr>
                              <tr>
                                 <td width="30%" class="pb-3 border-bottom">Status</td>
                                 <td class="pb-3 border-bottom">: &nbsp 
                                    <?php if ($user['status'] == 1) { ?>
                                       <div class="badge badge-success">Aktif</div>
                                    <?php } 
                                    else { ?>
                                       <div class="badge badge-danger">Tidak Aktif</div>
                                    <?php } ?>
                                 </td>
                              </tr>
                              <?php 
                                 $matkul = $this->db->query("SELECT * FROM tbl_kelas_matkul")->result_array(); ?>
                              <tr>
                                 <td class="pt-3 pb-2 font-weight-bold">Mata kuliah yang diambil : </td>
                                 <?php foreach($matkul as $mk) : ?>
                              </tr>
                              <tr>
                                 <td width="40%"><?= $mk['matkul'] ?></td>
                              </tr>
                               <?php endforeach; ?>
                           </table>
                           <a href="<?= base_url('User/edit_user/') . $user['id_user'] ?>" class="btn btn-primary mt-4">Ubah Profile</a>
                        </div>
                     </div>
                   </div>
                </div>
             </div>

            <!-- <div class="row">
               <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 pl-4">
                  <div class="card card-success">
                     <div class="card-head">
                        <h4 style="font-size:15px;"><span class="fas fa-book rotate-90 pl-4 pt-4 mr-3"></span>Matakuliah yang diambil</h4>
                        <hr>
                        <li>
                                       <ul>Elektronika B</ul>
                        </li>
                     </div>
                  </div>
               </div>
            </div> -->

          </div>
      </section>
   </section>
</div>
   