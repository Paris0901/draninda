@extends('layouts.app')

@section('title', 'Career Journey, Academic Timeline & Hospital Legacy | Dr. Aninda Sidhana')
@section('meta_description', 'Complete career trajectory of Dr. Aninda Sidhana from MBBS (D Y Patil) & MD Psychiatry (MGMCRI) to IHBAS Senior Residency, Santosh Medical College, Yashoda Hospital, and Tekchand Sidana Hospital.')

@section('content')

<!-- HEADER -->
<header style="background:linear-gradient(135deg, var(--bg-dark), #0d192d); padding:6rem 1.5rem 4rem; text-align:center; border-bottom:1px solid var(--glass-border);">
  <div style="max-width:850px; margin:0 auto;">
    <span class="badge-pill badge-teal" style="margin-bottom:1rem;">Chronology &amp; Heritage</span>
    <h1 style="font-family:var(--display); font-size:clamp(2.5rem, 5vw, 3.8rem); color:#fff; margin:0.4rem 0 1rem;">
      Career Journey &amp; <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Institutional Legacy</span>
    </h1>
    <p style="color:#94a3b8; font-size:1.15rem; line-height:1.7;">
      Over 15 years of uninterrupted psychiatric clinical practice, apex residency training, medical faculty leadership, and national policy design.
    </p>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- FAMILY & HOSPITAL LEGACY HIGHLIGHT -->
  <div class="executive-card" style="margin-bottom:4rem; background:linear-gradient(135deg, rgba(15,34,48,0.9), #0b1523); border-color:rgba(31,184,184,0.3);">
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2.5rem; align-items:center;">
      <div>
        <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Multi-Generational Medicine</span>
        <h2 style="font-family:var(--display); font-size:2rem; color:#fff; margin:0.4rem 0 1rem;">The Sidana Legacy at Tekchand Hospital</h2>
        <p style="color:#cbd5e1; font-size:1rem; line-height:1.7; margin-bottom:1rem;">
          Dr. Aninda Sidhana’s commitment to psychiatric medicine is rooted in multi-generational medical heritage centered at the <strong>Tekchand Sidana Memorial Hospital</strong> in Sri Ganganagar, Rajasthan.
        </p>
        <p style="color:#94a3b8; font-size:0.95rem; line-height:1.7;">
          She continues the life-work of <strong>Dr. Roop Chand Sidana</strong> (recipient of the prestigious Dr. N.N. Wig Oration for 43+ years in psychiatry) and collaborates closely with <strong>Dr. Itee Sidana</strong> (WICCI Youth Mental Health Lead).
        </p>
      </div>

      <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
        <div style="background:rgba(7,13,23,0.8); border:1px solid rgba(255,255,255,0.06); padding:1.2rem; border-radius:14px;">
          <b style="font-size:1.8rem; color:var(--teal-lt); display:block;">43+</b>
          <span style="font-size:0.85rem; color:#94a3b8;">Years Family Legacy</span>
        </div>
        <div style="background:rgba(7,13,23,0.8); border:1px solid rgba(255,255,255,0.06); padding:1.2rem; border-radius:14px;">
          <b style="font-size:1.8rem; color:var(--pink-lt); display:block;">IHBAS</b>
          <span style="font-size:0.85rem; color:#94a3b8;">Apex Neuropsychiatry</span>
        </div>
        <div style="background:rgba(7,13,23,0.8); border:1px solid rgba(255,255,255,0.06); padding:1.2rem; border-radius:14px;">
          <b style="font-size:1.8rem; color:#a78bfa; display:block;">Faculty</b>
          <span style="font-size:0.85rem; color:#94a3b8;">Ex-Asst. Professor</span>
        </div>
        <div style="background:rgba(7,13,23,0.8); border:1px solid rgba(255,255,255,0.06); padding:1.2rem; border-radius:14px;">
          <b style="font-size:1.8rem; color:#38bdf8; display:block;">WICCI</b>
          <span style="font-size:0.85rem; color:#94a3b8;">National President</span>
        </div>
      </div>
    </div>
  </div>

  <!-- COMPLETE TIMELINE (2009–2026) -->
  <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:1rem; margin-bottom:2.5rem;">
    <div>
      <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin:0 0 0.3rem;">Chronological Milestones (2009–2026)</h2>
      <p style="color:#94a3b8; margin:0;">Detailed record of medical graduation, residency, faculty tenures, and global appointments.</p>
    </div>
    
    <div style="display:flex; gap:0.5rem; flex-wrap:wrap;" id="journeyFilters">
      <button class="filter-btn active" onclick="filterJourney('all', this)">All Milestones</button>
      <button class="filter-btn" onclick="filterJourney('Education', this)">Education &amp; Residency</button>
      <button class="filter-btn" onclick="filterJourney('Academic', this)">Academic Faculty</button>
      <button class="filter-btn" onclick="filterJourney('Leadership', this)">National Leadership</button>
      <button class="filter-btn" onclick="filterJourney('Tech', this)">Digital AI &amp; Tech</button>
    </div>
  </div>

  <div style="margin-top:2rem;" id="journeyGrid">
    @foreach($milestones as $m)
    <div class="timeline-node journey-item" data-category="{{ $m->category }}">
      <div style="background:#0e1726; border:1px solid var(--glass-border); border-radius:16px; padding:1.8rem; box-shadow:0 10px 30px rgba(0,0,0,0.3);">
        <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:0.5rem; margin-bottom:0.8rem;">
          <div>
            <span style="font-family:var(--display); font-size:1.15rem; font-weight:700; color:var(--teal-lt); background:rgba(31,184,184,0.15); padding:0.25rem 0.85rem; border-radius:100px; display:inline-block; margin-bottom:0.5rem;">{{ $m->period }}</span>
            <h3 style="font-size:1.4rem; color:#fff; margin:0.2rem 0;">{{ $m->title }}</h3>
            @if($m->organization)
              <p style="font-size:0.95rem; color:var(--pink-lt); font-weight:600; margin:0.2rem 0;">{{ $m->organization }} · <span style="color:#94a3b8; font-weight:400;">{{ $m->location }}</span></p>
            @endif
          </div>
          @if($m->badge)
            <span class="badge-pill badge-teal" style="font-size:0.75rem;">{{ $m->badge }}</span>
          @endif
        </div>
        <p style="color:#cbd5e1; font-size:0.98rem; line-height:1.7; margin-top:0.6rem;">{{ $m->description }}</p>
      </div>
    </div>
    @endforeach
  </div>

</main>

@endsection

@push('scripts')
<script>
  function filterJourney(cat, btn) {
    document.querySelectorAll('#journeyFilters .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.journey-item');
    items.forEach(item => {
      const itemCat = item.getAttribute('data-category');
      if (cat === 'all' || itemCat.includes(cat)) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }
</script>
@endpush
