<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-8">
            <!-- general form elements -->
            <a href="<?php echo base_url('admin/dashboard') ?>" class="btn btn-primary btn-sm mb-2"><i class="fas fa-angle-double-left"></i> Kembali</a>
            <div class="card card-primary">
              <div class="card-header">
                <div class="col">
                  <h3 class="card-title">Detail Perumahan</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <ul class="list-group">
                <li class="list-group-item"><p>Nama Perumahan: <?php echo $perumahan->nama_perumahan; ?></p></li>
                <li class="list-group-item"><p>daya listrik: <?php echo $perumahan->daya_listrik; ?></p></li>
                <li class="list-group-item"><p>keamanan: <?php echo $perumahan->keamanan; ?></p></li>
                <li class="list-group-item"><p>sumber air: <?php echo $perumahan->sumber_air; ?></p></li>
                <li class="list-group-item"><p>jarak pasar: <?php echo $perumahan->jarak_pasar; ?></p></li>
                <li class="list-group-item"><p>Jarak Sekolah: <?php echo $perumahan->jarak_sekolah; ?></p></p></li>
              </ul>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



    

