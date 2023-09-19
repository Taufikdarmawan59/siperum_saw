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
                  <h3 class="card-title">Tambah Data Perumahan</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/tambah_data'); ?>" method="post" enctype="multipart/form-data" class="row g-3 needs-validation">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nama Perumahan:</label>
                        <input class="form-control" type="text" name="nama_perumahan" value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Daya Listrik:</label>
                        <input class="form-control" type="number" name="daya_listrik" value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Keamanan:</label>
                        <input class="form-control" type="text" name="keamanan" value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Sumber Air:</label>
                        <input class="form-control" type="text" name="sumber_air" value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Jarak Pasar:</label>
                        <input class="form-control" type="text" name="jarak_pasar" value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Jarak Sekolah:</label>
                        <input class="form-control" type="text" name="jarak_sekolah" value="" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit" value="Update">Submit</button>
                  </div>
                </div>
                </form>
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
   

