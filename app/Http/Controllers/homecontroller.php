<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_us;
use App\Models\medical_staff;
use App\Models\News;
use App\Models\services;


class homecontroller extends Controller
{
      public function home()
     {
         $aboutUs = about_us::first(); // Assuming one about us entry
         $services = services::take(3)->get(); // Take first 3 for homepage
         $medicalStaff = medical_staff::take(3)->get();
         $news = News::take(3)->get();
         return view('index', compact('aboutUs', 'services', 'medicalStaff', 'news'));
     }

     public function dashboard()
     {
         $servicesCount = services::count();
         $doctorsCount = medical_staff::count();
         $newsCount = News::count();
         $pagesCount = 5; // Assuming static for now, or count something else

         // Recent modifications: combine recent from all models
         $recentServices = services::latest()->take(2)->get();
         $recentNews = News::latest()->take(2)->get();
         $recentDoctors = medical_staff::latest()->take(2)->get();

         $recentItems = collect()
             ->merge($recentServices->map(fn($s) => ['type' => 'خدمة', 'title' => $s->title, 'updated_at' => $s->updated_at, 'id' => $s->id, 'route' => 'services.edit']))
             ->merge($recentNews->map(fn($n) => ['type' => 'خبر', 'title' => $n->title, 'updated_at' => $n->published_at, 'id' => $n->id, 'route' => 'news.edit']))
             ->merge($recentDoctors->map(fn($d) => ['type' => 'طبيب', 'title' => $d->name, 'updated_at' => $d->updated_at, 'id' => $d->id, 'route' => 'medical_staff.edit']))
             ->sortByDesc('updated_at')
             ->take(5);

         return view('dashbord.homedash', compact('servicesCount', 'doctorsCount', 'newsCount', 'pagesCount', 'recentItems'));
     }

}
