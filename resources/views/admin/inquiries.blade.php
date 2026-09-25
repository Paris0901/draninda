@extends('layouts.admin')

@section('title', 'Manage Inquiries | Dr. Aninda Sidhana CMS')

@section('content')
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
  <div>
    <h1 style="margin:0; font-size:2rem; color:#fff;">✉️ Consultation &amp; Booking Inquiries</h1>
    <p style="color:#94a3b8; margin:0.3rem 0 0;">Review inquiries received through the website contact form.</p>
  </div>
</div>

<div class="card">
  <h2 style="margin-top:0; color:#fff; font-size:1.3rem;">All Inquiries ({{ $inquiries->count() }})</h2>
  
  @if($inquiries->isEmpty())
    <p style="color:#94a3b8; padding:2rem 0; text-align:center;">No inquiries received yet.</p>
  @else
    <div style="display:flex; flex-direction:column; gap:1.25rem;">
      @foreach($inquiries as $inq)
      <div style="background:#090e17; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:1.5rem;">
        <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:1rem; margin-bottom:1rem;">
          <div>
            <span style="font-size:0.75rem; color:#94a3b8;">{{ $inq->created_at->format('d M Y, h:i A') }}</span>
            <h3 style="margin:0.2rem 0; color:#fff; font-size:1.2rem;">{{ $inq->first_name }} {{ $inq->last_name }}</h3>
            <p style="margin:0; color:var(--teal-lt); font-size:0.9rem;">{{ $inq->email }} · <span style="color:#94a3b8;">Org: {{ $inq->organization ?? 'Individual' }}</span></p>
          </div>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <span style="background:rgba(31,184,184,0.15); color:var(--teal-lt); padding:0.3rem 0.8rem; border-radius:100px; font-size:0.8rem; font-weight:600;">
              {{ $inq->inquiry_type }}
            </span>
            <form action="{{ route('admin.inquiries.delete', $inq->id) }}" method="POST" onsubmit="return confirm('Delete this inquiry?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="padding:0.3rem 0.6rem; font-size:0.75rem;">Delete</button>
            </form>
          </div>
        </div>

        <div style="background:rgba(255,255,255,0.03); border-radius:8px; padding:1rem; margin-top:0.75rem; color:#e2e8f0; font-size:0.95rem; line-height:1.6;">
          {{ $inq->message }}
        </div>
      </div>
      @endforeach
    </div>
  @endif
</div>
@endsection
