@extends('layouts.admin')

@section('title', 'Photo Gallery Manager | Admin CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">🖼️ Photo Gallery &amp; Event Memories</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Upload and organize high-res event photography, award ceremonies, and clinical summits.</p>
  </div>
  <button onclick="document.getElementById('addPhotoModal').style.display='block'" class="btn btn-primary">+ Upload New Photo</button>
</div>

<!-- PHOTO GRID -->
<div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap:1.5rem; margin-bottom:2.5rem;">
  @forelse($photos as $photo)
  <div class="card" style="padding:0; overflow:hidden; display:flex; flex-direction:column;">
    <div style="height:190px; position:relative; background:#070d17;">
      <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->title }}" style="width:100%; height:100%; object-fit:cover;">
      <span style="position:absolute; top:10px; left:10px; background:rgba(7,13,23,0.85); border:1px solid rgba(255,255,255,0.15); color:var(--teal-lt); padding:0.2rem 0.6rem; border-radius:100px; font-size:0.75rem; font-weight:600;">
        {{ $photo->category }}
      </span>
      @if($photo->year)
      <span style="position:absolute; top:10px; right:10px; background:rgba(7,13,23,0.85); color:#cbd5e1; padding:0.2rem 0.5rem; border-radius:100px; font-size:0.75rem;">
        {{ $photo->year }}
      </span>
      @endif
    </div>
    <div style="padding:1.25rem; flex:1; display:flex; flex-direction:column; justify-content:space-between;">
      <div>
        <h4 style="margin:0 0 0.4rem; color:#fff; font-size:1.05rem;">{{ $photo->title }}</h4>
        @if($photo->event_name)
          <div style="font-size:0.8rem; color:var(--pink-lt); margin-bottom:0.4rem;">{{ $photo->event_name }}</div>
        @endif
        @if($photo->caption)
          <p style="color:#94a3b8; font-size:0.82rem; margin:0 0 1rem; line-height:1.5;">{{ Str::limit($photo->caption, 80) }}</p>
        @endif
      </div>

      <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border-color); padding-top:0.8rem; margin-top:0.8rem;">
        <form action="{{ route('admin.gallery.toggle-featured', $photo->id) }}" method="POST">
          @csrf
          <button type="submit" style="background:none; border:none; cursor:pointer; font-size:0.8rem; color:{{ $photo->is_featured ? '#f59e0b' : '#64748b' }};">
            {{ $photo->is_featured ? '⭐ Featured' : '☆ Standard' }}
          </button>
        </form>
        <div style="display:flex; gap:0.4rem;">
          <button onclick="editPhoto({{ json_encode($photo) }})" class="btn" style="background:rgba(255,255,255,0.08); color:#fff; padding:0.3rem 0.6rem; font-size:0.75rem;">Edit</button>
          <form action="{{ route('admin.gallery.delete', $photo->id) }}" method="POST" onsubmit="return confirm('Delete this gallery photo?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="padding:0.3rem 0.6rem; font-size:0.75rem;">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @empty
  <div class="card" style="grid-column: 1 / -1; text-align:center; padding:3rem; color:#94a3b8;">
    No gallery photos uploaded yet. Click "+ Upload New Photo" to add event and ceremony memories.
  </div>
  @endforelse
</div>

<!-- ADD MODAL -->
<div id="addPhotoModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:999; overflow-y:auto; padding:2rem;">
  <div class="card" style="max-width:600px; margin:2rem auto;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
      <h2 style="margin:0; color:#fff;">+ Upload New Photo</h2>
      <button onclick="document.getElementById('addPhotoModal').style.display='none'" style="background:none; border:none; color:#fff; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label class="form-label">Photo Title</label>
        <input type="text" name="title" class="form-control" placeholder="e.g. UN Rex Karmaveer Chakra Bronze Medal Conferment" required>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Category</label>
          <select name="category" class="form-control" required>
            <option value="Award Ceremonies">Award Ceremonies</option>
            <option value="UN & Global Summits">UN & Global Summits</option>
            <option value="WICCI Conventions">WICCI Conventions</option>
            <option value="Clinical & Speaking">Clinical & Speaking</option>
            <option value="Media & Cinema">Media & Cinema</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Event / Organizer Name</label>
          <input type="text" name="event_name" class="form-control" placeholder="e.g. iCONGO & United Nations">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Upload Image File (JPG, PNG, WebP up to 8MB)</label>
        <input type="file" name="image_file" class="form-control" accept="image/*">
        <small style="color:#64748b; font-size:0.75rem; margin-top:0.3rem; display:block;">Or specify existing path below:</small>
        <input type="text" name="image_path" class="form-control" style="margin-top:0.3rem;" placeholder="assets/images/gallery-1.jpg">
      </div>

      <div class="form-group">
        <label class="form-label">Caption / Memory Note</label>
        <textarea name="caption" class="form-control" rows="2" placeholder="Context or dignitaries present..."></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem; margin-bottom:1.5rem;">
        <div class="form-group">
          <label class="form-label">Year / Period</label>
          <input type="text" name="year" class="form-control" placeholder="e.g. 2026">
        </div>
        <div class="form-group">
          <label class="form-label">Order Index</label>
          <input type="number" name="order_index" class="form-control" value="0">
        </div>
      </div>

      <div style="display:flex; gap:1.5rem; margin-bottom:1.5rem;">
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" name="is_featured" value="1" checked> Featured in Carousel
        </label>
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" name="is_active" value="1" checked> Active / Visible
        </label>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;">Upload to Photo Gallery →</button>
    </form>
  </div>
</div>

<!-- EDIT MODAL -->
<div id="editPhotoModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:999; overflow-y:auto; padding:2rem;">
  <div class="card" style="max-width:600px; margin:2rem auto;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
      <h2 style="margin:0; color:#fff;">Edit Photo Details</h2>
      <button onclick="document.getElementById('editPhotoModal').style.display='none'" style="background:none; border:none; color:#fff; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <form id="editPhotoForm" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label class="form-label">Photo Title</label>
        <input type="text" id="edit_photo_title" name="title" class="form-control" required>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Category</label>
          <select id="edit_photo_category" name="category" class="form-control" required>
            <option value="Award Ceremonies">Award Ceremonies</option>
            <option value="UN & Global Summits">UN & Global Summits</option>
            <option value="WICCI Conventions">WICCI Conventions</option>
            <option value="Clinical & Speaking">Clinical & Speaking</option>
            <option value="Media & Cinema">Media & Cinema</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Event / Organizer Name</label>
          <input type="text" id="edit_photo_event_name" name="event_name" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Replace Image File (Optional)</label>
        <input type="file" name="image_file" class="form-control" accept="image/*">
        <input type="text" id="edit_photo_image_path" name="image_path" class="form-control" style="margin-top:0.3rem;">
      </div>

      <div class="form-group">
        <label class="form-label">Caption / Memory Note</label>
        <textarea id="edit_photo_caption" name="caption" class="form-control" rows="2"></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem; margin-bottom:1.5rem;">
        <div class="form-group">
          <label class="form-label">Year / Period</label>
          <input type="text" id="edit_photo_year" name="year" class="form-control">
        </div>
        <div class="form-group">
          <label class="form-label">Order Index</label>
          <input type="number" id="edit_photo_order_index" name="order_index" class="form-control">
        </div>
      </div>

      <div style="display:flex; gap:1.5rem; margin-bottom:1.5rem;">
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" id="edit_photo_is_featured" name="is_featured" value="1"> Featured in Carousel
        </label>
        <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
          <input type="checkbox" id="edit_photo_is_active" name="is_active" value="1"> Active / Visible
        </label>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;">Update Photo →</button>
    </form>
  </div>
</div>

@push('scripts')
<script>
function editPhoto(photo) {
  const form = document.getElementById('editPhotoForm');
  form.action = `/admin/gallery/${photo.id}`;
  document.getElementById('edit_photo_title').value = photo.title;
  document.getElementById('edit_photo_category').value = photo.category;
  document.getElementById('edit_photo_event_name').value = photo.event_name || '';
  document.getElementById('edit_photo_image_path').value = photo.image_path;
  document.getElementById('edit_photo_caption').value = photo.caption || '';
  document.getElementById('edit_photo_year').value = photo.year || '';
  document.getElementById('edit_photo_order_index').value = photo.order_index || 0;
  document.getElementById('edit_photo_is_featured').checked = !!photo.is_featured;
  document.getElementById('edit_photo_is_active').checked = !!photo.is_active;

  document.getElementById('editPhotoModal').style.display = 'block';
}
</script>
@endpush
@endsection
