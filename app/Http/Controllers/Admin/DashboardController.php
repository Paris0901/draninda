<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Inquiry;
use App\Models\Initiative;
use App\Models\Protocol;
use App\Models\ResearchPaper;
use App\Models\SiteSetting;
use App\Models\TimelineMilestone;
use App\Models\MediaAppearance;
use App\Models\Testimonial;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'milestones_count' => TimelineMilestone::count(),
            'awards_count' => Award::count(),
            'research_count' => ResearchPaper::count(),
            'protocols_count' => Protocol::count(),
            'media_count' => MediaAppearance::count(),
            'testimonials_count' => Testimonial::count(),
            'gallery_count' => GalleryPhoto::count(),
            'inquiries_count' => Inquiry::count(),
            'unread_inquiries' => Inquiry::where('status', 'unread')->count(),
        ];

        $recentInquiries = Inquiry::orderBy('created_at', 'desc')->take(5)->get();
        $recentMilestones = TimelineMilestone::orderBy('order_index', 'asc')->take(5)->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentMilestones', 'settings'));
    }
}
