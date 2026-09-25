<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\GalleryPhoto;
use App\Models\Inquiry;
use App\Models\Initiative;
use App\Models\MediaAppearance;
use App\Models\Protocol;
use App\Models\ResearchPaper;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\TimelineMilestone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    // === TIMELINE MILESTONES ===
    public function milestones()
    {
        $milestones = TimelineMilestone::orderBy('order_index', 'asc')->get();
        return view('admin.milestones', compact('milestones'));
    }

    public function storeMilestone(Request $request)
    {
        $data = $request->validate([
            'period' => 'required|string',
            'title' => 'required|string',
            'organization' => 'nullable|string',
            'location' => 'nullable|string',
            'category' => 'required|string',
            'badge' => 'nullable|string',
            'description' => 'required|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['order_index'] = $data['order_index'] ?? (TimelineMilestone::max('order_index') + 1);
        $data['is_active'] = $request->has('is_active');

        TimelineMilestone::create($data);
        return back()->with('success', 'Milestone added successfully!');
    }

    public function updateMilestone(Request $request, $id)
    {
        $milestone = TimelineMilestone::findOrFail($id);
        $data = $request->validate([
            'period' => 'required|string',
            'title' => 'required|string',
            'organization' => 'nullable|string',
            'location' => 'nullable|string',
            'category' => 'required|string',
            'badge' => 'nullable|string',
            'description' => 'required|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['is_active'] = $request->has('is_active');
        $milestone->update($data);
        return back()->with('success', 'Milestone updated successfully!');
    }

    public function deleteMilestone($id)
    {
        TimelineMilestone::findOrFail($id)->delete();
        return back()->with('success', 'Milestone deleted successfully!');
    }

    // === AWARDS ===
    public function awards()
    {
        $awards = Award::orderBy('order_index', 'asc')->get();
        return view('admin.awards', compact('awards'));
    }

    public function storeAward(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'bestowing_organization' => 'required|string',
            'year' => 'required|string',
            'category' => 'required|string',
            'icon' => 'nullable|string',
            'field_of_recognition' => 'nullable|string',
            'description' => 'required|string',
            'badge' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['order_index'] = $data['order_index'] ?? (Award::max('order_index') + 1);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        Award::create($data);
        return back()->with('success', 'Award added successfully!');
    }

    public function updateAward(Request $request, $id)
    {
        $award = Award::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'bestowing_organization' => 'required|string',
            'year' => 'required|string',
            'category' => 'required|string',
            'icon' => 'nullable|string',
            'field_of_recognition' => 'nullable|string',
            'description' => 'required|string',
            'badge' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        $award->update($data);
        return back()->with('success', 'Award updated successfully!');
    }

    public function deleteAward($id)
    {
        Award::findOrFail($id)->delete();
        return back()->with('success', 'Award deleted successfully!');
    }

    // === RESEARCH PAPERS ===
    public function research()
    {
        $papers = ResearchPaper::orderBy('order_index', 'asc')->get();
        return view('admin.research', compact('papers'));
    }

    public function storeResearch(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'journal' => 'required|string',
            'year' => 'required|string',
            'category' => 'required|string',
            'authors' => 'nullable|string',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'badge_color' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['order_index'] = $data['order_index'] ?? (ResearchPaper::max('order_index') + 1);
        $data['authors'] = $data['authors'] ?? 'Dr. Aninda Sidhana (Sidana)';
        $data['badge_color'] = $data['badge_color'] ?? 'teal';
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        ResearchPaper::create($data);
        return back()->with('success', 'Research paper added successfully!');
    }

    public function updateResearch(Request $request, $id)
    {
        $paper = ResearchPaper::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'journal' => 'required|string',
            'year' => 'required|string',
            'category' => 'required|string',
            'authors' => 'nullable|string',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'badge_color' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        $paper->update($data);
        return back()->with('success', 'Research paper updated successfully!');
    }

    public function deleteResearch($id)
    {
        ResearchPaper::findOrFail($id)->delete();
        return back()->with('success', 'Research paper deleted successfully!');
    }

    // === MEDIA APPEARANCES & PODCASTS ===
    public function media()
    {
        $mediaList = MediaAppearance::orderBy('order_index', 'asc')->get();
        return view('admin.media', compact('mediaList'));
    }

    public function storeMedia(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'show_name' => 'required|string',
            'host' => 'nullable|string',
            'media_type' => 'required|string',
            'description' => 'required|string',
            'spotify_url' => 'nullable|url',
            'apple_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'badge_color' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['order_index'] = $data['order_index'] ?? (MediaAppearance::max('order_index') + 1);
        $data['badge_color'] = $data['badge_color'] ?? 'teal';
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        MediaAppearance::create($data);
        return back()->with('success', 'Media appearance added successfully!');
    }

    public function updateMedia(Request $request, $id)
    {
        $item = MediaAppearance::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'show_name' => 'required|string',
            'host' => 'nullable|string',
            'media_type' => 'required|string',
            'description' => 'required|string',
            'spotify_url' => 'nullable|url',
            'apple_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'badge_color' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        $item->update($data);
        return back()->with('success', 'Media appearance updated successfully!');
    }

    public function deleteMedia($id)
    {
        MediaAppearance::findOrFail($id)->delete();
        return back()->with('success', 'Media appearance deleted successfully!');
    }

    public function toggleMediaFeatured($id)
    {
        $item = MediaAppearance::findOrFail($id);
        $item->is_featured = !$item->is_featured;
        $item->save();
        return back()->with('success', 'Featured status toggled!');
    }

    // === TESTIMONIALS & ENDORSEMENTS ===
    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('order_index', 'asc')->get();
        return view('admin.testimonials', compact('testimonials'));
    }

    public function storeTestimonial(Request $request)
    {
        $data = $request->validate([
            'author_name' => 'required|string',
            'author_role' => 'required|string',
            'initials' => 'nullable|string|max:5',
            'quote' => 'required|string',
            'order_index' => 'nullable|integer',
        ]);
        if (empty($data['initials'])) {
            $words = explode(' ', trim($data['author_name']));
            $initials = '';
            foreach ($words as $w) {
                $initials .= Str::upper(substr($w, 0, 1));
            }
            $data['initials'] = substr($initials, 0, 4) ?: 'AS';
        }
        $data['order_index'] = $data['order_index'] ?? (Testimonial::max('order_index') + 1);
        $data['is_active'] = $request->has('is_active');

        Testimonial::create($data);
        return back()->with('success', 'Testimonial added successfully!');
    }

    public function updateTestimonial(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $data = $request->validate([
            'author_name' => 'required|string',
            'author_role' => 'required|string',
            'initials' => 'nullable|string|max:5',
            'quote' => 'required|string',
            'order_index' => 'nullable|integer',
        ]);
        $data['is_active'] = $request->has('is_active');

        $testimonial->update($data);
        return back()->with('success', 'Testimonial updated successfully!');
    }

    public function deleteTestimonial($id)
    {
        Testimonial::findOrFail($id)->delete();
        return back()->with('success', 'Testimonial deleted successfully!');
    }

    public function toggleTestimonialActive($id)
    {
        $item = Testimonial::findOrFail($id);
        $item->is_active = !$item->is_active;
        $item->save();
        return back()->with('success', 'Visibility status updated!');
    }

    // === PHOTO GALLERY MANAGER ===
    public function gallery()
    {
        $photos = GalleryPhoto::orderBy('order_index', 'asc')->get();
        return view('admin.gallery', compact('photos'));
    }

    public function storeGalleryPhoto(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'event_name' => 'nullable|string',
            'category' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:8192',
            'image_path' => 'nullable|string',
            'caption' => 'nullable|string',
            'year' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/gallery');
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $filename = 'gallery_' . time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $data['image_path'] = 'uploads/gallery/' . $filename;
        } elseif (empty($data['image_path'])) {
            $data['image_path'] = 'assets/images/gallery-1.jpg';
        }

        unset($data['image_file']);
        $data['order_index'] = $data['order_index'] ?? (GalleryPhoto::max('order_index') + 1);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        GalleryPhoto::create($data);
        return back()->with('success', 'Photo added to gallery successfully!');
    }

    public function updateGalleryPhoto(Request $request, $id)
    {
        $photo = GalleryPhoto::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'event_name' => 'nullable|string',
            'category' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:8192',
            'image_path' => 'nullable|string',
            'caption' => 'nullable|string',
            'year' => 'nullable|string',
            'order_index' => 'nullable|integer',
        ]);

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/gallery');
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $filename = 'gallery_' . time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $data['image_path'] = 'uploads/gallery/' . $filename;
        }

        unset($data['image_file']);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_active'] = $request->has('is_active');

        $photo->update($data);
        return back()->with('success', 'Photo updated successfully!');
    }

    public function deleteGalleryPhoto($id)
    {
        $photo = GalleryPhoto::findOrFail($id);
        $photo->delete();
        return back()->with('success', 'Photo removed from gallery!');
    }

    public function toggleGalleryPhotoFeatured($id)
    {
        $photo = GalleryPhoto::findOrFail($id);
        $photo->is_featured = !$photo->is_featured;
        $photo->save();
        return back()->with('success', 'Gallery featured status updated!');
    }

    // === INQUIRIES ===
    public function inquiries()
    {
        $inquiries = Inquiry::orderBy('created_at', 'desc')->get();
        return view('admin.inquiries', compact('inquiries'));
    }

    public function updateInquiryStatus(Request $request, $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->update(['status' => $request->input('status', 'read')]);
        return back()->with('success', 'Inquiry status updated!');
    }

    public function deleteInquiry($id)
    {
        Inquiry::findOrFail($id)->delete();
        return back()->with('success', 'Inquiry deleted!');
    }

    // === SITE SETTINGS ===
    public function updateSettings(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            SiteSetting::set($key, $value);
        }
        return back()->with('success', 'Site settings updated successfully!');
    }
}
