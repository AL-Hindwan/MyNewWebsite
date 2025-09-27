<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medical_staff;

class MedicalStaffcontroller extends Controller
{

    public function create()
    {
        return view('admin.medical_staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('medical_staff', 'public');
        }

        medical_staff::create([
            'name' => $request->name,
            'specialization' => $request->specialization,
            'bio' => $request->bio,
            'photo_path' => $photoPath,
            'is_active' => true
        ]);

        return redirect()->route('medical_staff.index')->with('success', 'تمت إضافة الموظف الطبي بنجاح');
    }

    public function index()
    {
        $medicalStaff = medical_staff::all();
        return view('admin.medical_staff.index', compact('medicalStaff'));
    
    }

}
