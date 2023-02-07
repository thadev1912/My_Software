<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Connect_APIController extends Controller
{
    public function connect()
     {
        return view('api.show_ajax');
     }
    public function apilogin_form()
     {
       return view('api.apilogin_form');
     }
}
