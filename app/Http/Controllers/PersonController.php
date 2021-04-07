<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('person-list');
    }

    public function get($id){
        return view('person-detail');
    }
}
