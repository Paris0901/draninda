<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\TimelineMilestone;
use App\Models\Award;
use App\Models\ResearchPaper;
use App\Models\Protocol;
use App\Models\Initiative;
use App\Models\MediaAppearance;
use App\Models\Testimonial;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 1. Sleek Executive Homepage
    public function index()
    {
        $settings = SiteSetting::pluck('value', 'key');
        $featuredAwards = Award::where('is_active', true)->where('is_featured', true)->take(3)->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order_index', 'asc')->take(6)->get();

        return view('pages.home', compact('settings', 'featuredAwards', 'testimonials'));
    }

    // 2. Clubbed: About, Career Timeline (2009–2026), Hospital Legacy & Awards + Photo Gallery
    public function about()
    {
        $settings = SiteSetting::pluck('value', 'key');
        $milestones = TimelineMilestone::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $awards = Award::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $galleryPhotos = GalleryPhoto::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order_index', 'asc')->get();

        return view('pages.about', compact('settings', 'milestones', 'awards', 'galleryPhotos', 'testimonials'));
    }

    // 3. Clubbed: Innovations & IP (BAYA E Ai + Clinical Protocols + Academic Research + Movements/FIFA)
    public function innovations()
    {
        $settings = SiteSetting::pluck('value', 'key');
        $protocols = Protocol::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $researchPapers = ResearchPaper::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $initiatives = Initiative::where('is_active', true)->orderBy('order_index', 'asc')->get();
        $researchCategories = ResearchPaper::where('is_active', true)->pluck('category')->unique()->values();

        return view('pages.innovations', compact('settings', 'protocols', 'researchPapers', 'initiatives', 'researchCategories'));
    }

    // 4. Clubbed: Media, Podcasts, Video Keynotes, Essays & Press Kit
    public function media()
    {
        $settings = SiteSetting::pluck('value', 'key');
        $mediaAppearances = MediaAppearance::where('is_active', true)->orderBy('order_index', 'asc')->get();

        return view('pages.media', compact('settings', 'mediaAppearances'));
    }

    // API: Awards Filter
    public function filterAwards(Request $request)
    {
        $category = $request->query('category', 'all');
        $query = Award::where('is_active', true)->orderBy('order_index', 'asc');
        
        if ($category !== 'all') {
            $query->where('category', $category);
        }

        return response()->json($query->get());
    }
}
