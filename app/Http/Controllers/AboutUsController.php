<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_us;

class AboutUsController extends Controller
{
    public function dashboardIndex()
    {
        $aboutUs = about_us::first(); // Assuming there's only one about us entry
        return view('dashbord.about_us', compact('aboutUs'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $aboutUs = about_us::first();
        if (!$aboutUs) {
            $aboutUs = new about_us();
        }

        $imageData = $aboutUs->image;
        if ($request->hasFile('image')) {
            $imageData = base64_encode(file_get_contents($request->file('image')->getRealPath()));
        }

        $aboutUs->update([
            'content' => $validated['content'],
            'image' => $imageData,
        ]);

        return redirect()->route('about_us.dashboard')->with('success', 'تم تحديث صفحة من نحن بنجاح');
    }
}