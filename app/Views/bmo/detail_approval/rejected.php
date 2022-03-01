<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container mt-2">

  <div class="card px-5 py-3 shadow">
    <div class="row">
      <div class="col-sm-1">
        <img id="access" src="<?= base_url('/image/computer.png'); ?>">
      </div>
      <div class="col-sm-11 p-2">
        <h5 class="display-5">Gate Pass Detail General</h5>
      </div>
    </div>
  </div>

  <div class="card mt-3 shadow card-body">
    <!-- <div class="alert alert-warning" role="alert">
    Extend Date Approval Request: <a href="#" data-toggle="modal" data-target="#approve_extend">Detail</a>
    </div> -->
    <div class="">
      <div class="px-3 py-1 text-white rounded shadow" id="information">Gatepass Information</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-borderless" id="tbl_info">
              <tr>
                <td>Date</td>
                <td>:</td>
                <td><?php echo date('d-m-Y'); ?></td>

                <td>Issued By</td>
                <td>:</td>
                <td>Abdul Shamad Rennu</td>

              </tr>
              <tr>
                <td>Gate Pass No</td>
                <td>:</td>
                <td>General/BMO/0011</td>

                <td>Department</td>
                <td>:</td>
                <td>BMO</td>
              </tr>
              <tr>
                <td>Goods Status</td>
                <td>:</td>
                <td id="goods_status">N/A</td>
                <td>Section</td>
                <td>:</td>
                <td>SFPO</td>

              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="px-3 py-1 text-white rounded shadow" id="information">Driver Information</div>
      <div class="row ">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-borderless">
              <tr>
                <td>Name of Vendor</td>
                <td>:</td>
                <td>PT. Darma Pacific</td>
                <td>Name of Driver</td>
                <td>:</td>
                <td>Budi</td>
                <td>Vehicle Regn No</td>
                <td>:</td>
                <td>Bp 2946 XZ</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="px-3 py-1 text-white rounded shadow" id="information">Approval Information</div>
      <div class="form-row p-2">
        <div class="form-group col-sm-3">
          <label for="inputApprovalStatus">Submission Approval Status</label>
          <input type="text" class="form-control" id="approval_status" value="Rejected" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputTakeDate">Submission Approved Date</label>
          <input type="text" class="form-control" id="action_take_approve" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputApprover">Submission Approver</label>
          <input type="text" class="form-control" id="approval_name" value="Fajar Wisnu Broto" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="returntype">Submission Approval Remark</label>
          <input type="text" class="form-control" id="return_dis" value="The goods doesn't match the gatepass" readonly>
        </div>
      </div>
      <div class="form-row p-2">
        <div class="form-group col-sm-3">
          <label for="inputValidatorStatus">Security Verification Status</label>
          <input type="text" class="form-control" id="validation_status" value="N/A" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputTakeDateValid">Security Verified Date</label>
          <input type="text" class="form-control" id="action_take_validation" value="N/A" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="inputValidator">Security Verifier</label>
          <input type="text" class="form-control" id="validator_name" value="N/A" readonly>
        </div>
        <div class="form-group col-sm-3">
          <label for="Remark">Security Verification Remark</label>
          <input type="text" class="form-control" id="reason_reject" value="N/A" readonly>
        </div>
      </div>
      <div class="p-1 text-white rounded shadow" id="information">Goods Information</div>
      <div class="form-row p-2">
        <div class="form-group col-sm-4" id="data_expected_date">
          <label for="data_expected_date">
            Expected Date all of goods be return
            <a href="#" data-toggle="modal" data-target="#extend_date"><i class="bi bi-pencil-fill d-none"></i></a>
          </label>
          <input type="text" class="form-control" name="data_expected_date" value="<?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+5days")); ?>" readonly>
        </div>
        <div class="form-group col-sm-4" id="data_actual_date">
          <label for="data_actual_date">Actual Date of Return</label>
          <input type="text" class="form-control" name="data_actual_date" value="N/A" readonly>
        </div>
      </div>
      <div class="form-group px-4 row justify-content-end d-none">
        <div class="mx-1"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#returning_goods">Return The Goods</button></div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#return_log">Returned Record</button>
      </div>
      <div class="row p-2">
        <div class="mb-3 col-sm-12">
          <div class="table-responsive">
            <table id="tbl_goods" class="table table-striped table-bordered p-auto table-sm" style="max-width: 100%">
              <thead>
                <tr>
                  <th style="width: 25px">No</th>
                  <th>Type of goods</th>
                  <th>Qty</th>
                  <th style="width: 150px">Return Type</th>
                  <th>Status</th>
                  <th style="width: 150px">Loaned Balance</th>
                  <th>Remark</th>
                  <th style="width: 150px">Photo of Goods</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>RFID Card</td>
                  <td>10 Unit</td>
                  <td>Returnable</td>
                  <td>N/A</td>
                  <td>10 Unit</td>
                  <td>Study rfid card</td>
                  <td> <img id="access" data-toggle="modal" data-target="#popup_image" src="<?= base_url('/image/rfid.jpg'); ?>"></td>
                  <!-- <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" type="button">Return goods</button> -->
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>RFID Reader</td>
                  <td>4 Unit</td>
                  <td>Returnable</td>
                  <td>N/A</td>
                  <td>4 Unit</td>
                  <td>Study rfid reader</td>
                  <td> <img id="access" data-toggle="modal" data-target="#popup_image" src="<?= base_url('/image/reader.jpg'); ?>"></td>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row p-3 justify-content-end ">
        <div class="mx-1"><button type="button" onClick="history.go(-1);" class="btn btn-dark">Back</button></div>
        <!-- <div class="mx-1"><button type="button" class="btn btn-primary" id="btn_disapproved">Reject</button></div>
<div class="mx-1"><button type="button" class="btn btn-primary" id="btn_approved">Approve</button></div> -->

      </div>
    </div>

  </div>

  <!-- Modal extend expected date -->
  <div class="modal custom fade" id="extend_date" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Extend Date</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row p-2">
            <div class="form-group col-sm-4" id="data_expected_date">
              <label for="data_expected_date">Expected Date</label>
              <input type="text" class="form-control" name="old_data_expected_date" value="<?php echo date('d-m-Y'); ?>" disabled>
            </div>
            <div class="form-group col-sm-4" id="data_expected_date">
              <label for="data_expected_date">New Expected Date</label>
              <input type="date" class="form-control" name="new_expected_date">
            </div>
            <div class="form-group col-sm-4" id="remark_extend">
              <label for="data_expected_date">Remark</label>
              <input type="text" class="form-control" name="remark_extend">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Approve extend expected date -->
  <div class="modal custom fade" id="approve_extend" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Approve Extend Date</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row p-2">
            <div class="form-group col-sm-4" id="data_expected_date">
              <label for="data_expected_date">Expected Date</label>
              <input type="text" class="form-control" name="old_data_expected_date" value="<?php echo date('d-m-Y'); ?>" disabled>
            </div>
            <div class="form-group col-sm-4" id="data_expected_date">
              <label for="data_expected_date">New Expected Date</label>
              <input type="text" class="form-control" name="new_expected_date" value="<?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+3days")); ?>" readonly>
            </div>
            <div class="form-group col-sm-4" id="remark_extend">
              <label for="data_expected_date">Remark</label>
              <input type="text" class="form-control" name="remark_extend" value="Need more study" readonly>
            </div>
          </div>
          <div>
            <h5>History:</h5>
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Submission Date</th>
                  <th scope="col">Changed</th>
                  <th scope="col">Remark</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-3days")); ?></td>
                  <td><?php echo date('d-m-Y'); ?> to <?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+3days")); ?></td>
                  <td>Need More Study</td>
                  <td>Approved by chalid</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Reject</button>
          <button type="button" class="btn btn-primary">Approve</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal confirm return goods -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure return the goods?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a type="button" id="confirm" class="btn btn-dark" href="<?= base_url('home/general_detail'); ?>">Yes, Confirm</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
            <p>Successfully Returned</p>
          </div>
        </div>

        <!--Footer-->
        <!-- <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-info" href="<?php echo base_url('home/dashboard'); ?>">Dashboard<i class="far fa-gem ml-1 text-white"></i></a>
       </div> -->
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Modal return -->
  <div class="modal custom fade" id="returning_goods" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Returning Goods</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row p-2">
            <div class="mb-3 col-sm-12">
              <div class="table-responsive">
                <table id="tbl_goods" class="table table-striped table-bordered p-auto" style="max-width: 100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Type of goods</th>
                      <th>Qty</th>
                      <th>Status</th>
                      <th>Loaned Balance</th>
                      <th>Remark</th>
                      <th>Photo of Goods</th>
                      <th class="">Return Qty</th>
                      <th align="center" style="width:75px;">Return All</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>RFID Card</td>
                      <td>10 Unit</td>
                      <td>Loaned</td>
                      <td>7 Unit</td>
                      <td>Study rfid card</td>
                      <td> <img id="access" src="<?= base_url('/image/rfid.jpg'); ?>"></td>
                      <td class="col-sm-1">
                        <input type="number" min="1" max="" class="" style="max-width:50px" id="qty_return" name="qty_return">
                      </td class="col-sm-1">
                      <td class="">
                        <div class="form-check">
                          <input class="checkbox" type="checkbox" id="cb_return" value="option1" aria-label="...">
                        </div>
                        <!-- <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" type="button">Return goods</button> -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
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
          <img src="<?php echo base_url('/image/rfid.jpg'); ?>" style="width:100%;height:100%;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal image 2 -->
  <div class="modal fade" id="popup_image2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url('/image/reader.jpg'); ?>" style="width:100%;height:100%;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal log returned -->
  <div class="modal custom fade" id="return_log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header float-right">
          <h5>Return Record</h5>
          <div class="text-right"> <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
        </div>
        <div class="modal-body">
          <div>
            <h4>Return Date: <?php echo date('d-m-Y'); ?></h4>
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Goods</th>
                  <th scope="col">Total QTY</th>
                  <th scope="col">QTY Returned</th>
                  <th scope="col">Balance</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>RFID Card</td>
                  <td>10</td>
                  <td>2</td>
                  <td>8</td>
                </tr>
              </tbody>
            </table>
            <h4>Return Date: <?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+3days")); ?></h4>
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Goods</th>
                  <th scope="col">Total QTY</th>
                  <th scope="col">QTY Returned</th>
                  <th scope="col">Balance</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>RFID Card</td>
                  <td>10</td>
                  <td>3</td>
                  <td>5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
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
  document.getElementById("confirm").on('hidden.bs.modal', function() {
    $("#exampleModal").modal("hide");
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