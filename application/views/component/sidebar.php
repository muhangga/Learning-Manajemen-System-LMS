<div class="main-wrapper">
   <div class="navbar-bg"></div>
   <nav class="navbar navbar-expand-lg main-navbar ml-auto">
     <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      </ul>

      <ul class="navbar-nav navbar-right ml-auto">

         <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
         <img alt="image" src="<?= base_url('vendor/image/') . $user['gambar']; ?>" class="rounded-circle mr-1">
         <div class="d-sm-none d-lg-inline-block"><?= $user["nama"] ?></div></a>
         <div class="dropdown-menu dropdown-menu-right">
            <a href="<?= base_url('dashboard') ?>" class="dropdown-item has-icon">
               <i class="far fa-user"></i> 
               Profile
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
               <i class="fas fa-sign-out-alt"></i> 
                Logout
            </a>
         </div>
         </li>
      </ul>
   </nav>
   <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand pt-2">
          <img src="<?= base_url('vendor/image/FMIPA.JPG') ?>" width="35px" class="pb-2">
            <a href="<?= base_url('dashboard') ?>" class="ml-2">Simak Elearning</a>
          </div>
          <hr>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('dashboard') ?>">
              <img src="<?= base_url('vendor/image/FMIPA.JPG') ?>" width="35px">
            </a>
            <hr class="mt-2 mb-1">
          </div>

          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
                <li class="nav-item">
                  <a href="<?= base_url('dashboard') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
                </li>
             <li class="menu-header">Change Profile</li>
                <li class="nav-item">
                  <a href="<?= base_url('User/edit_user/') . $user['id_user'] ?>" class="nav-link"><i class="fas fa-users"></i><span>Change Profile</span></a>
                </li>
              <li class="menu-header">Matakuliah</li>
                 <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fw fa-edit"></i><span>Data Matakuliah</span></a>
                <ul class="dropdown-menu" style="padding-left: 0 !important" >
                  <li><a class="nav-link p-4" href="<?= base_url('User/matkul/') . $user['id_user'] ?>"><i class="fas fa-list-ul"></i>Ambil Matakuliah</a></li>
                  <li><a class="nav-link p-4" href="<?= base_url('User/delete_matkul/') . $user['id_user'] ?>"><i class="fas fa-calendar-times"></i>Hapus Matakuliah</a></li>
                </ul>
              </li>
           </ul>
        </aside>
      </div>