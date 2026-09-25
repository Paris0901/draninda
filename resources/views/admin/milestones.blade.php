@extends('layouts.admin')

@section('title', 'Manage Timeline Milestones | Dr. Aninda Sidhana CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">📅 Career Timeline &amp; Milestones</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Add, update, or remove chronological career milestones on the website.</p>
  </div>
</div>

<!-- ADD MILESTONE FORM -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">➕ Add New Milestone</h2>
  <form action="{{ route('admin.milestones.store') }}" method="POST">
    @csrf
    <div style="display:grid; grid-template-columns: 1fr 2fr 1fr; gap:1rem;">
      <div class="form-group">
        <label class="form-label">Period / Year *</label>
        <input type="text" name="period" class="form-control" placeholder="e.g. 2009 or 2017–2018" required>
      </div>
      <div class="form-group">
        <label class="form-label">Title / Milestone Role *</label>
        <input type="text" name="title" class="form-control" placeholder="e.g. Assistant Professor of Psychiatry" required>
      </div>
      <div class="form-group">
        <label class="form-label">Category *</label>
        <select name="category" class="form-control" required>
          <option value="Education">Education</option>
          <option value="Clinical">Clinical</option>
          <option value="Academic">Academic</option>
          <option value="Leadership">Leadership</option>
          <option value="Tech">Tech</option>
          <option value="Advocacy">Advocacy</option>
        </select>
      </div>
    </div>

    <div style="display:grid; grid-template-columns: 2fr 1fr 1fr; gap:1rem;">
      <div class="form-group">
        <label class="form-label">Organization / Institution</label>
        <input type="text" name="organization" class="form-control" placeholder="e.g. Santosh Medical College">
      </div>
      <div class="form-group">
        <label class="form-label">Location</label>
        <input type="text" name="location" class="form-control" placeholder="e.g. New Delhi, India">
      </div>
      <div class="form-group">
        <label class="form-label">Badge Label</label>
        <input type="text" name="badge" class="form-control" placeholder="e.g. Academic Faculty">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Description *</label>
      <textarea name="description" class="form-control" rows="3" placeholder="Milestone details and responsibilities..." required></textarea>
    </div>

    <div style="display:flex; align-items:center; gap:1rem;">
      <label style="color:#94a3b8; font-size:0.9rem; cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" checked> Active on live site
      </label>
      <button type="submit" class="btn btn-primary" style="margin-left:auto;">Save Milestone →</button>
    </div>
  </form>
</div>

<!-- EXISTING MILESTONES TABLE -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">Current Milestones ({{ $milestones->count() }})</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Period</th>
        <th>Title &amp; Org</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($milestones as $m)
      <tr>
        <td><strong style="color:var(--teal-lt);">{{ $m->period }}</strong></td>
        <td>
          <strong style="color:#fff;">{{ $m->title }}</strong><br>
          <span style="color:#94a3b8; font-size:0.85rem;">{{ $m->organization }} ({{ $m->location }})</span>
        </td>
        <td><span style="background:rgba(255,255,255,0.08); padding:0.2rem 0.6rem; border-radius:100px; font-size:0.75rem;">{{ $m->category }}</span></td>
        <td>
          <form action="{{ route('admin.milestones.delete', $m->id) }}" method="POST" onsubmit="return confirm('Delete this milestone?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="padding:0.3rem 0.75rem; font-size:0.75rem;">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
