<?= $this->extend('templates/bmo') ?>
<?= $this->section('content') ?>
<div class="container mt-5">

    <div class="card px-5 py-3 shadow">
        <div class="row justify-content-end">
            <div class="col-auto mr-auto">
                <img id="access" src="<?= base_url('/image/folder.png'); ?>">
            </div>
            <div class="col-sm-11 p-2">
                <h5 class="display-5">Dipinjamkan</h5>
            </div>
        </div>
    </div>
    <div class="card mt-3 shadow p-3" style="max-width: 100%">
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                        "url": "/assets/id.json"
                    }
                });
            });
        </script>
        <table id="example" class="table table-striped table-bordered table-sm p-auto" style="max-width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Buat</th>
                    <th>Nomor Gate Pass</th>
                    <th>Dikeluarkan oleh</th>
                    <th>Departemen</th>
                    <th>Perkiraan Tanggal Pengembalian</th>
                    <th>Status Pengembalian </th>
                    <th>Tanggal Pengembalian Sebenarnya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
                    <td>
                        <a href="<?= base_url("bmo/detail/verified"); ?>">
                            General/BMO/0008
                        </a>
                    </td>
                    <td>Abdul Shamad Rennu</td>
                    <td>BMO</td>
                    <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+3days")); ?></td>
                    <td><span class="badge badge-info">Dipinjamkan</span></td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "-2days")); ?></td>
                    <td>
                        <a href="<?= base_url("bmo/detail_approval/verified"); ?>">
                            General/BMO/0004
                        </a>
                    </td>
                    <td>Abdul Shamad Rennu</td>
                    <td>BMO</td>
                    <td><?php echo date('d-m-Y', strtotime(date('d-m-Y') . "+2days")); ?></td>
                    <td><span class="badge badge-info">Dipinjamkan</span></td>
                    <td>N/A</td>
                </tr>
            </tbody>
        </table>
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