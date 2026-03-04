<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class Newservicescontroller extends Controller
{
    public function create()
    {
        return view('dashbord.newservices');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'details' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = base64_encode(file_get_contents($request->file('icon')->getRealPath()));
        }

        services::create([
            'title' => $request->title,
            'description' => $request->description,
            'details' => $request->details,
            'icon' => $iconPath,
        ]);

        return redirect()->route('services.index')->with('success', 'تمت إضافة الخدمة بنجاح');
    }

    public function show($id)
    {
        $service = services::findOrFail($id);
        return view('services.show', compact('service'));
    }

    public function index()
    {
        $services = services::all();
        return view('dashbord.services', compact('services'));

    }

    public function edit($id)
    {
        $service = services::findOrFail($id);
        return view('dashbord.newservices', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'details' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $service = services::findOrFail($id);

        $iconPath = $service->icon;
        if ($request->hasFile('icon')) {
            $iconPath = base64_encode(file_get_contents($request->file('icon')->getRealPath()));
        }

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'details' => $request->details,
            'icon' => $iconPath,
        ]);

        return redirect()->route('services.index')->with('success', 'تم تحديث الخدمة بنجاح');
    }

    public function destroy($id)
    {
        $service = services::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح');
    }

}
