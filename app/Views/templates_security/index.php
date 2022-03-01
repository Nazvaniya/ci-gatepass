<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/font-awesome/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/style.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("/assets/css/dataTables.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
    <script src="<?= base_url("/assets/js/jquery.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/jquery.dataTables.min.js"); ?>"> </script>
    <script src="<?= base_url("/assets/js/dataTables.bootstrap4.min.js"); ?>"> </script>
    <link href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css" rel="stylesheet">

</head>
<body>
<?= $this->include('templates_security/navbar_security'); ?>
<?= $this->renderSection('content'); ?>

<?= $this->renderSection('security/dashboard_v'); ?>
<?= $this->renderSection('security/scan_v'); ?>
<?= $this->renderSection('security/form_detail_scrap_info_v'); ?>
<?= $this->renderSection('security/form_detail_scrap_verified_v'); ?>
<?= $this->renderSection('security/form_detail_chemical_info_v'); ?>
<?= $this->renderSection('security/form_detail_chemical_verified_v'); ?>
<?= $this->renderSection('import_page_v'); ?>

<?= $this->renderSection('profile_v'); ?>
<?= $this->renderSection('setting_v'); ?>
<?= $this->renderSection('report_v'); ?>
<?= $this->renderSection('datamaster/regist_user_v'); ?>
<?= $this->renderSection('datamaster/user_data_v'); ?>
<?= $this->renderSection('datamaster/regist_vendor_v'); ?>
<?= $this->renderSection('datamaster/vendor_data_v'); ?>
<?= $this->renderSection('datamaster/regist_waste_v'); ?>
<?= $this->renderSection('datamaster/waste_data_v'); ?>
<?= $this->renderSection('datamaster/waste_data_v'); ?>
<?= $this->renderSection('datamaster/regist_userlevel_v'); ?>
<?= $this->renderSection('ehs/form_add_chemical_v'); ?>
<?= $this->renderSection('ehs/form_add_general_waste_v'); ?>
<?= $this->renderSection('ehs/form_add_scrap_v'); ?>
<?= $this->renderSection('logistic/form_add_logistic_v'); ?>
<?= $this->renderSection('general/form_add_general_v'); ?>
<?= $this->renderSection('general/form_detail_general_v'); ?>
<?= $this->renderSection('record/data_all_gatepass_v'); ?>
<?= $this->renderSection('record/data_approved_gatepass_v'); ?>
<?= $this->renderSection('record/data_rejected_gatepass_v'); ?>
<?= $this->renderSection('record/data_loaned_gatepass_v'); ?>
<?= $this->renderSection('data_manifest_record_v'); ?>
<?= $this->renderSection('logistic/form_detail_logistic_v'); ?>
<?= $this->renderSection('ehs/form_detail_chemical_v'); ?>
<?= $this->renderSection('ehs/form_detail_general_waste_v'); ?>
<?= $this->renderSection('ehs/form_detail_scrap_v'); ?>
<?= $this->include('templates/footer');?>
</body>
</html>