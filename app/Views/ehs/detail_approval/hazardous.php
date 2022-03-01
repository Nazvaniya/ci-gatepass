<?= $this->extend('templates/waste') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

  <div class="card px-5 py-3 shadow">
    <div class="row">
      <div class="col-sm-1">
        <img id="access" src="<?= base_url('/image/bin.png'); ?>">
      </div>
      <div class="col-sm-11 p-2">
        <h5 class="display-5">Detail Limbah Berbahaya Gate Pass </h5>
      </div>
    </div>
  </div>

  <div class="card mt-3 shadow card-body">
    <div class="">
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
      <div class="row ">
        <div class="col-sm-12">
          <table class="table table-borderless">
            <tr>
              <td>Tanggal</td>
              <td>:</td>
              <td><?php echo date('d-m-Y'); ?></td>
              <td>Dikeluarkan Oleh</td>
              <td>:</td>
              <td>April</td>

            </tr>
            </tr>
            <tr>
              <td>Nomor Gate Pass</td>
              <td>:</td>
              <td>EHS-C/EHS/0002</td>
              <td>Departemen</td>
              <td>:</td>
              <td>EHS</td>

            </tr>
            <tr>
              <td>Jenis Limbah</td>
              <td>:</td>
              <td>Berbahaya</td>
              <td>Bagian</td>
              <td>:</td>
              <td>EHS</td>

            </tr>
          </table>
        </div>
      </div>
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-borderless">
            <tr>
              <td>Nama Vendor</td>
              <td>:</td>
              <td>PT. Desa Air Cargo </td>
              <td>Nama Sopir</td>
              <td>:</td>
              <td>Nasikin</td>
              <td>Nomor Kendaraan</td>
              <td>:</td>
              <td>BP 9033 DU</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Persetujuan</div>
      <div class="form-row p-2">
        <div class="form-group col-sm-3">
          <label for="inputApprovalStatus">Status Persetujuan Pengajuan</label>
          <input type="text" class="form-control" id="approval_status" value="Disetujui" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputTakeDate">Tanggal Persetujuan Pengajuan</label>
          <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y 09:00'); ?>" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputApprover">Penyetuju Pengajuan</label>
          <input type="text" class="form-control" id="approval_name" value="Fitriansyah" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="returntype">Pernyataan Persetujuan Pengajuan</label>
          <input type="text" class="form-control" id="return_dis" value="N/A" readonly>
        </div>
      </div>
      <div class="form-row p-2">
        <div class="form-group col-sm-3">
          <label for="inputValidatorStatus">Status Verifikasi Security </label>
          <input type="text" class="form-control" id="Verification_status" value="Diverifikasi" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputTakeDateValid">Tanggal Terverifikasi Security </label>
          <input type="text" class="form-control" id="action_take_validation" value="<?php echo date('d-m-Y 10:00'); ?>" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputValidator">Pemverifikasi Security</label>
          <input type="text" class="form-control" id="validator_name" value="Ririn" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="Remark">Pernyataan Verifikasi Security</label>
          <input type="text" class="form-control" id="reason_reject" value="N/A" readonly>
        </div>
      </div>
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Barang</div>
      <div class="row mt-3">
        <div class="col">
          <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#revision">Revisi Berat</a>
          <a type="button" class="btn btn-info btn-sm bdg" nbr="1" data-toggle="modal" data-target="#revision_detail">Detail Revisi</a>
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-sm-12">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
              <thead>
                <tr>
                  <th style="width: 25px">No</th>
                  <th>Nama Limbah</th>
                  <th>Nomor Manifest</th>
                  <th>Qty</th>
                  <th>Berat</th>
                  <!-- <th>Return Type</th> -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Flux</td>
                  <td>JL 0067849</td>
                  <td>4 Drum</td>
                  <td>500 Kg</td>
                  <!-- <td>Unreturnable</td> -->
                </tr>
                <tr>
                  <td>2</td>
                  <td>Coolant</td>
                  <td>JL 0067850</td>
                  <td>3 Tin</td>
                  <td>200 Kg</td>
                  <!-- <td>Unreturnable</td> -->
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              Foto Truck & Barang
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="a">
                  img 17122021.jpg
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-right">
          <button type="button" onClick="history.go(-1);" class="btn btn-dark">Kembali</button>
          <!-- <a type="button" href="<?php echo base_url('/invoice'); ?>" class="btn btn-success add_item_btn">Buat Laporan Pengangkutan</a> -->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Menolak</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">Menyetujui</button>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Untuk Menolak Gate Pass Ini?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="form-group">
                  <label for="">Silahkan Berikan Alasan Anda</label>
                  <input type="text" class="form-control " id="name" name="name" placeholder="Alasan Anda">
                  <div class="invalid-feedback errorName">
                    Silahkan Berikan Alasan Anda.
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-danger">Ya, Konfirmasi</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Central Modal Medium Success -->
      <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Untuk Menyetujui Gate Pass Ini?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

            <!--Body-->

            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Ya, Konfirmasi</button>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!-- Central Modal Medium Success-->


      <!-- Revision Modal -->
      <div class="modal" id="revision" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Revisi Berat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
                  <thead>
                    <tr>
                      <th style="width:30px">No</th>
                      <th>Nama Limbah</th>
                      <th>Nomor Manifest</th>
                      <th>Qty</th>
                      <th style="width: 100px">Berat(Kg)</th>
                      <!-- <th>Return Type</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Flux</td>
                      <td>JL 0067849</td>
                      <td>4 Drum</td>
                      <!-- <td>Unreturnable</td> -->
                      <td>
                        <input type="number" min="0.1" step="0.1" class="form-control" id="weight" name="weight[]" value="4000">
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Coolant</td>
                      <td>JL 0067850</td>
                      <td>3 Tin</td>
                      <!-- <td>Unreturnable</td> -->
                      <td>
                        <input type="number" min="0.1" step="0.1" class="form-control" id="weight" name="weight[]" value="150">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label for="" class="font-weight-bold">Bukti Penimbangan : </label> <br>
                  <input type="file" name="weighing_receipt"><br>
                  <small class="text-danger">*Min 0.1MB - Maks 2MB</small>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Perbarui</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Revision modal -->

      <!-- Revision Details -->
      <div class="modal" id="revision_detail" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detail Revisi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6 class="bg-secondary p-2 rounded text-white">Informasi Persetujuan</h6>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Status Persetujuan</label>
                    <input type="text" class="form-control" value="Waiting Approval" readonly>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Tanggal Persetujuan</label>
                    <input type="text" class="form-control" value="N/A" readonly>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Nama Penyetuju</label>
                    <input type="text" class="form-control" value="N/A" readonly>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Keterangan Revisi</label>
                    <input type="text" class="form-control" value="N/A" readonly>
                  </div>
                </div>
              </div>
              <h6 class="bg-secondary p-2 rounded text-white">Informasi Revisi</h6>
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
                  <thead>
                    <tr>
                      <th style="width:30px">No</th>
                      <th>Nama Limbah</th>
                      <th>Nomor Manifest</th>
                      <th>Qty</th>
                      <th style="width: 160px">Berat Sebelumnya(Kg)</th>
                      <!-- <th>Return Type</th> -->
                      <th style="width: 150px">Berat Setelahnya(Kg)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Flux</td>
                      <td>JL 0067849</td>
                      <td>4 Drum</td>
                      <td>4000</td>
                      <!-- <td>Unreturnable</td> -->
                      <td>4200</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Coolant</td>
                      <td>JL 0067850</td>
                      <td>3 Tin</td>
                      <td>150</td>
                      <!-- <td>Unreturnable</td> -->
                      <td>165</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="font-weight-bold">Lampiran : </label>
                <a href="#">Bukti Penimbangan</a>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Menolak</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Menyetujui</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Revision Details -->

    </div>
  </div>
</div>
</div>
</body>

</html>


<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "paging": false,
      "ordering": false,
      "info": false,
      "searching": false
    });
  });
</script>


<script>
  $(document).ready(function() {
    var down = false;

    $('#bell').click(function(e) {

      var color = $(this).text();
      if (down) {

        $('#box').css('height', '0px');
        $('#box').css('opacity', '0');
        down = false;
      } else {

        $('#box').css('height', 'auto');
        $('#box').css('opacity', '1');
        down = true;

      }

    });

  });
</script>
<?= $this->endSection() ?>