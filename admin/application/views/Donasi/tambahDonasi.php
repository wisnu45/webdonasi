<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Tambah Donasi | Donasi Ku</title>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Donasi</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-file"></i> Donasi</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Tambah</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php if($this->session->flashdata('message')) { ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
              }?>
            
              <form action="<?php echo base_url('admin/Donasi/create'); ?>" method="post" class="chart-box">
                <h4>Input Data Donasi</h4>
                <br/>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Judul</label>
                      <input class="form-control" name="nama_donasi" id="basicInput" type="text" required/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Kategori</label>
                      <input class="form-control" name="kategori_donasi" id="basicInput" type="text" required/>
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Target</label>
                      <input class="form-control" name="target_donasi" placeholder="Rp."  type="text" required/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Batas Waktu</label>
                      <input class="form-control input-cus" name="masa_donasi" id="datepicker" type="text" required/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Deskripsi</label>
                      <textarea class="form-control" name="deskripsi_donasi" id="basicInput" type="text" required></textarea>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 1</label>
                      <input class="form-control-file" name="img1" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 2</label>
                      <input class="form-control-file" name="img2" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 3</label>
                      <input class="form-control-file" name="img3" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 4</label>
                      <input class="form-control-file" name="img4" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 5</label>
                      <input class="form-control-file" name="img5" id="basicInput" accept="image/x-png,image/gif,image/jpeg"type="file" />
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
        </section>
        
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
    });
</script>
<script type="text/javascript">
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

</body>
</html>