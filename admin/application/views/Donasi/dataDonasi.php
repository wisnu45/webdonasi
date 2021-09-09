<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Data Donasi | Donasi Ku</title>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Donasi</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-file"></i>Donasi</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <h4>Data Donasi</h4>
                        
                        <div class="table-responsive m-top-2">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Katagori</th>
                                    <th>Target</th>
                                    <th>Perolehan Sementara</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Buat</th>
                                    <th>Masa Habis</th>
                                    <th>Sisa Hari</th>
                                    <th>Gambar 1</th>
                                    <th>Gambar 2</th>
                                    <th>Gambar 3</th>
                                    <th>Gambar 4</th>
                                    <th>Gambar 5</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($tmpDonasi as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->nama_donasi; ?></td>
                                        <td><?php echo $rows->kategori_donasi; ?></td>
                                        <td><?php echo 'Rp.'.nominal($rows->target_donasi); ?></td>
                                        <td><?php echo 'Rp.'.nominal($rows->perolehan_donasi); ?></td>
                                        <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Klik Disini</button>
                                        <div id="demo" class="collapse">
                                        
                                        </div> -->
                                        <td><?php echo $rows->deskripsi_donasi; ?></td>
                                        <td><?php echo tgl_indo($rows->tgl_donasi); ?></td>
                                        <td><?php echo tgl_indo($rows->masa_donasi); ?></td>
                                        <td><?php echo $rows->masa_aktif; ?></td>
                                        <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img1); ?>" /></td>
                                        <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img2); ?>" /></td>
                                        <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img3); ?>" /></td>
                                        <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img4); ?>" /></td>
                                        <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/'.$rows->img5); ?>" /></td>
                                        <td>
                                        
                                            <center>
                                                <a href="<?php echo base_url('admin/Donasi/edit/'.$rows->id_donasi); ?>"
                                                onclick="return confirm(' Apakah anda yakin EDIT DATA DONASI ini ? ');"
                                                ><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url('admin/Donasi/delete/'.$rows->id_donasi) ?>" onclick="return confirm(' Apakah anda yakin HAPUS DATA DONASI ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php $this->load->view('layout/js'); ?>

</body>
</html>