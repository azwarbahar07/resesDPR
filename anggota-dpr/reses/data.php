<?php
require '../template/header/header.php';

$jadwal = mysqli_query($conn, "SELECT * FROM tb_jadwal WHERE status_jadwal='Berjalan'");
$dta_jadwal = mysqli_fetch_assoc($jadwal);
$jadwal_laporan = $dta_jadwal['id_jadwal'] ;
$lokasi = mysqli_query($conn, "SELECT * FROM tb_lokasi_reses WHERE id_anggota=$get_id_akun_anggota AND id_jadwal='$jadwal_laporan'");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/reses-dprd/anggota-dpr/">Home</a></li>
              <li class="breadcrumb-item active">Lokasi Reses</li>
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
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp Tambah Lokasi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>tanggal</th>
                    <th>Dokumentasi</th>
                    <th>Aspirasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                   $i = 1; foreach($lokasi as $dta) {
                    ?>
                  <tr>
                    <td style="text-align:center"><?= $i ?></td>
                    <td><?= $dta['nama_lokasi'] ?></td>
                    <td><?= $dta['tanggal_lokasi'] ?></td>
                    <td style="text-align:center"><a href="#"><i>Dokumentasi..</i></a></td>
                    <td style="text-align:center"><a href="data-aspirasi.php?id_lokasi=<?= $dta['id_lokasi'] ?>"><i>Lihat Aspirasi</i></a></td>
                      <td style="text-align:center">
                        <!-- <button type="submit" name="update_status_laporan" class="btn btn-primary"><i class="fa fa-check"></i></button> -->
                        <a href="edit.php?id_lokasi=<?= $dta['id_lokasi'] ?>" type="button" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                        <a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger<?= $dta['id_lokasi'] ?>" ><i class="fa fa-trash"></i></a>
                        </form>
                    </td>
                  </tr>

      <!-- Modal Hapus -->
      <div class="modal fade" tabindex="-1" id="modal-danger<?= $dta['id_lokasi'] ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Lokasi Reses</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin Menghapus Lokasi Reses</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="controller.php?hapus_lokasi_reses=true&id_lokasi=<?= $dta['id_lokasi'] ?>" type="button" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  <?php 
                  $i = $i + 1; } 
                  ?>
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
require '../template/footer/footer.php';
?>