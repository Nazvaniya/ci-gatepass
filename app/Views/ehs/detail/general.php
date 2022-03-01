<?= $this->extend('templates/waste') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

  <div class="card px-5 py-3 shadow">
    <div class="row">
      <div class="col-sm-1">
        <img id="access" src="<?= base_url('/image/bin.png'); ?>">
      </div>
      <div class="col-7 p-2">
        <h5 class="display-5">Detail Limbah General Gate Pass</h5>
      </div>
      <div class="col-4 text-right">
        <a type="button" href="<?= base_url('/invoice') ?>" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
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
            <tr>
              <td>Nomor Gate Pass</td>
              <td>:</td>
              <td>EHS-G/EHS/0001</td>

              <td>Departemen</td>
              <td>:</td>
              <td>EHS</td>

            </tr>
            <tr>
              <td>Jenis Limbah</td>
              <td>:</td>
              <td>General</td>
              <td>Bagian</td>
              <td>:</td>
              <td>EHS</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
      <div class="row ">
        <div class="col-sm-12">
          <table class="table table-borderless">
            <tr>
              <td>Nama Vendor</td>
              <td>:</td>
              <td>PT. Jamewin</td>
              <td>Nama Sopir</td>
              <td>:</td>
              <td>Didit</td>
              <td>Nomor Kendaraan</td>
              <td>:</td>
              <td>BP 9832 BZ</td>
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
          <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y 10:00'); ?>" readonly>
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
          <input type="text" class="form-control" id="validation_status" value="Diverifikasi" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputTakeDateValid">Tanggal Terverifikasi Security </label>
          <input type="text" class="form-control" id="action_take_validation" value="<?php echo date('d-m-Y 11:00'); ?>" readonly>
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
      <div class="px-3 py-1 text-white rounded shadow" id="information">Informasi Limbah</div>
      <div class="row p-2">
        <div class="mb-3 col-sm-12">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
              <thead>
                <tr>
                  <th style="width: 25px">No</th>
                  <th>Nama Limbah</th>
                  <th>Qty</th>
                  <th>Berat</th>
                  <!-- <th>Return Type</th> -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Carton Box</td>
                  <td>50 Box</td>
                  <td>10 Kg</td>
                  <!-- <td>Unreturnable</td> -->
                </tr>
                <tr>
                  <td>2</td>
                  <td>Canteen Waste</td>
                  <td>10 Box</td>
                  <td>5 Kg</td>
                  <!-- <td>Unreturnable</td> -->
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="form-row ml-2">
        <div class="form-group col-sm-4">
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              Foto Truck & Barang
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="">
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
          <!-- <button type="button" class="btn btn-secondary">Reject</button> -->
          <!-- <button type="button" class="btn btn-primary">Approve</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure want to Rejected?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="">Please Give Your Reason</label>
              <input type="text" class="form-control " id="name" name="name" placeholder="Your Reason">
              <div class="invalid-feedback errorName">
                Please give your reason.
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-dark">Yes, Confirm</button>
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