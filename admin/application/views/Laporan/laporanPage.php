<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Laporan | Lembaga Donasi Ku</title>
<?php $this->load->view('layout/css'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Laporan Donasi</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-file"></i> Laporan</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-8 col-md-offset-2">
            <!-- <form action="<?php ?>" method="post" class="chart-box"> -->
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo base_url('admin/Laporan/harian'); ?>" method="post" class="chart-box">
                        <fieldset class="form-group text-center">
                            <h4>Laporan Harian</h4>
                            <br />
                            <div class="col-md">
                                <input class="form-control input-cus" placeholder="Pilih Tanggal" name="tgl_transaksi" type="text" id="dateP" required>
                            </div>
                            <br />
                            <button tyle="margin-right: 10px;" type="submit" class="btn btn-primary">Cetak</button>
                           
                            </form>
                        </fieldset>
                    </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo base_url('admin/Laporan/bulanan'); ?>" method="post" class="chart-box">
                        <fieldset class="form-group text-center">
                            <h4>Laporan Bulanan</h4>
                            <br />
                            <div class="col-md">
                                <input class="form-control input-cus" placeholder="Pilih Bulan" name="bulan" type="text" id="dateB" required>
                            </div>
                            <br />
                            <button tyle="margin-right: 10px;" type="submit" class="btn btn-primary">Cetak</button>
        
                            </form>
                        </fieldset>
                    </div>
            
            <!-- </form> -->
          </div>
        </section>
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $('#dateP').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-365d',
        todayHighlight: true
    });

    $('#dateB').datepicker({
        format: "mm",
        viewMode: "months", 
        minViewMode: "months"
    });
 
</script>
<?php $this->load->view('layout/js'); ?>

</body>
</html>