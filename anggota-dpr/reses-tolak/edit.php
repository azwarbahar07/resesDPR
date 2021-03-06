<?php
require '../template/header/header.php';
// $id_lokasi = $_GET['id_lokasi'];
// $lokasi = mysqli_query($conn, "SELECT * FROM tb_lokasi_reses WHERE id_lokasi='$id_lokasi'");
// $dta_lokasi = mysqli_fetch_assoc($lokasi);

$id_aspirasi = $_GET['id_aspirasi'];
$aspirasi = mysqli_query($conn, "SELECT * FROM tb_aspirasi WHERE id_aspirasi='$id_aspirasi'");
$dta_aspirasi = mysqli_fetch_assoc($aspirasi);

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Reses Ditolak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/reses-dprd/anggota-dpr/">Home</a></li>
              <li class="breadcrumb-item"><a href="/reses-dprd/anggota-dpr/reses-tolak/data.php">Reses Ditolak</a></li>
              <li class="breadcrumb-item active">Edit Reses Ditolak</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Aspirasi</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form method="POST" action="controller.php" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label>Kegiatan</label>
                <textarea class="form-control"  name="kegiatan" id="kegiatan" rows="3" placeholder=""><?= $dta_aspirasi['kegiatan'] ?></textarea>
              </div>

              <div class="form-group">
                <label>SKPD</label>
                <textarea class="form-control" name="skpd" id="skpd" rows="3" placeholder=""><?= $dta_aspirasi['skpd'] ?></textarea>
              </div>

              <div class="form-group">
                <label>Lokasi</label>
                <textarea class="form-control" name="lokasi" id="lokasi" rows="3" placeholder=""><?= $dta_aspirasi['lokasi'] ?></textarea>
              </div>

              <div class="col-12">
                <input type="text" hidden id="id_aspirasi" name="id_aspirasi" value="<?= $dta_aspirasi['id_aspirasi'] ?>" class="form-control">
              <button type="submit" name="update_aspirasi" id="update_aspirasi" disabled="" class="btn btn-success float-right" style="margin-top: 3% ; margin-left: 2%;">Simpan dan Kirim</button>
              <a href="/reses-dprd/anggota-dpr/reses-tolak/data.php" class="btn btn-secondary float-right" style="margin-top: 3% ;">Batal</a>
            </div>
            </form>
            </div>
            <!-- /.card-body -->

            <br>
          </div>
          <!-- /.card -->


        </div>
      </div>
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$('form')
		.each(function(){
			$(this).data('serialized', $(this).serialize())
		})
        .on('change input', function(){
            $(this)
                .find('input:submit, button:submit')
                    .attr('disabled', $(this).serialize() == $(this).data('serialized'))
            ;
         })
		.find('input:submit, button:submit')
			.attr('disabled', true)
	;
</script>


<?php
require '../template/footer/footer.php';
?>