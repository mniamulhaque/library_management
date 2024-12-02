<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardCon extends Controller
{
   public function view(){

    return view('backend.deshboard.deshboard');
   }
}
