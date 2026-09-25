@extends('layouts.admin')

@section('title', 'Manage Awards & Honors | Dr. Aninda Sidhana CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">🏆 Awards &amp; Honors</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Manage national, global, and medical recognitions.</p>
  </div>
</div>

<!-- ADD AWARD FORM -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">➕ Add New Award / Honor</h2>
  <form action="{{ route('admin.awards.store') }}" method="POST">
    @csrf
    <div style="display:grid; grid-template-columns: 2fr 1fr 1fr; gap:1rem;">
      <div class="form-group">
        <label class="form-label">Award Title *</label>
        <input type="text" name="title" class="form-control" placeholder="e.g. Professional Distinction Honor" required>
      </div>
      <div class="form-group">
        <label class="form-label">Bestowing Organization *</label>
        <input type="text" name="bestowing_organization" class="form-control" placeholder="e.g. Marwah Studios" required>
      </div>
      <div class="form-group">
        <label class="form-label">Year *</label>
        <input type="text" name="year" class="form-control" placeholder="e.g. 2026" required>
      </div>
    </div>

    <div style="display:grid; grid-template-columns: 1fr 1fr 2fr; gap:1rem;">
      <div class="form-group">
        <label class="form-label">Category *</label>
        <select name="category" class="form-control" required>
          <option value="Global">Global &amp; UN</option>
          <option value="National">National Medical</option>
          <option value="Media">Media &amp; Arts</option>
          <option value="Clinical">Clinical Innovation</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Emoji / Icon</label>
        <input type="text" name="icon" class="form-control" placeholder="e.g. 🎖️ or 🏆">
      </div>
      <div class="form-group">
        <label class="form-label">Field of Recognition</label>
        <input type="text" name="field_of_recognition" class="form-control" placeholder="e.g. Systemic mental healthcare reform">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Award Citation / Description *</label>
      <textarea name="description" class="form-control" rows="3" placeholder="Citation and contribution details..." required></textarea>
    </div>

    <div style="display:flex; align-items:center; gap:1.5rem;">
      <label style="color:#94a3b8; font-size:0.9rem; cursor:pointer;">
        <input type="checkbox" name="is_featured" value="1"> Featured Banner Card
      </label>
      <label style="color:#94a3b8; font-size:0.9rem; cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" checked> Active on Live Site
      </label>
      <button type="submit" class="btn btn-primary" style="margin-left:auto;">Save Award →</button>
    </div>
  </form>
</div>

<!-- EXISTING AWARDS TABLE -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">Current Awards ({{ $awards->count() }})</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Award</th>
        <th>Organization &amp; Year</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($awards as $a)
      <tr>
        <td>
          <strong style="color:#fff;">{{ $a->icon }} {{ $a->title }}</strong><br>
          <span style="color:#94a3b8; font-size:0.85rem;">{{ $a->field_of_recognition }}</span>
        </td>
        <td><span style="color:var(--teal-lt);">{{ $a->bestowing_organization }}</span> ({{ $a->year }})</td>
        <td><span style="background:rgba(255,255,255,0.08); padding:0.2rem 0.6rem; border-radius:100px; font-size:0.75rem;">{{ $a->category }}</span></td>
        <td>
          <form action="{{ route('admin.awards.delete', $a->id) }}" method="POST" onsubmit="return confirm('Delete this award?')">
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
