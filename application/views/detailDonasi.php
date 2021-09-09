<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/front/images/cantik.jpg'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
	<title>Detail Donasi - Donasi Ku</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<!--main-->

    <div class="container-fluid">
        <?php
			foreach($donasi as $row) {
		?>
          <div class="col-md-12 text-center mt-inner">
           <h1 class="elip font-bold" style="margin-bottom: 30px"><?php echo $row->nama_donasi; ?></h1>
           
        <div class="col-md-6" style="padding: 50px">
        
        <div class="row">
           <div class="col-md-11 text-left">
           <img src="<?php echo base_url('assets/'.$row->img1); ?>" height="80%" width="110%"/>
           <img src="<?php echo base_url('assets/'.$row->img2); ?>" height="80%" width="110%"/>
           <img src="<?php echo base_url('assets/'.$row->img3); ?>" height="80%" width="110%"/>
           <img src="<?php echo base_url('assets/'.$row->img4); ?>" height="80%" width="110%"/>
           <img src="<?php echo base_url('assets/'.$row->img5); ?>" height="80%" width="110%"/>
           </div>
          </div>
		</div>
      
        <div class="thumbnail col-md-6">
        <!-- <h3 class="eclip text-left mt-inner" >Kategori : <?php echo $row->kategori_donasi; ?></h3> -->
        <h3 class="eclip text-left mt-inner" >Tercapai &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <b><?php echo 'Rp '.nominal($row->perolehan_donasi); ?></b></h3>
        <h3 class="eclip text-left mt-inner" >Target   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo 'Rp '.nominal($row->target_donasi); ?></h3>
        <h3 class="eclip text-left mt-inner" >Berakhir Tgl &nbsp: <?php echo tgl_indo($row->masa_donasi); ?></h3>
        <h3 class="eclip text-left mt-inner" >Sisa Hari &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $row->masa_aktif; ?> Hari</h3>
        <a href="<?php echo base_url('/Donatur/register/'.$row->id_donasi); ?>" class="btn btn-success btn-lg btn-block" role="button">Donasi Sekarang</a>
        </div>
        <h4 class="eclip text-left mt-inner"><?php echo $row->deskripsi_donasi; ?></h4>
        <?php } ?>
    </div>
    </div>
</div>

<div class="container-fluid">
	<?php $this->load->view('layout/footer'); ?>
</div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" 
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	
    <script>
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

	<?php $this->load->view('layout/js'); ?>
</body>
</html>