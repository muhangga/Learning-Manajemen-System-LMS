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
            </div>
            <div class="card-body p-0">
               <div class="table-responsive">
                  <table class="table table-striped table-md table-bordered table-striped text-center">
                  <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Dibuat pada</th>
                     <th>Status</th>
                     <th>Aksi</th>
                  </tr>

                  <?php 
                  $no = 1;
                     foreach($get_admin as $adm) : 
                  ?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $adm['nama']; ?></td>
                     <td><?= date('d F Y', $adm['tanggal_dibuat']); ?></td>
                     <td><div class="badge badge-success"><?php if($adm['status'] == 1) { echo "Aktif ";} ?></div></td>
                     <td>
                        <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('hapus_admin/') . $adm['id_admin']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" id="hapus" data-toggle="modal" data-target="#modal_hapus_admin" title="hapus"></i></a>
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
            

<div class="modal fade" id="modal_hapus_admin" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title mb-3">Data dihapus</h4>
      </div>
      <div class="modal-body">
         <p>Apakah anda yakin ingin menghapus?</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary">Hapus</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

 
      