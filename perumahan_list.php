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
            <a href="" class="btn btn-primary btn-sm mb-2"><i class="fas fa-angle-double-left"></i> Kembali</a>
              <div class="card mb-4">
                  <div class="card-header pb-0 bg-primary">
                      <h6>Daftar Perumahan</h6>
                  </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">

                  <div class="card-header">
                    <a href="<?php echo base_url('Admin/tambah_data'); ?>" class="btn btn-primary btn-sm">Tambah Data</a> 
                  </div>
                  <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Perumahan</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Daya Listrik</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keamanan</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sumber Air</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jarak Pasar</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jarak Sekolah</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($perumahan as $row) { ?>
                              <tr>
                                  <td class="align-middle text-center"><?php echo $row->nama_perumahan; ?></td>
                                  <td class="align-middle text-center"><?php echo $row->daya_listrik; ?></td>
                                  <td class="align-middle text-center"><?php echo $row->keamanan; ?></td>
                                  <td class="align-middle text-center"><?php echo $row->sumber_air; ?></td>
                                  <td class="align-middle text-center"><?php echo $row->jarak_pasar; ?></td>
                                  <td class="align-middle text-center"><?php echo $row->jarak_sekolah; ?></td>

                                  <td class="align-middle">
                                      <a href="<?php echo base_url('admin/detail_perumahan/'.$row->id); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                      <a href="<?php echo base_url('admin/update_data/'.$row->id); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                      <a href="<?php echo base_url('admin/delete_data/'.$row->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                  </td>
                              </tr>
                              <?php } ?>
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


