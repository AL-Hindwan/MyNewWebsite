<?php

use App\Models\services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newservicescontroller extends Controller
{
    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
        }

        services::create([
            'name' => $request->name,
            'description' => $request->description,
            'details' => $request->details,
            'image_path' => $imagePath,
            'is_active' => true
        ]);

        return redirect()->route('services.index')->with('success', 'تمت إضافة الخدمة بنجاح');
    }

    public function index()
    {
        $services = services::all();
        return view('admin.services.index', compact('services'));
    
    }

}
