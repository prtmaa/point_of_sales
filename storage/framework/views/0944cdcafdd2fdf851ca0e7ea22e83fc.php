<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo e($setting->nama_perusahaan); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e($setting->path_logo); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <?php if(auth()->user()->level == 1): ?>  
            <li class="nav-item">
              <a href="#" class="nav-link active" >
                <i class="nav-icon fa fa-cubes"></i>
                <p>
                  Master
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(url('kategori')); ?>" class="nav-link">
                    <i class="fa fa-cube nav-icon"></i>
                    <p>Kategori</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('produk')); ?>" class="nav-link">
                    <i class="fa fa-cubes nav-icon"></i>
                    <p>Produk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('member')); ?>" class="nav-link">
                    <i class="fa fa-id-card nav-icon"></i>
                    <p>Member</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('suplier')); ?>" class="nav-link">
                    <i class="fa fa-truck nav-icon"></i>
                    <p>Supplier</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link active" >
                <i class="nav-icon fa fa-cart-arrow-down"></i>
                <p>
                  Transaksi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(url('pengeluaran')); ?>" class="nav-link">
                    <i class="fa fa-money-bill nav-icon"></i>
                    <p>Pengeluaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('pembelian')); ?>" class="nav-link">
                    <i class="fa fa-download nav-icon"></i>
                    <p>Pembelian</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('penjualan')); ?>" class="nav-link">
                    <i class="fa fa-upload nav-icon"></i>
                    <p>Penjualan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('transaksi.index')); ?>" class="nav-link">
                    <i class="fa fa-cart-arrow-down nav-icon"></i>
                    <p>Transaksi Aktif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('transaksi.baru')); ?>" class="nav-link">
                    <i class="fa fa-cart-arrow-down nav-icon"></i>
                    <p>Transaksi Baru</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="<?php echo e(url('laporan')); ?>" class="nav-link active">
                  <i class="nav-icon fa fa-file"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fa fa-cogs nav-icon"></i>
                <p>
                  System
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(url('user')); ?>" class="nav-link">
                    <i class="fa fa-user nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('setting')); ?>" class="nav-link">
                    <i class="fa fa-cogs nav-icon"></i>
                    <p>Pengaturan</p>
                  </a>
                </li>
              </ul>
            </li>

          <?php else: ?>

            <li class="nav-item">
              <a href="<?php echo e(route('transaksi.index')); ?>" class="nav-link active">
                <i class="fa fa-cart-arrow-down nav-icon"></i>
                <p>Transaksi Aktif</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('transaksi.baru')); ?>" class="nav-link active">
                <i class="fa fa-cart-arrow-down nav-icon"></i>
                <p>Transaksi Baru</p>
              </a>
            </li>

          <?php endif; ?>

          <li class="nav-item">
            <a href="#" class="nav-link active" onclick="document.getElementById('logout-form').submit()">
                <i class="nav-icon fa fa-long-arrow-alt-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form" style="display: none;">
    <?php echo csrf_field(); ?>
  </form><?php /**PATH C:\xampp\htdocs\kasir\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>