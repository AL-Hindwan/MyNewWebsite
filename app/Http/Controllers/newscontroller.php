<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class newscontroller extends Controller
{
    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        news::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath,
            'is_active' => true
        ]);

        return redirect()->route('news.index')->with('success', 'تمت إضافة الخبر بنجاح');
    }

    public function index()
    {
        $news = news::all();
        return view('admin.news.index', compact('news'));
    
    }
     
    

    
   
  
}
