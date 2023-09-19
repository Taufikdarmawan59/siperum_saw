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
                  <h3 class="card-title">Perhitungan Rangking Perumahan</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- tabel start -->
                <table  id="tabel-data" class="table table-striped table-bordered"  cellspacing="0">
                    <thead>
                      <tr>
                          <th class="align-middle text-center">Nama Perumahan</th>
                          <th class="align-middle text-center">Nilai Ranking</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($perumahan as $r): ?>
                          <tr>
                              <td class="align-middle text-center"><?php echo $r->nama_perumahan; ?></td>
                              <td class="align-middle text-center"><?php echo $nilai_ranking[$r->id]; ?></td>
                          </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

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



