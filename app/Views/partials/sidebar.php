<?php
$uri = service('uri')->getSegment(1) ?: 'dashboard'; // Default ke 'dashboard' jika kosong
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Selamat datang, <?= esc(session()->get('username')) ?></div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?= ($uri == 'dashboard') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">Laporan Pemantauan</div>

    <!-- Hipertensi -->
    <li class="nav-item <?= ($uri == 'Pemantauan' && service('uri')->getSegment(2) == 'HT') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('/Pemantauan/HT') ?>">
            <i class="fas fa-fw fa-heartbeat"></i>
            <span>Hipertensi</span>
        </a>
    </li>

    <!-- Diabetes -->
    <li class="nav-item <?= ($uri == 'Pemantauan' && service('uri')->getSegment(2) == 'DM') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('/Pemantauan/DM') ?>">
            <i class="fas fa-fw fa-syringe"></i>
            <span>Diabetes</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
</ul>
<!-- End of Sidebar -->