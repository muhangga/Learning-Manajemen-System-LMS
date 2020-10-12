<div class="main-content">
   <section class="section">
      <div class="section-header">
      <h1 style="font-size:18px;"><?= $title; ?></h1>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="#"><?= $title; ?></a></div>
      </div>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <section class="section-body">
          <!-- <h2 class="section-title">Dashboard User</h2> -->

          <marquee behavior="scroll" srcollamount="2" class="alert alert-info mb-4">Halo Selamat Datang <?= $user['nama'] ?> di Learning Manajemen System!</marquee>

          <div class="row">
             <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <div class="card card-success">
                   <div class="card-head">
                      <h4 style="font-size:15px;"><span class="fas fa-volume-up rotate-90 pl-4 pt-4 mr-3"></span>Pengumuman</h4>
                      <hr>
                      <p class="pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio delectus, officiis modi id dolorem aut illo dolorum quisquam? Optio praesentium vitae eligendi ab, voluptatum quam illum similique nobis tempora obcaecati?</p>
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
                                 <td>: <?= $user['nama'] ?></td>
                              </tr>
                              <tr>
                                 <td width="30%">Email</td>
                                 <td>: <?= $user['email'] ?></td>
                              </tr>
                              <tr>
                                 <td width="30%">Dibuat Tanggal</td>
                                 <td>: <?= date('d F Y', $user['tanggal_dibuat']); ?></td>
                              </tr>
                              <tr>
                                 <td width="30%">Status</td>
                                 <td>:
                                    <?php if ($user['status'] == 1) { ?>
                                       <div class="badge badge-success">Aktif</div>
                                    <?php } 
                                    else { ?>
                                       <div class="badge badge-danger">Tidak Aktif</div>
                                    <?php } ?>
                                 </td>
                              </tr>
                           </table>
                           <a href="#" class="btn btn-primary mt-4">Ubah Profile</a>
                        </div>
                     </div>
                   </div>
                </div>
             </div>
          </div>
      </section>
     
   </section>
</div>
   