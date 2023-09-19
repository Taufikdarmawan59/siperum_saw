<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><?= $user['name']; ?></li>
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
            <a href="" class="btn btn-primary btn-sm mb-2"><i class="fas fa-angle-double-left"></i> Kembali</a>
              <!-- /.card-header -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="<?= base_url(); ?>assets/dist/img/rumah1.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="<?= base_url(); ?>assets/dist/img/rumah1.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="<?= base_url(); ?>assets/dist/img/rumah1.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="<?= base_url(); ?>assets/dist/img/rumah1.jpg" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
        <br>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



    

