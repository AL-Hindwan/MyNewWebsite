<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\news;


class detailscontroller extends Controller
{
  
    public function details()
    {
        return view('details');
    }
}
