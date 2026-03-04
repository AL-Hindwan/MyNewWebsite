<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;

class servicescontroller extends Controller
{
   public function services()
     {
         $services = services::all();
         return view('services', compact('services'));
     }
}
