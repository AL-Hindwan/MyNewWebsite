<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class detailscontroller extends Controller
{

     public function details($id)
     {
         $newsItem = News::findOrFail($id);
         return view('details', compact('newsItem'));
     }
}
