<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Edit Bayar | Lembaga Manajemen Infaq</title>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Transaksi</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa credit-card"></i> Transaksi</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Edit Bayar</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">
            <?php
              foreach($tmpEditBayar as $rows) {
            ?>
            
              <form action="<?php echo base_url('admin/Transaksi/updateBayar'); ?>" method="post" class="chart-box">
                <h4>Edit Bayar</h4>
                <h4><?php echo $rows->kode_transaksi; ?></h4>
                <br/>
                <div class="row">
                <input class="form-control" value="<?php echo $rows->id_transaksi; ?>" name="id_transaksi" id="basicInput" type="hidden" />
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Bayar</label>
                      <select name="bayar" class="form-control">
                        <?php
                            if($rows->bayar == 0) {
                                echo "<option value='0' selected>Belum</option>
                                      <option value='1'>Dibayar</option>";
                            } else {
                                echo "<option value='0'>Belum</option>
                                      <option value='1' selected>Dibayar</option>";
                            }
                        ?>
                        </select>
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

</body>
</html>