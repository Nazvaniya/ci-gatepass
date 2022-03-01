<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/dashboard_v');
    }
    public function page_permission(){
        return view('datamaster/page_permission');
    }
    public function regist_user()
    {
        return view('datamaster/regist_user_v');
    }
    public function edit_user()
    {
        return view('datamaster/edit_user_v');
    }
    public function regist_vendor()
    {
        return view('datamaster/regist_vendor_v');
    }
    public function detail_vendor()
    {
        return view('datamaster/detail_vendor_v');
    }
    public function regist_waste()
    {
        return view('datamaster/regist_waste_v');
    }
    public function dashboard()
    {
        return view('pages/dashboard_v');
    }
    public function general_detail()
    {
        return view('general/form_detail_general_v');
    }
    public function return_general(){
        return view('general/form_return_general_v');
    }
    public function user()
    {
        return view('datamaster/user_data_v');
    }
    public function vendor()
    {
        return view('datamaster/vendor_data_v');
    }
    public function waste()
    {
        return view('datamaster/waste_data_v');
    }
    public function userlevel()
    {
        return view('datamaster/regist_userlevel_v');
    }
    public function add_chemical()
    {
        return view('ehs/form_add_chemical_v');
    }
    public function revisi_chemical()
    {
        return view('ehs/form_revision_chemical_v');
    }
    public function detail_revision_chemical()
    {
        return view('ehs/form_detail_revision_chemical_v');
    }
    public function add_general_waste()
    {
        return view('ehs/form_add_general_waste_v');
    }
    public function add_scrap()
    {
        return view('ehs/form_add_scrap_v');
    }
    public function add_logistic()
    {
        return view('logistic/form_add_logistic_v');
    }
    public function add_general()
    {
        return view('general/form_add_general_v');
    }
    public function data_all_gatepass()
    {
        return view('record/data_all_gatepass_v');
    }
    public function data_approved()
    {
        return view('record/data_approved_gatepass_v');
    }
    public function data_inprogress(){
        return view('record/data_inprogress_v');
    }
    public function data_rejected()
    {
        return view('record/data_rejected_gatepass_v');
    }
    public function data_loaned()
    {
        return view('record/data_loaned_gatepass_v');
    }
    public function data_manifest()
    {
        return view('data_manifest_record_v');
    }
    public function infogatepass(){
        return view('security/form_detail_scrap_info_v');
    }
    public function infogoods(){
        return view('security/form_detail_scrap_verified_v');
    }

    public function profile(){
        return view('profile_v');
    }
    public function setting(){
        return view('setting_v');
    }
    public function report()
    {
        return view('report_v');
    }
    public function scan()
    {
        return view('security/scan_v');
    }
    public function detail_logistic()
    {
        return view('logistic/form_detail_logistic_v');
    }
    public function detail_chemical_waste()
    {
        return view('ehs/form_detail_chemical_v');
    }
    public function detail_general_waste()
    {
       return view ('ehs/form_detail_general_waste_v');
    }
    public function detail_scrap_waste()
    {
       return view ('ehs/form_detail_scrap_v');
    }

    public function login()
    {
        return view('login_v');
    }

}
