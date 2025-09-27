<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_us;
use App\Models\medical_staff;
use App\Models\news;
use App\Models\services;


class homecontroller extends Controller
{
     public function home()
    {
        return view('index');
    }

}
