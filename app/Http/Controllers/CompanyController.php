<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function index(){
        return view('company-list');
    }

    public function get($id){
        $company = Company::find($id);
        $data = [
            'company' => $company
        ];
        return view('company-detail', $data);
    }
}
