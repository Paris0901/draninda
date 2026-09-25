<?php

namespace App\Http\Controllers;

use App\Models\ResearchPaper;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::pluck('value', 'key');
        $papers = ResearchPaper::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $categories = ResearchPaper::where('is_active', true)->pluck('category')->unique()->values();
        
        return view('pages.research', compact('settings', 'papers', 'categories'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q', '');
        $category = $request->input('category', 'all');

        $papersQuery = ResearchPaper::where('is_active', true)->orderBy('order_index', 'asc');

        if ($category !== 'all' && !empty($category)) {
            $papersQuery->where('category', $category);
        }

        if (!empty($query)) {
            $papersQuery->where(function($q) use ($query) {
                $q->where('title', 'LIKE', "%{$query}%")
                  ->orWhere('journal', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%")
                  ->orWhere('authors', 'LIKE', "%{$query}%");
            });
        }

        $papers = $papersQuery->get();
        return response()->json($papers);
    }
}
