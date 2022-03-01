<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('templates/head'); ?>
</head>
<body>
<?= $this->include('templates/navbar'); ?>


<?= $this->renderSection('pages/dashboard_v'); ?>
<?= $this->renderSection('profile_v'); ?>
<?= $this->renderSection('setting_v'); ?>
<?= $this->renderSection('report_v'); ?>
<?= $this->renderSection('datamaster/regist_user_v'); ?>
<?= $this->renderSection('datamaster/user_data_v'); ?>
<?= $this->renderSection('datamaster/regist_vendor_v'); ?>
<?= $this->renderSection('datamaster/detail_vendor_v'); ?>
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
<?= $this->renderSection('ehs/form_revision_chemical_v'); ?>
<?= $this->renderSection('ehs/form_detail_revision_chemical_v'); ?>
<?= $this->include('templates/footer');?>
</body>
</html>