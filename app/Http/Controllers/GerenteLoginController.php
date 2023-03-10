<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteLoginController extends Controller
{
   

    public function showLoginForm()
    {
        return view('gerente.login');
    }

   

}
