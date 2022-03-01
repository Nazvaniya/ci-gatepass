<?php

namespace App\Controllers;

class EHS extends BaseController {

    public function index(){
        return view("ehs/dashboard/user");
    }

    public function search()
    {
        return view('ehs/search/search_v');
    }

    public function create($waste_type){
        switch ($waste_type) {
            case 'hazardous':
                return view("ehs/create/hazardous");
                break;
                case 'scrap':
                    return view("ehs/create/scrap");
                    break;
                    case 'general':
                        return view("ehs/create/general");
                        break;
                        case 'generalgt':
                            return view("ehs/create/generalgt");
                            break;
            
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }   
    }

    public function detail($waste_type){
        switch ($waste_type) {
            case 'hazardous':
                return view("ehs/detail/hazardous");
                break;
                case 'scrap':
                    return view("ehs/detail/scrap");
                    break;
                    case 'general':
                        return view("ehs/detail/general");
                        break;
                        case 'generalgt':
                            return view("ehs/detail/generalgt");
                            break;
            
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
    }

    public function detail_approval($waste_type){
        switch ($waste_type) {
            case 'hazardous':
                return view("ehs/detail_approval/hazardous");
                break;
                case 'scrap':
                    return view("ehs/detail_approval/scrap");
                    break;
                    case 'general':
                        return view("ehs/detail_approval/general");
                        break;
            
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
    }

    public function recordlist($progress){
        switch ($progress) {
            case 'inprogress':
                return view("ehs/progress/inprogress");
                break;
                case 'completed':
                    return view("ehs/progress/completed");
                    break;
                    case 'rejected':
                        return view("ehs/progress/rejected");
                        break;
                        case 'loaned':
                            return view("ehs/progress/loaned");
                            break;
            
            default:
                return view("ehs/progress/all");
                break;
        }
    }

    public function datamaster(){
        return view('ehs/datamaster/waste');
    }

    public function report(){
        return view("ehs/report/index");
    }

    public function revise(){
        return view("ehs/revise/user");
    }

    public function revise_approval(){
        return view("ehs/revise/approval");
    }

    public function authorizer(){
        return view("ehs/dashboard/authorizer");
    }
}