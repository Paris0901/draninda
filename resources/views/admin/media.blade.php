@extends('layouts.admin')

@section('title', 'Media Appearances & Press | Admin CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">🎙️ Media Appearances &amp; Press Manager</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Manage podcasts, video interviews, Josh Talks, and magazine features.</p>
  </div>
  <button onclick="document.getElementById('addMediaModal').style.display='block'" class="btn btn-primary">+ Add New Media Item</button>
</div>

<!-- MEDIA LIST TABLE -->
<div class="card">
  <table class="table">
    <thead>
      <tr>
        <th>Order</th>
        <th>Type</th>
        <th>Show / Event</th>
        <th>Title &amp; Host</th>
        <th>Links</th>
        <th>Featured</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($mediaList as $item)
      <tr>
        <td><strong>#{{ $item->order_index }}</strong></td>
        <td>
          <span style="background:rgba(31,184,184,0.15); border:1px solid rgba(31,184,184,0.3); color:var(--teal-lt); padding:0.25rem 0.6rem; border-radius:100px; font-size:0.75rem; font-weight:600;">
            {{ $item->media_type }}
          </span>
        </td>
        <td><strong style="color:#fff;">{{ $item->show_name }}</strong></td>
        <td>
          <div style="font-weight:600; color:#fff;">{{ $item->title }}</div>
          @if($item->host)<div style="font-size:0.8rem; color:#94a3b8;">Host: {{ $item->host }}</div>@endif
        </td>
        <td>
          <div style="display:flex; gap:0.4rem; font-size:1.1rem;">
            @if($item->spotify_url)<a href="{{ $item->spotify_url }}" target="_blank" title="Spotify" style="text-decoration:none;">🟢</a>@endif
            @if($item->apple_url)<a href="{{ $item->apple_url }}" target="_blank" title="Apple Podcasts" style="text-decoration:none;">🟣</a>@endif
            @if($item->youtube_url)<a href="{{ $item->youtube_url }}" target="_blank" title="YouTube Video" style="text-decoration:none;">🔴</a>@endif
          </div>
        </td>
        <td>
          <form action="{{ route('admin.media.toggle-featured', $item->id) }}" method="POST">
            @csrf
            <button type="submit" style="background:none; border:none; cursor:pointer; font-size:1.1rem;">
              {{ $item->is_featured ? '⭐ Featured' : '☆ Standard' }}
            </button>
          </form>
        </td>
        <td>
          <div style="display:flex; gap:0.5rem;">
            <button onclick="editMedia({{ json_encode($item) }})" class="btn" style="background:rgba(255,255,255,0.08); color:#fff; padding:0.4rem 0.8rem; font-size:0.8rem;">Edit</button>
            <form action="{{ route('admin.media.delete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this media item?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="padding:0.4rem 0.8rem; font-size:0.8rem;">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="7" style="text-align:center; color:#94a3b8; padding:2rem;">No media appearances added yet.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

<!-- ADD MODAL -->
<div id="addMediaModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:999; overflow-y:auto; padding:2rem;">
  <div class="card" style="max-width:650px; margin:2rem auto;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
      <h2 style="margin:0; color:#fff;">+ Add New Media Item</h2>
      <button onclick="document.getElementById('addMediaModal').style.display='none'" style="background:none; border:none; color:#fff; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <form action="{{ route('admin.media.store') }}" method="POST">
      @csrf
      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Media Type</label>
          <select name="media_type" class="form-control" required>
            <option value="Podcast">Podcast</option>
            <option value="Broadcast Video">Broadcast Video</option>
            <option value="Viral Keynote Talk">Viral Keynote Talk</option>
            <option value="Magazine / Essay">Magazine / Essay</option>
            <option value="News Feature">News Feature</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Show / Event Name</label>
          <input type="text" name="show_name" class="form-control" placeholder="e.g. The AboutHer Show / Josh Talks" required>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Episode / Feature Title</label>
        <input type="text" name="title" class="form-control" placeholder="e.g. The Mind Unspoken — Women, Trauma & Taboo" required>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Host / Interviewer</label>
          <input type="text" name="host" class="form-control" placeholder="e.g. Sangeeta Relan">
        </div>
        <div class="form-group">
          <label class="form-label">Order Index</label>
          <input type="number" name="order_index" class="form-control" value="0">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Description / Abstract</label>
        <textarea name="description" class="form-control" rows="3" required placeholder="Core themes covered, clinical takeaways, survivor insights..."></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Spotify URL</label>
          <input type="url" name="spotify_url" class="form-control" placeholder="https://open.spotify.com/...">
        </div>
        <div class="form-group">
          <label class="form-label">Apple Podcast URL</label>
          <input type="url" name="apple_url" class="form-control" placeholder="https://podcasts.apple.com/...">
        </div>
        <div class="form-group">
          <label class="form-label">YouTube URL</label>
          <input type="url" name="youtube_url" class="form-control" placeholder="https://youtu.be/...">
        </div>
      </div>

      <div style="display:flex; gap:1.5rem; margin-bottom:1.5rem;">
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" name="is_featured" value="1" checked> Feature on Media Hero / Spotlight
        </label>
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" name="is_active" value="1" checked> Active / Published
        </label>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;">Save Media Appearance →</button>
    </form>
  </div>
</div>

<!-- EDIT MODAL -->
<div id="editMediaModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:999; overflow-y:auto; padding:2rem;">
  <div class="card" style="max-width:650px; margin:2rem auto;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
      <h2 style="margin:0; color:#fff;">Edit Media Item</h2>
      <button onclick="document.getElementById('editMediaModal').style.display='none'" style="background:none; border:none; color:#fff; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <form id="editMediaForm" method="POST">
      @csrf
      @method('PUT')
      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Media Type</label>
          <select id="edit_media_type" name="media_type" class="form-control" required>
            <option value="Podcast">Podcast</option>
            <option value="Broadcast Video">Broadcast Video</option>
            <option value="Viral Keynote Talk">Viral Keynote Talk</option>
            <option value="Magazine / Essay">Magazine / Essay</option>
            <option value="News Feature">News Feature</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Show / Event Name</label>
          <input type="text" id="edit_show_name" name="show_name" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Episode / Feature Title</label>
        <input type="text" id="edit_title" name="title" class="form-control" required>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Host / Interviewer</label>
          <input type="text" id="edit_host" name="host" class="form-control">
        </div>
        <div class="form-group">
          <label class="form-label">Order Index</label>
          <input type="number" id="edit_order_index" name="order_index" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Description / Abstract</label>
        <textarea id="edit_description" name="description" class="form-control" rows="3" required></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Spotify URL</label>
          <input type="url" id="edit_spotify_url" name="spotify_url" class="form-control">
        </div>
        <div class="form-group">
          <label class="form-label">Apple Podcast URL</label>
          <input type="url" id="edit_apple_url" name="apple_url" class="form-control">
        </div>
        <div class="form-group">
          <label class="form-label">YouTube URL</label>
          <input type="url" id="edit_youtube_url" name="youtube_url" class="form-control">
        </div>
      </div>

      <div style="display:flex; gap:1.5rem; margin-bottom:1.5rem;">
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" id="edit_is_featured" name="is_featured" value="1"> Feature on Media Hero
        </label>
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" id="edit_is_active" name="is_active" value="1"> Active / Published
        </label>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;">Update Media Appearance →</button>
    </form>
  </div>
</div>

@push('scripts')
<script>
function editMedia(item) {
  const form = document.getElementById('editMediaForm');
  form.action = `/admin/media/${item.id}`;
  document.getElementById('edit_media_type').value = item.media_type;
  document.getElementById('edit_show_name').value = item.show_name;
  document.getElementById('edit_title').value = item.title;
  document.getElementById('edit_host').value = item.host || '';
  document.getElementById('edit_order_index').value = item.order_index || 0;
  document.getElementById('edit_description').value = item.description;
  document.getElementById('edit_spotify_url').value = item.spotify_url || '';
  document.getElementById('edit_apple_url').value = item.apple_url || '';
  document.getElementById('edit_youtube_url').value = item.youtube_url || '';
  document.getElementById('edit_is_featured').checked = !!item.is_featured;
  document.getElementById('edit_is_active').checked = !!item.is_active;

  document.getElementById('editMediaModal').style.display = 'block';
}
</script>
@endpush
@endsection
