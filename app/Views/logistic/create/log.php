<?= $this->extend('templates/logistic') ?>
<?= $this->section('content') ?>
<div class="container-fluid mt-2">

  <div class="card px-5 py-3 shadow">
    <div class="row">
      <div class="col-sm-1">
        <img id="access" src="<?= base_url('/image/logistic.png'); ?>">
      </div>
      <div class="col-sm-11 p-2">
        <h5 class="display-5">Pengajuan Finish Goods & Material Gate Pass</h5>
      </div>
    </div>
  </div>
  <form>
    <div class="card mt-3 shadow card-body">
      <div class="p-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
      <div class="form-row p-2">
        <div class="form-group col-sm-4">
          <label for="inputNoGatepass">Nomor Gate Pass</label>
          <input type="text" class="form-control" id="no_gatepass" value="FG-M/0122/0004" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputdate">Tanggal</label>
          <input type="text" class="form-control" id="date" value="<?php echo date('d-m-Y'); ?>" readonly>
        </div>
      </div>
      <div class="form-row p-1">
        <div class="form-group col-sm-4">
          <label for="inputissued">Dikeluarkan Oleh</label>
          <input type="text" class="form-control" id="issued" value="Gunawan" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputDepartment">Departemen</label>
          <input type="text" class="form-control" id="department" name="department" placeholder="Departmen" value="Logistic" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputSection">Bagian</label>
          <input type="text" class="form-control" id="section" name="section" placeholder="Section" value="Logistic" readonly>
        </div>
      </div>
      <div class="p-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
      <div class="form-row p-1">
        <div class="form-group col-sm-4">
          <label for="inputvendor">Nama Vendor</label>
          <select class="select2 form-control" id="name_vendor" name="vendor_name">
            <option>Pilih Vendor</option>
            <option>PT. Tropolis</option>
          </select>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputdriver">Nama Sopir</label>
          <select class="select2 form-control" id="name_driver" name="driver_name">
            <option>Pilih Sopir</option>
            <option>Ron</option>
            <option>Sujarwo</option>
          </select>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputRegnNo">Nomor Kendaraan</label>
          <select class="select2 form-control" id="regn_no" name="regn_no">
            <option>Pilih Nomor Kendaraan</option>
            <option>Bp 2946 XZ</option>
            <option>Bp 9387 ZB</option>
          </select>
        </div>
      </div>
      <div class="p-1 text-white rounded shadow" id="information">Informasi Barang</div>
      <div class="row ">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th style="width: 25px">No</th>
                  <th>Jenis Barang</th>
                  <th style="width: 75px">Qty</th>
                  <th style="width: 155px">Jenis Satuan</th>
                  <th style="width: 195px">Jenis Pengembalian</th>
                  <th style="width: 250px">Keterangan</th>
                  <th style="width: 150px">Estimasi Kembali</th>
                  <th style="width: 110px">Aksi</th>
                </tr>
              </thead>
              <tbody id="goodslist">
                <tr>
                  <td>
                    <?php $i = 1;
                    echo $i++ ?>
                  </td>
                  <td>
                    <select class="select2 form-control" name="type_goods[]" data-placeholder="Pilih Barang">
                    <option></option>
                      <option>Finish Goods</option>
                      <option>Material Production</option>
                      <option>Pallet</option>
                      <option>Box</option>
                      <option>Wrapping</option>
                      <option>Angle Protector</option>
                    </select>
                  <td>
                    <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
                  </td>
                  <td>
                    <select class="select2 form-control" name="type_unit[]" data-placeholder="Pilih Jenis Satuan">
                      <option></option>
                      <option>Unit</option>
                      <option>Lot</option>
                      <option>Kg</option>
                      <option>Pcs</option>
                      <option>Box</option>
                      <option>Jumbo Bag</option>
                      <option>Lorry</option>
                      <option>Pallet</option>
                      <option>Drum</option>
                      <option>Tin</option>
                    </select>
                  </td>
                  <td>
                    <select id="selectType" class="form-control" name="return_type[]">
                      <option id="unreturnable">Tidak Dikembalikan</option>
                      <option id="returnable">Dikembalikan</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="remark" name="remark[]">
                  </td>
                  <td>
                    <input type="date" class="form-control" id="estimation_date" name="expected_date[]" disabled>
                  </td>
                  <td>
                    <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <button type="button" class="btn btn-info add_item_btn">Tambahkan</button>
          </div>

          <!-- <div class="row">
            <div class="mt-3 form-group col-sm-4" id="expected_date">
              <label for="inputdate">Kapan semua barang akan dikembalikan?</label>
              <input type="date" class="form-control" name="expected_date">
            </div>
          </div> -->

          <div class="row">
            <div class="mt-3 form-group col-sm-5">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="camera-tab" data-toggle="tab" href="#camera" role="tab" aria-controls="camera" aria-selected="true">Kamera</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Unggah</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="camera" role="tabpanel" aria-labelledby="home-tab">
                  <label for="formFileMultiple" class="form-label">Foto Truck & Barang</label><br>
                  <!-- <input  type="file" id="formFileMultiple" multiple> -->
                  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#takephoto">Ambil Foto</button>
                  <p class="text-danger small">*Min-Maks 0.1MB-2MB</p>
                </div>
                <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="profile-tab">
                  <label for="formFileMultiple" class="form-label">Foto Truck & Barang</label><br>
                  <input type="file" id="formFileMultiple" multiple>
                  <p class="text-danger small">*Min-Max 0.1MB-2MB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row p-3 justify-content-end">
        <div class="col-auto">
          <button type="button" onClick="history.go(-1);" class="btn btn-dark">Kembali</button>
          <input type="reset" value="Bersihkan" class="btn btn-danger"></input>
          <a type="submit" class="btn btn-primary" href="<?php echo base_url('logistic/dashboard/approval'); ?>">Simpan</a>
  </form>
</div>
</div>
</div>
</div>


<div class="modal" id="takephoto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ambil Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <video autoplay="true" id="videoElement" width="100%" height="300px">

        </video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Ambil</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>


<script>
  var video = document.querySelector("#videoElement");

  if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({
        video: true
      })
      .then(function(stream) {
        video.srcObject = stream;
      })
      .catch(function(err0r) {
        console.log("Something went wrong!");
      });
  }
  $(document).ready(function() {
    let no = 1;
    $(".add_item_btn").click(function(e) {
      e.preventDefault();
      $("#goodslist").append(`  
      <tr>
            <td>
              ${++no}
            </td>
            <td>  
            <select class="select2 form-control" name="type_goods[]" data-placeholder="Pilih Barang">
                    <option></option>
                    <option>Finish Goods</option>
                    <option>Material Production</option>
                    <option>Pallet</option>
                    <option>Box</option>
                    <option>Wrapping</option>
                    <option>Angle Protector</option>
            </select>
            </td>
            <td>
            <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
            </td>
            <td>
            <select class="select2 form-control" name="type_unit[]" data-placeholder="Pilih Jenis Satuan">
                  <option></option>
                  <option>Unit</option>
                  <option>Lot</option>
                  <option>Kg</option>
                  <option>Pcs</option>
                  <option>Box</option>
                  <option>Jumbo Bag</option>
                  <option>Lorry</option>
                  <option>Pallet</option>
                  <option>Drum</option>
                  <option>Tin</option>
                </select>
            </td>
            <td>
            <select id="select[]" class="form-control"  name="return_type[]">
              <option id="unreturnable" name="unreturnable[]">Tidak Dikembalikan</option>
              <option id="returnable" name="returnable[]">Dikembalikan</option>
            </select>
            </td>
            <td>
            <input type="text" class="form-control" id="remark" name="remark[]">
            </td>
            <td>
            <input type="date" class="form-control" id="estimation" name="estimation[]" disabled>
            </td>
            <td>
            <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></i></button>
            <button type="button" class="btn btn-danger btn-sm remove_item_btn">X</button>
            </td>
          </tr>
      
  `);
      $('.select2').select2({

        theme: 'bootstrap4',
        allowClear: true
      });
      
      var el = document.getElementById("select[]");
  el.addEventListener("change", function() {
    var elems = document.querySelectorAll('#estimation')
    console.log(el);
    // var elems = document.querySelectorAll('#estimation')
    for (var i = 0; i < elems.length; i++) {
      elems[i].disabled = true;
    }
    if (this.selectedIndex === 0) {
      document.querySelector('#estimation').disabled = true;
    } else {
      document.querySelector('#estimation').disabled = false;
    }
  }, false);



    });
    $(document).on('click', '.remove_item_btn', function(e) {
      e.preventDefault();
      let row_item = $(this).parent().parent();
      $(row_item).remove();
      no--;
    });
  });
</script>
<script>
  var el = document.getElementById("selectType");
  el.addEventListener("change", function() {
    var elems = document.querySelectorAll('#estimation_date')
    for (var i = 0; i < elems.length; i++) {
      elems[i].disabled = true;
    }
    if (this.selectedIndex === 0) {
      document.querySelector('#estimation_date').disabled = true;
    } else {
      document.querySelector('#estimation_date').disabled = false;
    }
  }, false);
</script>
<script src="<?= base_url("/assets/script.js"); ?>"> </script>
<script>
  $(document).ready(function() {

    $('.select2').select2({
      theme: 'bootstrap4',
      allowClear: true
    });

  });
</script>
<?= $this->endSection() ?>