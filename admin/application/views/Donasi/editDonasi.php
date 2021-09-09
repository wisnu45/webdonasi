<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Edit Donasi | Donasi Ku</title>
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
            <li class="active"><i class="fa fa-dashboard"></i> Edit</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php 
                if($this->session->flashdata('message')) { 
            ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
                } 
                
                foreach($tmpDonasi as $rows) {
            ?>
            
              <form action="<?php echo base_url('admin/Donasi/update'); ?>" method="post" class="chart-box">
                <h4>Update Data Donasi</h4>
                <br/>
                <div class="row">
                <input class="form-control" value="<?php echo $rows->id_donasi; ?>" name="id_donasi" id="basicInput" type="hidden" />
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Judul</label>
                      <input class="form-control" value="<?php echo $rows->nama_donasi; ?>" name="nama_donasi" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Kategori</label>
                      <input class="form-control" value="<?php echo $rows->kategori_donasi; ?>" name="kategori_donasi" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Target</label>
                      <input class="form-control" value="<?php echo $rows->target_donasi; ?>" name="target_donasi" placeholder="Rp." id="maskMoney" type="number" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Perolehan</label>
                      <input class="form-control" value="<?php echo $rows->perolehan_donasi; ?>" name="perolehan_donasi" placeholder="Rp." id="maskMoney" type="number" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Batas Waktu</label>
                      <input class="form-control" value="<?php echo $rows->masa_donasi; ?>" name="masa_donasi" id="datepicker" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Deskripsi</label>
                      <input textarea class="form-control" value="<?php echo $rows->deskripsi_donasi; ?>" name="deskripsi_donasi" id="basicInput" type="text"/>
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 1</label><br>
                      <img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img1); ?>" />
                      <input class="form-control-file" value="<?php echo $rows->img1; ?>" name="img1" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 2</label><br>
                      <img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img2); ?>" />
                      <input class="form-control-file" value="<?php echo $rows->img2; ?>" name="img2" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 3</label><br>
                      <img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img3); ?>" />
                      <input class="form-control-file" value="<?php echo $rows->img3; ?>" name="img3" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 4</label><br>
                      <img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img4); ?>" />
                      <input class="form-control-file" value="<?php echo $rows->img4; ?>" name="img4" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar 5</label><br>
                      <img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img5); ?>" />
                      <input class="form-control-file" value="<?php echo $rows->img5; ?>" name="img5" id="basicInput" type="file" accept="image/x-png,image/gif,image/jpeg"/>
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
                <?php } ?>
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
<script>
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

</body>
</html>