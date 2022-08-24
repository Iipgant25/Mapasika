<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mapasika</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Anggota
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pendaftaran'); ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Pendaftaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/anggota'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Anggota</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('materi'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Materi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kegiatan/daftar_kegiatan'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Kegiatan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Metode Pembayaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kegiatan/pendaftaran_k'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Pendaftaran Kegiatan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Laporan
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('laporan'); ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Anggota</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('laporan/data_PK'); ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Pendaftaran Kegiatan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
