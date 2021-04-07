<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function index(){
        return view('company-list');
    }

    public function get($id){
        return view('company-detail');
    }
}
