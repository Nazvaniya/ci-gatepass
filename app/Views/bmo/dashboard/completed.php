<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

  <div class="jumbotron jumbotron-fluid px-5 py-3">
    <div class="row">
      <div class="col-sm-2">
        <img id="dlogo" src="<?= base_url('/image/access.png'); ?>">
      </div>
      <div class="col-sm-10">
        <h3 class="display-5">PANASONIC GATE PASS APPLICATION</h3>
        <p class="lead">Welcome Abdul Shamad Rennu.</p>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-3">
      <div class="card mb-3 shadow" style="max-width: 350px;">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body mt-3 text-center">
              <h1 class="card-title font-weight-bold">0</h1>
              <p class="card-text">
                <a href="<?= base_url("ehs/inprogress"); ?>" class="text-dark">
                  In Progress
                </a>
            </div>
          </div>
          <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
            <img id="sand" src="<?php echo base_url('\image/sand.png'); ?>" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card mb-3 shadow" style="max-width: 350px;">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body mt-3 text-center">
              <h1 class="card-title text-success font-weight-bold">4</h1>
              <p class="card-text">
                <a href="<?= base_url("ehs/completed"); ?>" class="text-success">
                  Completed
                </a>
            </div>
          </div>
          <div class="col-md-2 my-5 mx-1 d-none d-lg-block">
            <img id="approve" src="<?php echo base_url('\image/approved.png'); ?>" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card mb-3 shadow" style="max-width: 350px;">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body px-2 mt-3 text-center">
              <h1 class="card-title text-danger font-weight-bold">2</h1>
              <p class="card-text">
                <a href="<?= base_url("ehs/rejected"); ?>" class="text-danger">
                  Rejected
                </a>
              </p>
            </div>
          </div>
          <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
            <img id="reject" src="<?php echo base_url('\image/reject.png'); ?>" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card mb-3 shadow" style="max-width: 350px;">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body px-2 mt-3 text-center">
              <h1 class="card-title text-warning font-weight-bold">2</h1>
              <p class="card-text">
                <a href="<?= base_url("ehs/loaned"); ?>" class="text-warning">
                  Loaned Goods
                </a>
            </div>
          </div>
          <div class="col-md-2 my-5 mx-3 d-none d-lg-block">
            <img id="reject" src="<?php echo base_url('\image/loaned.png'); ?>" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-2 p-3">
    <script>
      $(document).ready(function() {
        $('#example').DataTable({
          "lengthMenu": [5]
        });
      });
    </script>
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Entry Date</th>
            <th>Gate Pass No</th>
            <th>Issued By</th>
            <th>Department</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><?= date("d-m-Y") ?></td>
            <td>
              <a href="<?= base_url("bmo/detail/completed"); ?>">
              G/BMO/0011
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-success">Completed</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-1days")); ?></td>
            <td>
              <a href="#">
              G/BMO/0009
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-danger"> Submission Rejected </span></td>
          </tr>
          <tr>
            <td>3</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
            <td>
              <a href="<?= base_url("bmo/detail/extend"); ?>">
              G/BMO/0008
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-info">Loaned</span></td>
          </tr>
          <tr>
            <td>4</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
            <td>
              <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
              G/BMO/0006
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-success">Completed</span></td>
          </tr>
          <tr>
            <td>5</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
            <td>
              <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
              G/BMO/0005
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-success">completed</span></td>
          </tr>
          <tr>
            <td>6</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
            <td>
              <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
              G/BMO/0004
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-info">Loaned</span></td>
          </tr>
          <tr>
            <td>7</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-1days")); ?></td>
            <td>
              <a href="#">
              G/BMO/0003
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-danger"> Submission Rejected </span></td>
          </tr>
          <tr>
            <td>8</td>
            <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
            <td>
              <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
              G/BMO/0001
              </a>
            </td>
            <td>Abdul Shamad Rennu</td>
            <td>BMO</td>
            <td><span class="badge badge-success">completed</span></td>
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
<?= $this->endSection() ?>