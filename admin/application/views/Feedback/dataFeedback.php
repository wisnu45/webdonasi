<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Data Feedback | Donasi Ku</title>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Feedback</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-globe"></i> Feedback</a></li>
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
                                    <th>No Telp</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($tmpFeedback as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->nama_feedback; ?></td>
                                        <td><?php echo $rows->no_telp_feedback; ?></td>
                                        <td><?php echo $rows->pesan_feedback; ?></td>
                                        <td><?php echo tgl_indo($rows->tgl_feedback); ?></td>
                                        <td>
                                            <center>
                                            <a href="<?php echo base_url('admin/Feedback/delete/'.$rows->id_feedback) ?>" onclick="return confirm(' Apakah anda yakin HAPUS DATA FEEDBACK ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
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

<?php $this->load->view('layout/js'); ?>

</body>
</html>