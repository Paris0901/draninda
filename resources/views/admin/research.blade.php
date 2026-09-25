@extends('layouts.admin')

@section('title', 'Manage Research Papers | Dr. Aninda Sidhana CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">📄 Academic Research &amp; Publications</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Manage peer-reviewed papers, empirical investigations, and citations.</p>
  </div>
</div>

<!-- ADD RESEARCH FORM -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">➕ Add New Research Publication</h2>
  <form action="{{ route('admin.research.store') }}" method="POST">
    @csrf
    <div style="display:grid; grid-template-columns: 2fr 1fr 1fr; gap:1rem;">
      <div class="form-group">
        <label class="form-label">Paper Title *</label>
        <input type="text" name="title" class="form-control" placeholder="e.g. Staying Home is NOT Staying Safe" required>
      </div>
      <div class="form-group">
        <label class="form-label">Journal Name *</label>
        <input type="text" name="journal" class="form-control" placeholder="e.g. Psychiatry and Clinical Neurosciences" required>
      </div>
      <div class="form-group">
        <label class="form-label">Year *</label>
        <input type="text" name="year" class="form-control" placeholder="e.g. 2024" required>
      </div>
    </div>

    <div style="display:grid; grid-template-columns: 1fr 1fr 2fr; gap:1rem;">
      <div class="form-group">
        <label class="form-label">Category *</label>
        <input type="text" name="category" class="form-control" placeholder="e.g. Psychosexual Medicine or Trauma" required>
      </div>
      <div class="form-group">
        <label class="form-label">Authors</label>
        <input type="text" name="authors" class="form-control" value="Dr. Aninda Sidhana (Sidana) et al.">
      </div>
      <div class="form-group">
        <label class="form-label">Journal / Citation URL</label>
        <input type="url" name="url" class="form-control" placeholder="https://scholar.google.com/...">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">Description / Abstract Summary *</label>
      <textarea name="description" class="form-control" rows="3" placeholder="Brief summary of study methodologies and outcomes..." required></textarea>
    </div>

    <div style="display:flex; align-items:center; gap:1.5rem;">
      <label style="color:#94a3b8; font-size:0.9rem; cursor:pointer;">
        <input type="checkbox" name="is_featured" value="1"> Featured Landmark Paper
      </label>
      <label style="color:#94a3b8; font-size:0.9rem; cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" checked> Active on live site
      </label>
      <button type="submit" class="btn btn-primary" style="margin-left:auto;">Save Publication →</button>
    </div>
  </form>
</div>

<!-- EXISTING RESEARCH TABLE -->
<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">Current Publications ({{ $papers->count() }})</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Journal &amp; Year</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($papers as $p)
      <tr>
        <td>
          <strong style="color:#fff;">{{ $p->title }}</strong><br>
          <span style="color:#94a3b8; font-size:0.85rem;">{{ $p->authors }}</span>
        </td>
        <td><span style="color:var(--teal-lt);">{{ $p->journal }}</span> ({{ $p->year }})</td>
        <td><span style="background:rgba(255,255,255,0.08); padding:0.2rem 0.6rem; border-radius:100px; font-size:0.75rem;">{{ $p->category }}</span></td>
        <td>
          <form action="{{ route('admin.research.delete', $p->id) }}" method="POST" onsubmit="return confirm('Delete this publication?')">
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
