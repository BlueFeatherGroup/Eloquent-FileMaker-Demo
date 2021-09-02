<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('person-list');
    }

    public function get($id){
        $person = Person::find($id);
        $data = [
            'person' => $person
        ];
        return view('person-detail', $data);
    }

    public function update(Request $request, $id){
        $person = Person::find($id);
        $person->name_first =  $request->input('name_first');
        $person->name_last =  $request->input('name_last');
        $person->email =  $request->input('email');
        $person->phone =  $request->input('phone');
        $person->title =  $request->input('title');

        $person->save();


        $data = [
            'person' => $person
        ];
        return redirect(route('person-detail', $id));
    }
}
