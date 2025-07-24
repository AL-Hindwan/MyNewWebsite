<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicescontroller extends Controller
{
   public function services()
    {
        return view('services');
    }
}
