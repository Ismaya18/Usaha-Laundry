<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            .bg_menu{
                background-image: linear-gradient(#270404, #800000, #c50a0a);
            }
        </style>
    </head>

    <body>
            <!-- Sidebar -->
        <ul class="navbar-nav bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Bunda <sup>Laundry</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>konsumen">
                <i class="fas fa-users fa-2x text-gray-300"></i> <span>Data Konsumen</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>paket">
                <i class="fas fa-box fa-2x text-gray-300"> </i> <span>Data Paket</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>transaksi/tambah">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>  <span>Tambah Transaksi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>transaksi/riwayat">
                <i class="fas fa-history fa-2x text-gray-300"></i> <span>Riwayat Transaksi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>laporan">
                <i class="fas fa-file fa-2x text-gray-300"></i> <span>Laporan</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>login/logout">
                <i class="fas fa-sign-out-alt fa-2x text-gray-300"></i> <span>LOG OUT</span></a>
            </li>

        </ul>
    </body>
</html>

