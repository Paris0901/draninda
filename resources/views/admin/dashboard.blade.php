@extends('layouts.admin')

@section('title', 'Dashboard Overview | Dr. Aninda Sidhana CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">Welcome, Dr. Sidhana CMS</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Manage your database-driven portfolio content, timeline, awards, and inquiries.</p>
  </div>
  <a href="{{ route('home') }}" target="_blank" class="btn btn-primary">Preview Live Site ↗</a>
</div>

<!-- STATS CARDS -->
<div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap:1.25rem; margin-bottom:2.5rem;">
  <a href="{{ route('admin.milestones') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Career Milestones</p>
    <h2 style="font-size:2.2rem; color:var(--teal-lt); margin:0.4rem 0 0;">{{ $stats['milestones_count'] }}</h2>
  </a>
  <a href="{{ route('admin.awards') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Awards &amp; Honors</p>
    <h2 style="font-size:2.2rem; color:var(--pink-lt); margin:0.4rem 0 0;">{{ $stats['awards_count'] }}</h2>
  </a>
  <a href="{{ route('admin.research') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Research Papers</p>
    <h2 style="font-size:2.2rem; color:#a78bfa; margin:0.4rem 0 0;">{{ $stats['research_count'] }}</h2>
  </a>
  <a href="{{ route('admin.media') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Media &amp; Podcasts</p>
    <h2 style="font-size:2.2rem; color:#f59e0b; margin:0.4rem 0 0;">{{ $stats['media_count'] }}</h2>
  </a>
  <a href="{{ route('admin.testimonials') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Testimonials</p>
    <h2 style="font-size:2.2rem; color:#34d399; margin:0.4rem 0 0;">{{ $stats['testimonials_count'] }}</h2>
  </a>
  <a href="{{ route('admin.gallery') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Gallery Photos</p>
    <h2 style="font-size:2.2rem; color:#38bdf8; margin:0.4rem 0 0;">{{ $stats['gallery_count'] }}</h2>
  </a>
  <a href="{{ route('admin.inquiries') }}" class="card" style="margin:0; text-decoration:none; display:block; transition:transform 0.2s;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">Inquiries</p>
    <h2 style="font-size:2.2rem; color:#ec4899; margin:0.4rem 0 0;">{{ $stats['inquiries_count'] }}</h2>
  </a>
</div>

<!-- SITE SETTINGS FORM -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.4rem;">⚙️ Core Site Settings</h2>
  <form action="{{ route('admin.settings.update') }}" method="POST">
    @csrf
    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1.25rem;">
      <div class="form-group">
        <label class="form-label">Hero Title / Name</label>
        <input type="text" name="hero_name" class="form-control" value="{{ $settings['hero_name'] ?? '' }}">
      </div>
      <div class="form-group">
        <label class="form-label">Contact Email</label>
        <input type="email" name="contact_email" class="form-control" value="{{ $settings['contact_email'] ?? '' }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Hero Kicker / Top Badge</label>
      <input type="text" name="hero_kicker" class="form-control" value="{{ $settings['hero_kicker'] ?? '' }}">
    </div>

    <div class="form-group">
      <label class="form-label">Hero Tagline</label>
      <input type="text" name="hero_tagline" class="form-control" value="{{ $settings['hero_tagline'] ?? '' }}">
    </div>

    <div class="form-group">
      <label class="form-label">Hero Subtitle / Clinical Roles</label>
      <textarea name="hero_subtitle" class="form-control" rows="2">{{ $settings['hero_subtitle'] ?? '' }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Site Settings →</button>
  </form>
</div>

<!-- RECENT INQUIRIES -->
<div class="card">
  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
    <h2 style="margin:0; color:#fff; font-size:1.4rem;">✉️ Recent Inquiries</h2>
    <a href="{{ route('admin.inquiries') }}" style="color:var(--teal-lt); text-decoration:none; font-size:0.9rem;">View All Inquiries →</a>
  </div>

  @if($recentInquiries->isEmpty())
    <p style="color:#94a3b8;">No inquiries received yet.</p>
  @else
    <table class="table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($recentInquiries as $inq)
        <tr>
          <td>{{ $inq->created_at->format('d M Y') }}</td>
          <td><strong>{{ $inq->first_name }} {{ $inq->last_name }}</strong></td>
          <td>{{ $inq->email }}</td>
          <td>{{ $inq->inquiry_type }}</td>
          <td><span style="background:rgba(34,197,94,0.15); color:#4ade80; padding:0.2rem 0.6rem; border-radius:100px; font-size:0.75rem;">{{ strtoupper($inq->status) }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>
@endsection
