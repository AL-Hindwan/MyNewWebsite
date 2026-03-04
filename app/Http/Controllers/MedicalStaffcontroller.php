<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medical_staff;

class MedicalStaffcontroller extends Controller
{
    public function MedicalStaff()
    {
        $medicalStaff = medical_staff::all();
        return view('MedicalStaff', compact('medicalStaff'));
    }

    public function create()
    {
        return view('admin.medical_staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $imageData = null;
        if ($request->hasFile('photo')) {
            $imageData = base64_encode(file_get_contents($request->file('photo')->getRealPath()));
        }

        medical_staff::create([
            'name' => $request->name,
            'specialty' => $request->specialty,
            'bio' => $request->bio,
            'image' => $imageData,
        ]);

        return redirect()->route('medical_staff.index')->with('success', 'تمت إضافة الموظف الطبي بنجاح');
    }

    public function index()
    {
        $medicalStaff = medical_staff::all();
        return view('admin.medical_staff.index', compact('medicalStaff'));

    }

    public function show($id)
    {
        $staff = medical_staff::findOrFail($id);
        return view('medical_staff.show', compact('staff'));
    }

    public function dashboardIndex()
    {
        $medicalStaff = medical_staff::all();
        return view('dashbord.doctor', compact('medicalStaff'));
    }

    public function edit($id)
    {
        $staff = medical_staff::findOrFail($id);
        return view('admin.medical_staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $staff = medical_staff::findOrFail($id);

        $imageData = $staff->image;
        if ($request->hasFile('photo')) {
            $imageData = base64_encode(file_get_contents($request->file('photo')->getRealPath()));
        }

        $staff->update([
            'name' => $request->name,
            'specialty' => $request->specialty,
            'bio' => $request->bio,
            'image' => $imageData,
        ]);

        return redirect()->route('medical_staff.index')->with('success', 'تم تحديث الموظف الطبي بنجاح');
    }

    public function destroy($id)
    {
        $staff = medical_staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('medical_staff.index')->with('success', 'تم حذف الموظف الطبي بنجاح');
    }

}
