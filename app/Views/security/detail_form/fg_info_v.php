<?= $this->extend('templates_security/index') ?>
<?= $this->section('content') ?>
<div class="container mt-1">

  <div class="card px-5 py-2 shadow">
    <div class="row">
      <div class="col-sm-1">
        <img id="access" src="<?= base_url('/image/logistic.png'); ?>">
      </div>
      <div class="col-7 p-2">
        <h5 class="display-5">Detail Finish Goods & Material Gate Pass</h5>
      </div>
      <div class="col-4 text-right">
        <a type="button" href="<?= base_url('/invoice') ?>" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
      </div>
    </div>
  </div>

  <div class="card mt-2 shadow card-body">
    <div class="card-header bg-white">
      <div class="">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informasi Utama</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Informasi Barang</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="p-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
            <div class="row ">
              <div class="col-sm-10">
                <table class="table table-borderless">
                  <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?php echo date('d-m-Y'); ?></td>
                    <td>Dikeluarkan Oleh</td>
                    <td>:</td>
                    <td>Gunawan</td>
                  </tr>
                  <tr>
                    <td>Nomor Gate Pass</td>
                    <td>:</td>
                    <td>FG-M/0122/0004</td>
                    <td>Departemen</td>
                    <td>:</td>
                    <td>Logistic</td>
                  </tr>
                  <tr>
                    <td>Status Barang</td>
                    <td>:</td>
                    <td id="goods_status">N/A</td>
                    <td>Bagian</td>
                    <td>:</td>
                    <td>Logistic</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="p-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
            <div class="row ">
              <div class="col-sm-12">
                <table class="table table-borderless">
                  <tr>
                    <td>Nama Vendor</td>
                    <td>:</td>
                    <td>PT. Tropolis</td>
                    <td>Nama Sopir</td>
                    <td>:</td>
                    <td>Ron</td>
                    <td>Nomor Kendaraan</td>
                    <td>:</td>
                    <td>Bp 2946 XZ</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="p-1 text-white rounded shadow" id="information">Informasi Persetujuan</div>
            <div class="form-row p-1">
              <div class="form-group col-sm-3">
                <label for="inputApprovalStatus">Status Persetujuan Pengajuan</label>
                <input type="text" class="form-control" id="approval_status" value="Disetujui" readonly>
              </div>
              <div class="form-group col-sm-3">
                <label for="inputTakeDate">Tanggal Persetujuan Pengajuan</label>
                <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
              </div>
              <div class="form-group col-sm-3">
                <label for="inputApprover">Penyetuju Pengajuan</label>
                <input type="text" class="form-control" id="approval_name" value="Laksemana Lufti" readonly>
              </div>
              <div class="form-group col-sm-3">
                <label for="returntype">Pernyataan Persetujuan Pengajuan</label>
                <input type="text" class="form-control" id="return_dis" value="N/A" readonly>
              </div>
            </div>
            <div class="form-row p-1">
              <div class="form-group col-sm-3">
                <label for="inputValidatorStatus">Status Verifikasi Security </label>
                <input type="text" class="form-control" id="validation_status" value="N/A" readonly>
              </div>
              <div class="form-group col-sm-3">
                <label for="inputTakeDateValid">Tanggal Terverifikasi Security </label>
                <input type="text" class="form-control" id="action_take_validation" value="N/A" readonly>
              </div>
              <div class="form-group col-sm-3">
                <label for="inputValidator">Pemverifikasi Security</label>
                <input type="text" class="form-control" id="validator_name" value="N/A" readonly>
              </div>
              <div class="form-group col-sm-3">
                <label for="Remark">Pernyataan Verifikasi Security</label>
                <input type="text" class="form-control" id="reason_reject" value="N/A" readonly>
              </div>
            </div>

          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="p-1 text-white rounded shadow" id="information">Informasi Barang</div>
            <div class="form-row p-2">
              <div class="form-group col-sm-4">
                <div class="card">
                  <div class="card-header">
                    Foto Truck & Barang
                  </div>
                  <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                      <a href="#" data-toggle="modal" data-target="#popup_image">
                        img 17122021.jpg
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="" data-toggle="modal" data-target="#popup_image2">
                        img 17122022.jpg
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row p-2">
              <div class="mb-3 col-sm-10">
                <div class="table-responsive">
                  <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Kuantitas</th>
                        <th>Keterangan</th>
                        <th>Estimasi Kembali</th>
                        <th>Cek</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Resistor</td>
                        <td>5 Pallet</td>
                        <td>simpan di tropolis</td>
                        <td>N/A</td>
                        <td>
                          <div class="form-check">
                            <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Capasitor Material</td>
                        <td>10 Pallet</td>
                        <td>simpan di tropolis</td>
                        <td>N/A</td>
                        <td>
                          <div class="form-check">
                            <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Coil Material</td>
                        <td>4 Pallet</td>
                        <td>simpan di tropolis</td>
                        <td>N/A</td>
                        <td>
                          <div class="form-check">
                            <input class="checkbox" type="checkbox" id="cb_security" value="option1" aria-label="...">
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row p-3 justify-content-end">
              <div class="col-auto">
                <button type="button" class="btn btn-danger" id="btn_rejected" data-toggle="modal" data-target="#exampleModal" disabled>Menolak</button>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-primary" id="btn_verified" data-toggle="modal" data-target="#scan_modal" disabled>Verifikasi</button>
              </div>
            </div>

          </div>
        </div>

        <script>
          $(function() {
            $('#myTab li:last-child a').tab('show')
          })
        </script>
      </div>
    </div>
    <!-- Modal reject -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menolak?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="">Silahkan Berikan Alasan Anda</label>
                <input type="text" class="form-control " id="reason" name="resaon" placeholder="Alasan Anda">
                <div class="invalid-feedback errorName">
                  Silahkan Berikan Alasan Anda.
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#scan_modal">Ya, Konfirmasi</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Your Code-->
    <div class="modal fade" id="scan_modal" tabindex="-1" aria-labelledby="scan_modal_label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="scan_modal_label">Scan ID Barcode Anda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="">Menunggu...</label>
                <input type="text" class="form-control " id="name" name="name" placeholder="Nama" readonly>
                <div class="invalid-feedback errorName">
                  Silakan Pindai ID Barcode yang Benar.
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-dark">Ya, Konfirmasi</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal image -->
    <div class="modal fade" id="popup_image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?php echo base_url('/image/lorry1.jpg'); ?>" style="width:100%;height:100%;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal image -->
    <div class="modal fade" id="popup_image2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?php echo base_url('/image/lorryfront.jpg'); ?>" style="width:100%;height:100%;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
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
<script src="<?= base_url("/assets/script.js"); ?>"> </script>

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