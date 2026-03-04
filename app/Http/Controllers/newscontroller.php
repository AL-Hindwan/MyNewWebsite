<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class newscontroller extends Controller
{
    public function news()
    {
        $news = News::all();
        return view('news', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'summary' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg'
        ]);

        $imagesData = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagesData[] = base64_encode(file_get_contents($image->getRealPath()));
            }
        }

        News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'summary' => $validated['summary'],
            'image' => $imagesData,
            'published_at' => now(),
        ]);

        return redirect()->route('news.index')->with('success', 'تمت إضافة الخبر بنجاح');
    }

    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));

    }

    public function dashboardIndex()
    {
        $news = News::all();
        return view('dashbord.news', compact('news'));
    }

    public function edit($id)
    {
        $newsItem = News::findOrFail($id);
        return view('admin.news.edit', compact('newsItem'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'summary' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg'
        ]);

        $newsItem = News::findOrFail($id);

        $imagesData = $newsItem->image ?? [];
        if ($request->hasFile('images')) {
            $imagesData = [];
            foreach ($request->file('images') as $image) {
                $imagesData[] = base64_encode(file_get_contents($image->getRealPath()));
            }
        }

        $newsItem->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'summary' => $validated['summary'],
            'image' => $imagesData,
        ]);

        return redirect()->route('news.index')->with('success', 'تم تحديث الخبر بنجاح');
    }

    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();
        return redirect()->route('news.index')->with('success', 'تم حذف الخبر بنجاح');
    }
}
