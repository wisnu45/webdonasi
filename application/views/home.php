<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url('assets/front/images/cantik.jpg'); ?>" rel="shortcut icon">
  <?php $this->load->view('layout/meta'); ?>
	<title>Home - Donasi Ku</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<!--main-->
<div class="container-fluid-full">

<!--slider-->
<br><br><br><br>
<div class="row">
  <div class="col-md-12">    
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
       <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
       </ol>

           <div id="row bg-img" id="rentyour">
           <!-- Wrapper for slides -->
              <div class="carousel-inner">
                 <div class="item active">
									<img src="<?php echo base_url('assets/front/images/slider/Do1.jpg') ?>" alt="0"> 
						     </div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/Do2.jpg') ?>" alt="1">							
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/Do3.jpg') ?>" alt="2">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/Do4.jpg') ?>" alt="3">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/Do5.jpg') ?>" alt="4">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/Do6.jpg') ?>" alt="5">
							</div>
            </div>
          </div>
        </div>
      </div>
		</div>
	<!--end slider-->
	
	<br><br>
	<div class="row" id="city">
		<div class="section">
			<div class="col-md-12 text-center">
				<h5 class="font-purple font-bold font-xl">Donasi Ku</h5>
				<p class="font-medium font-md">Bersama Kita Bisa</p>
				<br><br>
				
			</div>

		<div class="dropdown col-md-12" style="margin-bottom: 16px;">
			<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				sorting
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="<?php echo base_url('/') ?>">Time</a></li>
				<li><a href="<?php echo base_url('home/ascending') ?>">A-Z</a></li>
				<li><a href="<?php echo base_url('home/descending') ?>">Z-A</a></li>
			</ul>
		</div>

			<?php
				foreach($donasi as $row) {
			?>
			
			<a href="<?php echo base_url('/donasi/detail/'.$row->id_donasi); ?>">
			<div class="flex-container_item col-md-4">
				<div class="thumbnail" style="padding: 0;">
					 <img style="width: 300px; height: 250px;" src="<?php echo base_url('assets/'.$row->img1); ?>"/>
						<div class="caption">
							<h4 style="width: 300px; height: 60px;" class="font-bold"><?php echo $row->nama_donasi; ?></h4>
							<h4>&nbsp;<span class="badge"><?php echo $row->kategori_donasi; ?></span></h4>
						</div>
						<hr>
						<div class="col-md-6">
							<h5>&nbsp;Sisa Hari</h5>
							<h4><span class="m-card_footer">&nbsp;<?php echo $row->masa_aktif; ?></span></h4>
						</div>
						<div class="col-md-6">
							<h5>&nbsp;Terkumpul</h5>
							<h4><span class="m-card_footer">&nbsp;<?php echo 'Rp.'.nominal($row->perolehan_donasi); ?></span></h4>
						</div>
					<hr><hr><hr>
				</div> 
			</div>
			<?php 
	
			} ?>
			</a>
		</div>
	</div>

	<div class="row bg-img" id="rentyour">
		<div class="section font-white">
			<div class="col-md-12 text-center">
				<h2 class="font-lg font-bold ">Dari Kami Untuk Donasi Ku</h2><br>
				<div class="col-md-6">
				<p class="font-md font-medium">Donasi Ku~Bersama kita bisa merubah dunia dan kenyamanan untuk membantu sesama.</p>
				</div>
				<div class="col-md-6">
				<p class="font-md font-medium">Ini sebuah donasi untuk sosial. </p>
				</div>
				<br>
			</div>
		</div>
	</div>
	
	<div class="container-fluid" id="subscribe">
		<div class="section section-p">
			<div class="section-c">
				<h3>Partner Bank</h3>
			</div>
			<div class="row row-w">
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/mandirisyariah.jpg'); ?>">
					<h6 class="font-bold">Mandiri Syariah</h6>
				</div>
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/muammalat.png'); ?>">
					<h6 class="font-bold">Muamalat</h6>
				</div>
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/mandiri.jpg'); ?>">
					<h6 class="font-bold">Mandiri</h6>
				</div>
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/bca.jpg'); ?>">
					<h6 class="font-bold">BCA</h6>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('layout/footer'); ?>

</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	
	<?php $this->load->view('layout/js'); ?>

</body>
</html>