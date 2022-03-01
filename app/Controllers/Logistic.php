<?php

namespace App\Controllers;

class Logistic extends BaseController {

    public function index(){
        return view("logistic/dashboard/user");
        
    }
    public function search()
    {
        return view('logistic/search/search_v');
    }

    public function create($type){
        switch ($type) {
            case 'general':
                return view("logistic/create/general");
                break;
                case 'log':
                    return view("logistic/create/log");
                    break;
            
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
    }

    public function detail($type){
        switch ($type) {
            case 'general':
                return view("logistic/detail/general");
                break;
                case 'log':
                    return view("logistic/detail/log");
                    break;
            
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
    }
    public function detail_fg($progress)
    {
        switch($progress){
            case 'waiting':
                return view("logistic/detail/waiting");
                break;
                case 'approved':
                    return view ('logistic/detail/approved');
                    break;
                    case 'rejected':
                        return view ('logistic/detail/rejected');
                    break;
                    case 'verified':
                        return view ('logistic/detail/verified');
                        break;
                        case 'loaned':
                            return view ('logistic/detail/loaned');
                            break;
                            case 'completed':
                                return view ('logistic/detail/completed');
                                break;
                default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;

        }
    }
    public function detail_fg_approval($progress)
    {
        switch($progress){
            case 'waiting':
                return view ('logistic/detail_approval/waiting');
                break;
                case 'approved':
                    return view ('logistic/detail_approval/approved');
                    break;
                    case 'rejected':
                        return view ('logistic/detail_approval/rejected');
                    break;
                    case 'verified':
                        return view ('logistic/detail_approval/verified');
                        break;
                        case 'loaned':
                            return view ('logistic/detail_approval/loaned');
                            break;

        }
        return view('bmo/detail_approval/form_detail_general_v');
    }

    public function detail_approval($type){
        switch ($type) {
            case 'general':
                return view("logistic/detail_approval/general");
                break;
                case 'log':
                    return view("logistic/detail_approval/log");
                    break;
            
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
    }

    public function recordlist($progress){
        switch ($progress) {
            case 'inprogress':
                return view("logistic/progress/inprogress");
                break;
                case 'completed':
                    return view("logistic/progress/completed");
                    break;
                    case 'rejected':
                        return view("logistic/progress/rejected");
                        break;
                        case 'loaned':
                            return view("logistic/progress/loaned");
                            break;
            
            default:
                return view("logistic/progress/all");
                break;
        }
    }

    public function report(){
        return view("logistic/report/index");
    }
    public function dashboard($progress)
    { 
        switch ($progress) {
            case 'index':
                return view("logistic/dashboard/user");
                break;
                case 'approval':
                    return view("logistic/dashboard/approval");
                    break;
                    case 'verify':
                        return view("logistic/dashboard/verify");
                        break;
                    case 'completed':
                        return view("logistic/dashboard/completed");
                        break;
                        case 'rejected':
                            return view("logistic/dashboard/rejected");
                            break;
                            case 'loaned':
                                return view("logistic/dashboard/loaned");
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
                return view("logistic/dashboard_authorizer/authorizer");
                break;
                case 'approved':
                    return view("logistic/dashboard_authorizer/approval");
                    break;
                    case 'rejected':
                        return view("logistic/dashboard_authorizer/rejected");
                    break;
                    case 'completed':
                        return view("logistic/dashboard_authorizer/completed");
                        break;
                        case 'loaned':
                            return view("logistic/dashboard_authorizer/loaned");
                            break;
            
    }
    
}
}