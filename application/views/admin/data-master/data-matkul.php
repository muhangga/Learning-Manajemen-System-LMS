<div class="main-content">
   <section class="section">
      <div class="section-header">
      <h1 style="font-size:18px;"><?= $title; ?></h1>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="#"><?= $dashboard; ?></a></div>
         <div class="breadcrumb-item"><a href="#"><?= $data_master; ?></a></div>
         <div class="breadcrumb-item"><?= $title; ?></div>
      </div>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <div class="row ">
         <div class="col-12 col-md-12 col-lg-12 ">
            <div class="card shadow">
            <div class="card-header">
               <h4><?= $title; ?></h4>
               <a data-toggle="modal" data-target="#modal_add_matkul" class="btn btn-primary ml-auto text-white">Tambah Matkul</a>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive">
                  <table class="table table-striped table-md table-bordered table-striped text-center">
                  <tr>
                     <th>No</th>
                     <th>Matkul</th>
                     <th>Semester</th>
                     <th>Status</th>
                     <th>Aksi</th>
                  </tr>

                  <?php 
                  $no = 1;
                     foreach($get_matkul as $matkul) : 
                  ?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $matkul['matkul'] ?></td>
                     <td><?= $matkul['semester'] ?></td>
                     <td><div class="badge badge-success"><?php if($matkul['status'] == 1) { echo "Aktif ";} ?></div></td>
                     <td>
                        <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('hapus_matkul/') . $matkul['id_matkul']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" id="hapus" data-toggle="modal" data-target="#modal_hapus_matkul" title="hapus"></i></a>
                     </td>
                  </tr>
                  <?php endforeach; ?>
                  </table>
               </div>
            </div>
            <div class="card-footer text-right">
               <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                  <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                     <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                     <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                  </ul>
               </nav>
             </div>
            </div>
         </div>
      </div>
   </section>
</div>
            
 
<div class="modal fade" id="modal_add_matkul" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title mb-3">Tambah Data Matakuliah</h4>
      </div>
      <form action="<?= base_url('save_matkul');?>" method="post" name="form" class="form-horizontal form-label-left">
        <div class="modal-body">
          <?php $this->load->view('admin/data-master/add_matkul');?>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>