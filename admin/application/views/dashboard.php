<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Dashboard | Donasi Ku</title>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Dashboard</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li
          </ol>
        </section>

        <section class="content container-fluid">
        <div class="alert alert-danger" role="alert">
          <a>Jika <b>selesai </b>Mohon di <b>Logout</b> Segera</a> 
        </div>
        <div class="row">
            <div class="col-lg-12">
              <div class="chart-box">
                <h4> Selamat Datang | Donasi Ku</h4>
                <div class="chart">
                  <div id="container"></div>
                </div>
              </div>
            </div>
          </div> 
          
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="media-box">
                <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
                <div class="media-info">
                  <h5>Total Donasi</h5>
                  <h3>
                  <?php echo $this->db->get("data_donasi")->num_rows(); ?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="media-box bg-sea">
                <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
                <div class="media-info">
                  <h5>Total Transaksi</h5>
                  <h3>
                  <?php echo $this->db->get("data_transaksi")->num_rows(); ?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="media-box bg-sea">
                <div class="media-icon pull-left"><i class="icon-globe"></i> </div>
                <div class="media-info">
                  <h5>Feedback Masuk</h5>
                  <h3>
                  <?php echo $this->db->get("data_feedback")->num_rows(); ?>
                  </h3>
                </div>
              </div>
            </div>
          
        </section>
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>

</body>
</html>