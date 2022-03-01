<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container-fluid mt-2">

  <div class="card px-5 py-3 shadow card-body">
    <div class="row">
      <div class="col-sm-1">
        <img id="access" src="<?= base_url('/image/computer.png'); ?>">
      </div>
      <div class="col-sm-11 p-2">
        <h5 class="display-5">Pengajuan General Gate Pass</h5>
      </div>
    </div>
  </div>

  <form id="data">
    <div class="card mt-3 shadow card-body">
      <div class="p-1 text-white rounded shadow" id="information">Informasi Gate Pass</div>
      <div class="form-row p-2">
        <div class="form-group col-sm-4">
          <label for="inputNoGatepass">Nomor Gate Pass</label>
          <input type="text" class="form-control" id="no_gatepass" value="General/BMO/0011" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputdate">Tanggal</label>
          <input type="text" class="form-control" id="date" value="<?php echo date('d-m-Y'); ?>" readonly>
        </div>
      </div>
      <div class="form-row p-2">
        <div class="form-group col-sm-4">
          <label for="inputissued">Dikeluarkan Oleh</label>
          <input type="text" class="form-control" id="issued" value="Abdul Shamad Rennu" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputDepartment">Departemen</label>
          <input type="text" class="form-control" id="department" name="department" placeholder="BMO" value="BMO" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label for="inputSection">Bagian</label>
          <input type="text" class="form-control" id="section" name="section" placeholder="SFPO" value="SFPO" readonly>
        </div>
      </div>
      <div class="p-1 text-white rounded shadow" id="information">Informasi Pembawa</div>
      <div class="form-row p-2">
        <div class="form-group col-lg-4">
          <label for="inputvendor">Nama Vendor</label>
          <select class="form-control select2" id="name_vendor" name="vendor_name">
            <option>Pilih Vendor</option>
            <option>PT. Duta Computer</option>
            <option>PT. Darma Pacific</option>
          </select>
        </div>
        <div class="form-group col-lg-4">
          <label for="inputdriver">Nama Sopir</label>
          <select class="form-control select2 otherdropdown" id="name_driver" name="driver_name">
            <option>Pilih Sopir</option>
            <option>Budi</option>
            <option>Andi</option>
            <option value="other">Lainnya</option>
          </select>
        </div>
        <div class="form-group col-lg-4">
          <label for="inputRegnNo">Nomor Kendaraan</label>
          <select class="form-control select2" id="regn_no" name="regn_no">
            <option>Pilih Nomor Kendaraan</option>
            <option>Bp 2946 XZ</option>
            <option>Bp 2465 YZ</option>

          </select>
        </div>
      </div>
      <div class="p-1 text-white rounded shadow" id="information">Informasi Barang
        <button type="button" type="file" class="btn btn-success btn-sm text-white d-none">
          <i class="bi bi-file-earmark-arrow-up-fill"></i>Impor</button>
      </div>

      <div class="row ">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th style="width: 25px">No</th>
                  <th>Jenis Barang</th>
                  <th style="width: 75px">QTY</th>
                  <th style="width: 135px">Jenis Satuan</th>
                  <th style="width: 195px">Jenis Pengembalian</th>
                  <th>Keterangan</th>
                  <th style="width: 150px">Estimasi Kembali</th>
                  <th style="width: 55px">Foto Barang</th>
                  <th style="width: 100px">Aksi</th>
                </tr>
              </thead>
              <tbody id="goodslist">
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    <input type="text" class="form-control" id="goods_type" name="goods_type[]">
                  </td>
                  <td>
                    <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
                  </td>
                  <td>
                    <select class="select2 form-control" name="type_unit[]">
                      <option>Pilih...</option>
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
                    <input type="file" id="uploadimage" name="image[]" class="" accept="image/*" .sr-only/>
                    <small class="text-danger">*Min-Maks 0.1MB-2MB</small>
                
                  </td>
                  <td>
                    <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
                  </td>
                </tr>
              </tbody>
            </table>
            <button type="button" class="btn btn-info add_item_btn">Tambahkan</button>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="form-group col-sm-4 mt-3" id="expected_date">
          <label for="inputdate">Kapan semua barang akan dikembalikan?</label>
          <input type="date" class="form-control" name="expected_date">
        </div>
      </div> -->
      <!-- <div class="mb-3 form-group col-sm-5">
  <label for="formFileMultiple" class="form-label">Attach File</label><br>
  <input  type="file" id="formFileMultiple" multiple>
</div> -->
      <div class="row">
        <div class="col text-right">
          <button type="button" onClick="history.go(-1);" class="btn btn-dark">Kembali</button>
          <button type="reset" class="btn btn-danger mr-1">Bersihkan</button>
          <a type="submit" class="btn btn-primary" href="<?php echo base_url('/bmo/dashboard/approval'); ?>">Simpan</a>
        </div>
      </div>
    </div>
  </form>
</div>
</body>

</html>






<script>
  $(document).ready(function() {
    let no = 1;
    var rowCount = 1;
    $(".add_item_btn").click(function(e) {
      e.preventDefault();
      $("#goodslist").append(`
      <tr>
          <td>
            ${++no}
          </td>
          <td>  
            <input type="text" class="form-control" id="goods_type" name="goods_type[]">
          </td>
          <td>
          <input type="number" min="1" class="form-control" id="quantity" name="quantity[]">
          </td>
          <td>
          <select class="select2 form-control" name="type_unit[]">
            <option>Pilih...</option>
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
          <select id="select" class="form-control returntype"  name="return_type[]">
            <option id="unreturnable">Tidak Dikembalikan</option>
            <option id="returnable">Dikembalikan</option>
          </select>
          </td>
          <td>
          <input type="text" class="form-control" id="remark" name="remark[]">
          </td>
          <td>
          <input type="date" class="form-control" id="estimation" name="estimation[]" disabled>
          </td>
          <td>
          <input type="file" id="uploadimage" name="image[]" class="" accept="image/*"  .sr-only/>
          <small class="text-danger">*Min-Maks 0.1MB-2MB</small>
          </td> 
          <td>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></button></i>
          <button type="button" class="btn btn-danger btn-sm remove_item_btn">X</i>
          </td>
        </tr>
        
      `);
      $('.select2').select2({

        theme: 'bootstrap4',
        allowClear: true,
        tags: 'true'
      });


      $('.returntype').change(function(){ 
        var $tr = $(this).parent().parent();
        var returnType = $(this).val();
        console.log(returnType);
        console.log($tr.children());

        $($tr).find('td').each (function (index, td) {
          if(index == 6) {
            // console.log($(td).children().disabled)
            if(returnType == "Dikembalikan") {
              $(td).children().prop("disabled", false);
            }else{
              $(td).children().prop("disabled", true);
            }
          }
        });
      })
    //   var el = document.getElementById("select[]");
    // el.addEventListener("change", function() {
  //   var elems = document.querySelectorAll('#estimation')
  //   console.log(el);
  //   for (var i = 0; i < elems.length; i++) {
  //     elems[i].disabled = true;
  //   }
  //   if (this.selectedIndex === 0) {
  //     document.querySelector('#estimation').disabled = true;
  //   } else {
  //     document.querySelector('#estimation').disabled = false;
  //   }
  // }, false);


    });

    function changeEstimationDate($select){
      var row = $select;
      
    }

    
    
    $(document).on('click', '.remove_item_btn', function(e) {
      e.preventDefault();
      let row_item = $(this).parent().parent();
      $(row_item).remove();
      no--;
      console.log("success");
    });
  });
</script>
<script src="<?= base_url("/assets/script.js"); ?>"> </script>
<script>
  function resetField() {
    var $el = $('#data');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
  }
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

    $('.select2').select2({
      theme: 'bootstrap4',
      placeholder: 'Choose',
      allowClear: true
    });
    // $('select[name="vendor_name"]').otherDropdown({placeholder:'Type of event?'});
    $('.otherdropdown').otherDropdown();
  });
</script>
<script>
  function resetField() {
    var $el = $('#goods_type');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
  }
</script>
<?= $this->endSection() ?>