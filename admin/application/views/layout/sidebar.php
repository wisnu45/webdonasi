<aside class="main-sidebar dark-bg">
    <section class="sidebar">
        <div class="user-panel black-bg">
            <div class="pull-left image"> <img src="<?php echo base_url('assets/admin/img/admin.png'); ?>" class="img-circle" alt="User Image" /> </div>
            <div class="pull-left info">
                <p>Rumah Donasi Ku</p>
                <a href="#"><i class="fa fa-circle"></i> Online</a> 
          </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header dark-bg">Menu</li>
            <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-file"></i> <span>Donasi</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/Donasi'); ?>"><i class="fa fa-angle-right"></i> Data Donasi</a></li>
                    <li><a href="<?php echo base_url('admin/Donasi/add'); ?>"><i class="fa fa-angle-right"></i> Tambah Donasi</a></li>
                </ul>
            </li>
        
            <li class="treeview"> <a href="#"><i class="fa fa-credit-card"></i> <span>Transaksi</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/Transaksi'); ?>"><i class="fa fa-angle-right"></i> Data Transaksi</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-globe"></i> <span>Feedback</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/Feedback'); ?>"><i class="fa fa-angle-right"></i> Data Feedback</a></li>
                   
                </ul>
            </li>
            <li><a href="<?php echo base_url('admin/laporan'); ?>"><i class="fa fa-file"></i> Laporan</a></li>
            </li>
        </ul>
    </section>
</aside>