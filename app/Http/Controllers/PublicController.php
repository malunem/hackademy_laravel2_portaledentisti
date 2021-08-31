<?php

namespace App\Http\Controllers;

use App\Models\Checkup;
use Illuminate\Http\Request;
use App\Http\Requests\CheckUpRequest;

class PublicController extends Controller
{
    public function getHomepage(){
        return view('homepage');
    }

    public function saveDataForm(CheckUpRequest $form){

        $form = $form->all(); //array key value

        $checkup = Checkup::create([
            'name'=>$form['name'],
            'surname'=>$form['surname'],
            'phonenumber'=>$form['phonenumber'],
            'email'=>$form['email'],
            'cap'=>$form['cap'],
            'patient'=>$form['patient'],
            'text'=>$form['text']
        ]);
        
        return redirect(route('submit'))->with('message', 'Richiesta inviata correttamente.');
    }
}
