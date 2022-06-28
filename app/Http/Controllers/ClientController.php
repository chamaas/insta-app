<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function hom(){
        return view('client.hom');
    }
    public function profile(){
        return view('client.profile');
    }
    public function edit_profile(){
        return view('client.edit_profile');
    }
}
