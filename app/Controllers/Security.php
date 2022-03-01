<?php

namespace App\Controllers;

class Security extends BaseController
{
    public function index()
    {
        return view('security/scan/scan_v');
    }
    public function dashboard()
    {
         return view('security/dashboard/d_security');
    }
    public function import()
    {
         return view('security/import/import_page_v');
    }
    public function detail_scrap_info()
    {
        return view('security/form_detail_scrap_info_v');
    }
    public function detail_scrap_verified()
    {
        return view('security/form_detail_scrap_verified_v');
    }
    public function detail_chemical_info()
    {
        return view('security/form_detail_chemical_info_v');
    }
    public function detail_chemical_verified()
    {
        return view('security/form_detail_chemical_verified_v');
    }
    public function report()
    {
         return view('security/report/report_v');
    }
    public function verification($page){
        switch($page){
            case 'general':
                return view('security/detail_form/general_info_v');
                break;
                case 'finish_goods':
                    return view('security/detail_form/fg_info_v');
                    break;
                    case 'hazardous':
                        return view('security/detail_form/hazardous_info_v');
                        break;
                        case 'scrap':
                            return view('security/detail_form/scrap_info_v');
                            break;
                            case 'general_waste':
                                return view('security/detail_form/general_waste_info_v');
                                break;
        }
    }

    public function detail($page){
        switch($page){
            case 'hazardous_info':
                return view('security/detail/form_detail_chemical_info_v');
                break;
                case 'hazardous_verify':
                    return view('security/detail/form_detail_chemical_verified_v');
                    break;
                    case 'scrap_info':
                        return view('security/detail/form_detail_scrap_info_v');
                        break;
                        case 'scrap_verify':
                            return view('security/detail/form_detail_scrap_verified_v');
                            break;
                            case 'general_waste_info':
                                return view('security/detail/form_detail_general_waste_info_v');
                                break;
                                case 'general_waste_verify':
                                    return view('security/detail/form_detail_general_waste_verified_v');
                                    break;
                                    case 'general_info':
                                        return view('security/detail/form_detail_general_info_v');
                                        break;
                                        case 'general_verify':
                                            return view('security/detail/form_detail_general_verified_v');
                                            break;
                                            case 'logistic_info':
                                                return view('security/detail/form_detail_logistic_info_v');
                                                break;
                                                case 'logistic_verify':
                                                    return view('security/detail/form_detail_logistic_verified_v');
                                                    break;
                                                    default:
                                                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                                                    break;
                        
                
        }
    }



    public function recordlist($progress){
        switch ($progress) {
            case 'inprogress':
                return view("security/progress/inprogress");
                break;
                case 'completed':
                    return view("security/progress/completed");
                    break;
                    case 'rejected':
                        return view("security/progress/rejected");
                        break;
            
            default:
                return view("security/progress/all");
                break;
        }
    }

}