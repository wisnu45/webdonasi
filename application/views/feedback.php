<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/front/images/cantik.jpg'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
	<title>Feedback - Donasi Ku</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<!--main-->

<div class="container-fluid">

   <div class="section">
        <div class="mt-inner">
        <h1 class="font-bold font-l text-left" style="margin-top: 150px">Bersama Kita Bisa</h1>
          <br>
            <div class="alert alert-success col-md-6">
                <form method="post" action="<?php echo base_url('Feedback/tambah') ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama_feedback" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label >No Telepon (WhatsApp)</label>
                        <input type="number" name="no_telp_feedback" class="form-control" class="no_telp" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pesan</label>
                        <textarea type="text" name="pesan_feedback" class="form-control" placeholder="Pesan" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block"><span class="text-white">Kirim Masukan</span></button>
                   </form>
         </div>

         <div class="col-md-6">
             <br>
             <h1 class="text-content font-bold font-xl">Untuk Kita Bisa Membangun Negri</h1>
             <br>
             <h2 class="text-content font-bold font-xl">#SodakohIkhlas </h2>
             <br>
            <p class="text-content font-lg" >"Sisihkan Rezeki Mu Untuk Berbagi, Yang Penting Ikhlas, Oke Terimaksih"</p>
         </div>
      </div>
    </div>
</div>
</div>

    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/js'); ?>
   <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <?php
        if($this->session->flashdata('message_success')) {
    ?>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message_success'); ?>",
            icon: "success",
            button: true,
            timer: 99999
        });
    </script>
    <?php
        }
    ?>

</body>
</html>