<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

  <div class="card px-5 py-3 shadow">
    <div class="row">
      <div class="col-sm-1 ">
        <img id="access" src="<?= base_url('/image/report.png'); ?>">
      </div>
      <div class="col-sm-11 p-2">
        <h5 class="display-5">Halaman Laporan Gate Pass</h5>
      </div>
    </div>
  </div>


  <form>

    <div class="card mt-3 shadow card-body">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="inputNoGatepass">Nomor Gate Pass</label>
            <input type="text" class="form-control" id="no_gatepass" value="">
          </div>
          <div class="form-group" id="type_gatepass">
            <label for="inputReturn">Jenis Gate Pass</label>
            <select class="form-control">
              <option value="General">General</option>
              <option value="Logistic">Finis Goods & Materials</option>
              <option value="EHS">Waste</option>
            </select>
          </div>
          <div class="form-group" id="type_Waste">
            <label for="inputReturn">Jenis Limbah</label>
            <select id="type_waste" class="form-control">
              <option id="chemical_waste">Chemical Waste</option>
              <option id="scrap_waste">Scrap Waste</option>
              <option id="general_waste">General Waste</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputReturn">Departemen</label>
            <select id="selectType" class="form-control">
              <option id="">BBMO</option>
              <option id="">BHR</option>
              <option id="">BFGA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputReturn">Format</label>
            <select id="selectType" class="form-control">
              <option id="Excel">Excel</option>
              <option id="Csv">Csv</option>
            </select>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="inputReturn">Nomor Karyawan</label>
            <input id="selectType" class="form-control">
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group" id="from_date">
                <label for="from_date">Dari Tanggal</label>
                <input type="date" class="form-control" name="from_date">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group" id="to_date">
                <label for="to_date">Sampai Tanggal</label>
                <input type="date" class="form-control" name="to_date">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="inputReturn">Jenis Pengembalian</label>
            <select id="selectType" class="form-control">
            <option value="">Semua</option>
              <option value="">Tidak Dikembalikan</option>
              <option value="">Dikembalikan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputReturn">Vendor</label>
            <select id="selectType" class="form-control">
              <option id="">PT. Makmur Abadi</option>
              <option id="">PT. Sadar Sana</option>
              <option id="">PT. Dasar Warna</option>
            </select>
          </div>
        </div>

      </div>
      <div class="row p-3 justify-content-end">
        <div class="col-auto">
          <button type="button" onClick="history.go(-1);" class="btn btn-dark btn-sm">Kembali</button>
          <button type="reset" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-counterclockwise"></i>Bersihkan</button>
          <button type="button" class="btn btn-primary btn-sm text-white"><i class="bi bi-file-earmark-arrow-down-fill"></i>Ekspor</button>
        </div>
      </div>


    </div>
  </form>



  <div class="card mt-3 shadow p-3 d-none" style="max-width: 100%">
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered p-auto" style="max-width: 100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Gate Pass No</th>
            <th>Issued By</th>
            <th>Department</th>
            <th>Entry Date</th>
            <th>Approval Status</th>
            <th>Verification Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>EHS-C/EHS/0003</td>
            <td>Siswanto</td>
            <td>EHS</td>
            <td>03-10-2021</td>
            <td><span class="badge badge-success"> Approved</span></td>
            <td><span class="badge badge-info"> Verified</span></td>
            <td>
              <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail" type="button"><i class="bi bi-list"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>EHS-C/EHS/0002</td>
            <td>Budi</td>
            <td>EHS</td>
            <td>03-10-2021</td>
            <td><span class="badge badge-success"> Approved</span></td>
            <td><span class="badge badge-info"> Verified</span></td>
            <td>
              <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail" type="button"><i class="bi bi-list"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>

</html>

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
<script>
  $(document).ready(function() {
    $('#example').DataTable({


    });
  });
</script>
<script>
  var x = document.getElementById("type_gatepass").value;
  // Check if it is not empty
  if (x == "EHS") {
    document.querySelector('#type_Waste').style.display = 'block';

  } else {
    document.querySelector('#type_Waste').style.display = 'none';
  }
  console.log(x)
</script>
<?= $this->endSection() ?>