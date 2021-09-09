<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/front/images/cantik.jpg'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
	<title>Register Donatur - Donasi Ku</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<!--main-->

<div class="container-fluid" id="background">
   <div class="section">
   <?php
     foreach($donasi as $row) {
        ?>
        <div class="mt-inner">
        <h1 class="font-bold font-l text-left" style="margin-top: 150px">Silakan Masukan Data Anda</h1>
          <br>
            <div class="alert alert-success col-md-6">
            
                <form method="post" action="<?php echo base_url('Donatur/create') ?>">
                <input type="hidden" name="id_donasi" value="<?php echo $row->id_donasi; ?>">

                <div class="form-group">
                <h4 class="elip font-bold" style="margin-bottom: 30px"><b><?php echo $row->nama_donasi; ?></b></h4>
                    <label for="exampleInputEmail1">Donasi</label>
                    <input type="text" name="jumlah_donasi" class="form-control" placeholder="Rp." id="maskMoney" required/>        
                </div>
                <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label >No Telepon (WhatsApp)</label>
                        <input type="text" name="no_telp_donatur" class="form-control" class="no_telp_donatur" placeholder="No Telepon" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pesan</label>
                        <textarea type="text" name="pesan_donatur" class="form-control" placeholder="Pesan" rows="3" required></textarea>
                    </div> 
                    <button type="submit" class="btn btn-success white btn-lg btn-block" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading">Lanjut Pembayaran</button>
                </form>
                
                <?php
    
            }
            ?>
         </div>

         <div class="col-md-6">
             <br>
             <h1 class="text-content font-bold font-xl">Untuk Kita Bisa Membangun Negri </h1>
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
   <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
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
    <script type="text/javascript">
        $(document).ready(function () {
             $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
        });
    </script>
    <script type="text/javascript">
    $('.btn').on('click', function() {
        var $this = $(this);
        $this.button('loading');
    });
</script>
    <?php
        }
    ?>

   
    
</body>
</html>