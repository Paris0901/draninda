@extends('layouts.admin')

@section('title', 'Testimonials & Endorsements | Admin CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">💬 Testimonials &amp; Colleague Endorsements</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Manage endorsements and clinical feedback from doctors, institutions, and leaders.</p>
  </div>
  <button onclick="document.getElementById('addTestimonialModal').style.display='block'" class="btn btn-primary">+ Add New Testimonial</button>
</div>

<!-- TESTIMONIALS TABLE -->
<div class="card">
  <table class="table">
    <thead>
      <tr>
        <th>Order</th>
        <th>Initials</th>
        <th>Author Name</th>
        <th>Role / Affiliation</th>
        <th>Quote Preview</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($testimonials as $t)
      <tr>
        <td><strong>#{{ $t->order_index }}</strong></td>
        <td>
          <div style="width:36px; height:36px; border-radius:50%; background:linear-gradient(135deg, var(--teal), var(--pink)); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem; color:#fff;">
            {{ $t->initials }}
          </div>
        </td>
        <td><strong style="color:#fff;">{{ $t->author_name }}</strong></td>
        <td style="color:#cbd5e1; font-size:0.9rem;">{{ $t->author_role }}</td>
        <td style="color:#94a3b8; font-size:0.85rem; max-width:320px;">
          "{{ Str::limit($t->quote, 85) }}"
        </td>
        <td>
          <form action="{{ route('admin.testimonials.toggle-active', $t->id) }}" method="POST">
            @csrf
            <button type="submit" style="background:none; border:none; cursor:pointer; font-size:0.85rem; padding:0.3rem 0.6rem; border-radius:100px; {{ $t->is_active ? 'background:rgba(34,197,94,0.15); color:#4ade80; border:1px solid #22c55e;' : 'background:rgba(239,68,68,0.15); color:#ef4444; border:1px solid #ef4444;' }}">
              {{ $t->is_active ? '✓ Published' : 'Hidden' }}
            </button>
          </form>
        </td>
        <td>
          <div style="display:flex; gap:0.5rem;">
            <button onclick="editTestimonial({{ json_encode($t) }})" class="btn" style="background:rgba(255,255,255,0.08); color:#fff; padding:0.4rem 0.8rem; font-size:0.8rem;">Edit</button>
            <form action="{{ route('admin.testimonials.delete', $t->id) }}" method="POST" onsubmit="return confirm('Delete this testimonial?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="padding:0.4rem 0.8rem; font-size:0.8rem;">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="7" style="text-align:center; color:#94a3b8; padding:2rem;">No testimonials added yet.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

<!-- ADD MODAL -->
<div id="addTestimonialModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:999; overflow-y:auto; padding:2rem;">
  <div class="card" style="max-width:600px; margin:2rem auto;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
      <h2 style="margin:0; color:#fff;">+ Add New Testimonial</h2>
      <button onclick="document.getElementById('addTestimonialModal').style.display='none'" style="background:none; border:none; color:#fff; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <form action="{{ route('admin.testimonials.store') }}" method="POST">
      @csrf
      <div style="display:grid; grid-template-columns: 2fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Author Name</label>
          <input type="text" name="author_name" class="form-control" placeholder="e.g. Dr. Roop Sidana" required>
        </div>
        <div class="form-group">
          <label class="form-label">Initials (optional)</label>
          <input type="text" name="initials" class="form-control" placeholder="e.g. RS" maxlength="5">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Author Role / Clinical Designation</label>
        <input type="text" name="author_role" class="form-control" placeholder="e.g. Psychiatrist & Clinical Director · 40+ Years in Practice" required>
      </div>

      <div class="form-group">
        <label class="form-label">Quote Content</label>
        <textarea name="quote" class="form-control" rows="4" required placeholder="Endorsement text..."></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem; margin-bottom:1.5rem;">
        <div class="form-group">
          <label class="form-label">Order Index</label>
          <input type="number" name="order_index" class="form-control" value="0">
        </div>
        <div style="display:flex; align-items:center; padding-top:1.5rem;">
          <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
            <input type="checkbox" name="is_active" value="1" checked> Active / Visible
          </label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;">Save Testimonial →</button>
    </form>
  </div>
</div>

<!-- EDIT MODAL -->
<div id="editTestimonialModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:999; overflow-y:auto; padding:2rem;">
  <div class="card" style="max-width:600px; margin:2rem auto;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
      <h2 style="margin:0; color:#fff;">Edit Testimonial</h2>
      <button onclick="document.getElementById('editTestimonialModal').style.display='none'" style="background:none; border:none; color:#fff; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <form id="editTestimonialForm" method="POST">
      @csrf
      @method('PUT')
      <div style="display:grid; grid-template-columns: 2fr 1fr; gap:1rem;">
        <div class="form-group">
          <label class="form-label">Author Name</label>
          <input type="text" id="edit_author_name" name="author_name" class="form-control" required>
        </div>
        <div class="form-group">
          <label class="form-label">Initials</label>
          <input type="text" id="edit_initials" name="initials" class="form-control" maxlength="5">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Author Role</label>
        <input type="text" id="edit_author_role" name="author_role" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Quote Content</label>
        <textarea id="edit_quote" name="quote" class="form-control" rows="4" required></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1rem; margin-bottom:1.5rem;">
        <div class="form-group">
          <label class="form-label">Order Index</label>
          <input type="number" id="edit_order_index" name="order_index" class="form-control">
        </div>
        <div style="display:flex; align-items:center; padding-top:1.5rem;">
          <label style="display:flex; align-items:center; gap:0.5rem; color:#fff; cursor:pointer;">
            <input type="checkbox" id="edit_is_active" name="is_active" value="1"> Active / Visible
          </label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;">Update Testimonial →</button>
    </form>
  </div>
</div>

@push('scripts')
<script>
function editTestimonial(item) {
  const form = document.getElementById('editTestimonialForm');
  form.action = `/admin/testimonials/${item.id}`;
  document.getElementById('edit_author_name').value = item.author_name;
  document.getElementById('edit_initials').value = item.initials;
  document.getElementById('edit_author_role').value = item.author_role;
  document.getElementById('edit_quote').value = item.quote;
  document.getElementById('edit_order_index').value = item.order_index || 0;
  document.getElementById('edit_is_active').checked = !!item.is_active;

  document.getElementById('editTestimonialModal').style.display = 'block';
}
</script>
@endpush
@endsection
