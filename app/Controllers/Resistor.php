<?php

namespace App\Controllers;

class Resistor extends BaseController
{
    public function index()
    {
        return view('resistor/dashboard/index');
    }
    public function report()
    {
        return view('resistor/report/report_v');
    }
    public function search()
    {
        return view('resistor/search/search_v');
    }
    public function datamaster($page)
    {
        switch ($page) {
            case 'list':
                return view('resistor/datamaster/vendor_data_v');
                break;
            case 'create':
                return view('resistor/datamaster/regist_vendor_v');
                break;
            case 'detail':
                return view('resistor/datamaster/detail_vendor_v');
                break;

            default:
                return view('resistor/datamaster/vendor_data_v');
                break;
        }
        return view('resistor/datamaster/vendor_data_v');
    }
    public function create()
    {
        return view('resistor/create/form_add_general_v');
    }
    public function detail($progress)
    {
        switch ($progress) {
            case 'waiting':
                return view('resistor/detail/waiting');
                break;
            case 'approved':
                return view('resistor/detail/approved');
                break;
            case 'rejected':
                return view('resistor/detail/rejected');
                break;
            case 'verified':
                return view('resistor/detail/verified');
                break;
            case 'partial':
                return view('resistor/detail/partial');
                break;
            case 'completed':
                return view('resistor/detail/completed');
                break;
            case 'extend':
                return view('resistor/detail/extend');
                break;
            case 'extend_waiting':
                return view('resistor/detail/extend_waiting');
                break;
            case 'extend_completed':
                return view('resistor/detail/extend_completed');
                break;
        }
    }
    public function detail_approval($progress)
    {
        switch ($progress) {
            case 'waiting':
                return view('resistor/detail_approval/waiting');
                break;
            case 'approved':
                return view('resistor/detail_approval/approved');
                break;
            case 'rejected':
                return view('resistor/detail_approval/rejected');
                break;
            case 'verified':
                return view('resistor/detail_approval/verified');
                break;
            case 'completed':
                return view('resistor/detail_approval/completed');
                break;
            case 'extend':
                return view('resistor/detail_approval/extend');
                break;
            case 'extend_completed':
                return view('resistor/detail_approval/extend_completed');
                break;
        }
        return view('resistor/detail_approval/form_detail_general_v');
    }
    public function recordlist($progress)
    {
        switch ($progress) {
            case 'inprogress':
                return view("resistor/progress/inprogress");
                break;
            case 'completed':
                return view("resistor/progress/completed");
                break;
            case 'rejected':
                return view("resistor/progress/rejected");
                break;
            case 'loaned':
                return view("resistor/progress/loaned");
                break;

            default:
                return view("resistor/progress/all");
                break;
        }
    }
    public function dashboard($progress)
    {
        switch ($progress) {
            case 'index':
                return view("resistor/dashboard/index");
                break;
            case 'approval':
                return view("resistor/dashboard/approval");
                break;
            case 'verify':
                return view("resistor/dashboard/verify");
                break;
            case 'completed':
                return view("resistor/dashboard/completed");
                break;
            case 'rejected':
                return view("resistor/dashboard/rejected");
                break;
            case 'loaned':
                return view("resistor/dashboard/loaned");
                break;
            case 'completed':
                return view("resistor/dashboard/completed");
                break;
            case 'extend':
                return view("resistor/dashboard/extend");
                break;
            case 'extend_completed':
                return view("resistor/dashboard/extend_completed");
                break;
    

            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
    }

    public function authorizer($progress)
    {
        switch ($progress) {
            case 'index':
                return view("resistor/dashboard_authorizer/index");
                break;
            case 'approved':
                return view("resistor/dashboard_authorizer/approved");
                break;
            case 'rejected':
                return view("resistor/dashboard_authorizer/rejected");
                break;
            case 'completed':
                return view("resistor/dashboard_authorizer/completed");
                break;
            case 'loaned':
                return view("resistor/dashboard_authorizer/loaned");
                break;
            case 'extend':
                return view("resistor/dashboard_authorizer/extend");
                break;
            case 'extend_completed':
                return view("resistor/dashboard_authorizer/extend_completed");
                break;
        }
    }
}
