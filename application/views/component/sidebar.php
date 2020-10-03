<div class="main-wrapper">
   <div class="navbar-bg"></div>
   <nav class="navbar navbar-expand-lg main-navbar ml-auto">
     <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      </ul>

      <ul class="navbar-nav navbar-right ml-auto">

         <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
         <img alt="image" src="<?= base_url('vendor/assets/img/avatar/avatar-1.png'); ?>" class="rounded-circle mr-1">
         <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
         <div class="dropdown-menu dropdown-menu-right">
            <a href="features-profile.html" class="dropdown-item has-icon">
               <i class="far fa-user"></i> Profile
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item has-icon text-danger">
               <i class="fas fa-sign-out-alt"></i> Logout
            </a>
         </div>
         </li>
      </ul>
   </nav>
   <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand pt-2">
            <a href="index.html"><i class="fas fa-university mr-2 border-bottom"></i>Simak Elearning</a>
          </div>
          <hr>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LMS</a>
            <hr class="mt-1 mb-1">
          </div>

          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
                <li class="nav-item">
                  <a href="<?= base_url('dashboard_administrator') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
                </li>
              <li class="menu-header">Data master</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fw fa-edit"></i><span>Data Master</span></a>
                <ul class="dropdown-menu" style="padding-left: 0 !important" >
                  <li><a class="nav-link p-4" href="<?= base_url('administrator') ?>"><i class="fas fa-user"></i>Data Administrator</a></li>
                  <li><a class="nav-link p-4" href="components-article.html"><i class="fas fa-users"></i>Data Mahasiswa</a></li>
                  <li><a class="nav-link p-4" href="components-avatar.html"><i class="fas fa-edit"></i>Data Matakuliah</a></li>
                </ul>
              </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
    <!-- <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blank Page</h1>
          </div>

         <div class="section-body"></div> 
       </section>
      </div>  -->
      <!-- <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>
      </div> -->