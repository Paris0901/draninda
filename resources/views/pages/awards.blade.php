@extends('layouts.app')

@section('title', 'Awards, Honors & Global Distinctions | Dr. Aninda Sidhana')
@section('meta_description', 'Official honors & awards received by Dr. Aninda Sidhana: Rex Karmaveer Chakra Bronze UN Medal, IPS Women Resilience Award, Marwah Studios Distinction, MedscapeIndia Innovation, LOANI Beautiful Soul.')

@section('content')

<!-- HEADER -->
<header style="background:linear-gradient(135deg, var(--bg-dark), #151a2d); padding:6rem 1.5rem 4rem; text-align:center; border-bottom:1px solid var(--glass-border);">
  <div style="max-width:850px; margin:0 auto;">
    <span class="badge-pill badge-teal" style="margin-bottom:1rem;">Peer &amp; Global Validation</span>
    <h1 style="font-family:var(--display); font-size:clamp(2.5rem, 5vw, 3.8rem); color:#fff; margin:0.4rem 0 1rem;">
      Awards &amp; <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Institutional Honors</span>
    </h1>
    <p style="color:#94a3b8; font-size:1.15rem; line-height:1.7;">
      Recognition from the United Nations, Indian Psychiatric Society, international tech accelerators, state networks, and cultural forums.
    </p>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- FILTER BUTTONS -->
  <div style="display:flex; justify-content:center; gap:0.6rem; flex-wrap:wrap; margin-bottom:3rem;" id="awardFilterContainer">
    <button class="filter-btn active" onclick="filterAwardsPage('all', this)">All Honors ({{ $awards->count() }})</button>
    <button class="filter-btn" onclick="filterAwardsPage('Global', this)">Global &amp; UN</button>
    <button class="filter-btn" onclick="filterAwardsPage('National', this)">National Medical Bodies</button>
    <button class="filter-btn" onclick="filterAwardsPage('Media', this)">Media &amp; Arts Innovation</button>
    <button class="filter-btn" onclick="filterAwardsPage('Clinical', this)">Clinical &amp; Tech</button>
  </div>

  <!-- AWARDS GRID -->
  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;" id="awardsGrid">
    @foreach($awards as $aw)
    <div class="executive-card award-page-item" data-category="{{ $aw->category }}" style="{{ $aw->is_featured ? 'border-color:rgba(31,184,184,0.35); background:linear-gradient(135deg, rgba(15,34,48,0.9), #0b1523);' : '' }}">
      <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
        <span style="font-size:2.2rem;">{{ $aw->icon ?? '🎖️' }}</span>
        @if($aw->badge)
          <span class="badge-pill badge-teal" style="font-size:0.75rem;">{{ $aw->badge }}</span>
        @endif
      </div>

      <span style="font-size:0.8rem; color:var(--teal-lt); font-weight:600; text-transform:uppercase; letter-spacing:0.06em;">
        {{ $aw->bestowing_organization }} · {{ $aw->year }}
      </span>

      <h2 style="font-family:var(--display); font-size:1.5rem; color:#fff; margin:0.4rem 0 0.8rem;">{{ $aw->title }}</h2>
      
      @if($aw->field_of_recognition)
        <p style="color:var(--pink-lt); font-size:0.88rem; font-weight:500; margin-bottom:0.8rem;">Field: {{ $aw->field_of_recognition }}</p>
      @endif

      <p style="color:#cbd5e1; font-size:0.95rem; line-height:1.7;">
        {{ $aw->description }}
      </p>
    </div>
    @endforeach
  </div>

</main>

@endsection

@push('scripts')
<script>
  function filterAwardsPage(cat, btn) {
    document.querySelectorAll('#awardFilterContainer .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.award-page-item');
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
