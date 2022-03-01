<?php

namespace App\Controllers;

class BMO extends BaseController
{
    public function index()
    {
        return view('bmo/dashboard/index');
    }
    public function report()
    {
        return view('bmo/report/report_v');
    }
    public function search()
    {
        return view('bmo/search/search_v');
    }
    public function datamaster($page)
    {
        switch ($page) {
            case 'list':
                return view('bmo/datamaster/vendor_data_v');
                break;
            case 'create':
                return view('bmo/datamaster/regist_vendor_v');
                break;
            case 'detail':
                return view('bmo/datamaster/detail_vendor_v');
                break;

            default:
                return view('bmo/datamaster/vendor_data_v');
                break;
        }
        return view('bmo/datamaster/vendor_data_v');
    }
    public function create()
    {
        return view('bmo/create/form_add_general_v');
    }
    public function detail($progress)
    {
        switch ($progress) {
            case 'waiting':
                return view('bmo/detail/waiting');
                break;
            case 'approved':
                return view('bmo/detail/approved');
                break;
            case 'rejected':
                return view('bmo/detail/rejected');
                break;
            case 'verified':
                return view('bmo/detail/verified');
                break;
            case 'partial':
                return view('bmo/detail/partial');
                break;
            case 'completed':
                return view('bmo/detail/completed');
                break;
            case 'extend':
                return view('bmo/detail/extend');
                break;
            case 'extend_waiting':
                return view('bmo/detail/extend_waiting');
                break;
            case 'extend_completed':
                return view('bmo/detail/extend_completed');
                break;
        }
    }
    public function detail_approval($progress)
    {
        switch ($progress) {
            case 'waiting':
                return view('bmo/detail_approval/waiting');
                break;
            case 'approved':
                return view('bmo/detail_approval/approved');
                break;
            case 'rejected':
                return view('bmo/detail_approval/rejected');
                break;
            case 'verified':
                return view('bmo/detail_approval/verified');
                break;
            case 'completed':
                return view('bmo/detail_approval/completed');
                break;
            case 'extend':
                return view('bmo/detail_approval/extend');
                break;
            case 'extend_completed':
                return view('bmo/detail_approval/extend_completed');
                break;
        }
        return view('bmo/detail_approval/form_detail_general_v');
    }
    public function recordlist($progress)
    {
        switch ($progress) {
            case 'inprogress':
                return view("bmo/progress/inprogress");
                break;
            case 'completed':
                return view("bmo/progress/completed");
                break;
            case 'rejected':
                return view("bmo/progress/rejected");
                break;
            case 'loaned':
                return view("bmo/progress/loaned");
                break;

            default:
                return view("bmo/progress/all");
                break;
        }
    }
    public function dashboard($progress)
    {
        switch ($progress) {
            case 'index':
                return view("bmo/dashboard/index");
                break;
            case 'approval':
                return view("bmo/dashboard/approval");
                break;
            case 'verify':
                return view("bmo/dashboard/verify");
                break;
            case 'completed':
                return view("bmo/dashboard/completed");
                break;
            case 'rejected':
                return view("bmo/dashboard/rejected");
                break;
            case 'loaned':
                return view("bmo/dashboard/loaned");
                break;
            case 'completed':
                return view("bmo/dashboard/completed");
                break;
            case 'extend':
                return view("bmo/dashboard/extend");
                break;
            case 'extend_completed':
                return view("bmo/dashboard/extend_completed");
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
                return view("bmo/dashboard_authorizer/index");
                break;
            case 'approved':
                return view("bmo/dashboard_authorizer/approved");
                break;
            case 'rejected':
                return view("bmo/dashboard_authorizer/rejected");
                break;
            case 'completed':
                return view("bmo/dashboard_authorizer/completed");
                break;
            case 'loaned':
                return view("bmo/dashboard_authorizer/loaned");
                break;
            case 'extend':
                return view("bmo/dashboard_authorizer/extend");
                break;
            case 'extend_completed':
                return view("bmo/dashboard_authorizer/extend_completed");
                break;
        }
    }
}
