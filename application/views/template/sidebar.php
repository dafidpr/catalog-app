    <div class="wrapper">
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <img src="<?php echo base_url('assets/backend/img/').getSettings('logo')?>" alt="" width="70%">
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
              <a href="<?= base_url(); ?>" class="nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Menus</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item dropdown">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Master Data</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?= base_url('product') ?>">
                    <i class="ml-1 item-text"></i> Data Product
                  </a>
                  <a class="nav-link pl-3" href="<?= base_url('merk') ?>">
                    <i class="ml-1 item-text"></i> Data Merk
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Management</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?= base_url(); ?>user">
                <i class="fe fe-users fe-16"></i>
                <span class="ml-3 item-text">Users</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="<?= base_url('settings') ?>" class="nav-link">
                <i class="fe fe-info fe-16"></i>
                <span class="ml-3 item-text">Settings</span>
              </a>
            </li>
          </ul>
        </nav>
      </aside>

      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title"><?= htmlentities($title); ?></h2>
              <?php if (isset($deskripsi)) : ?>
                <p class="card-text"><?= htmlentities($deskripsi); ?></p>
              <?php endif; ?>