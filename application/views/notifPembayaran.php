<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/front/images/cantik.jpg'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
	<title>Notifikasi Pembayaran Donasi - Donasi Ku</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

    <?php $this->load->view('layout/header'); ?>

    <!--main-->
  
    <h1 class="elip font-bold" style="margin-bottom: 30px">test></h1>






	<?php $this->load->view('layout/footer'); ?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
        if($this->session->flashdata('message_success')) {
    ?>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message_success'); ?>",
            icon: "success",
            button: true,
            timer: 9999
        });
    </script>
    <?php
        }
    ?>
	<?php $this->load->view('layout/js'); ?>
</body>
</html>