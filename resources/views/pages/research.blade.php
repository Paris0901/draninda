@extends('layouts.app')

@section('title', 'Academic Research & Publications | Dr. Aninda Sidhana')
@section('meta_description', 'Peer-reviewed research publications, journal articles, and psychiatric studies co-authored by Dr. Aninda Sidhana in trauma recovery, psychosexual medicine, and public mental health.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/research.css') }}">
<style>
  .search-input-box {
    width: 100%;
    max-width: 500px;
    padding: 0.85rem 1.5rem;
    border-radius: 100px;
    border: 1px solid var(--rule);
    background: rgba(253, 248, 246, 0.08);
    color: var(--ivory);
    font-size: 0.95rem;
    outline: none;
    transition: all 0.25s ease;
  }
  .search-input-box:focus {
    border-color: var(--teal-lt);
    box-shadow: 0 0 15px rgba(31,184,184,0.25);
    background: rgba(15, 34, 48, 0.8);
  }
</style>
@endpush

@section('content')

<header style="background:linear-gradient(135deg, var(--midnight), var(--midnight-2)); padding:6rem 2rem 4rem; text-align:center; position:relative; border-bottom:1px solid rgba(253,248,246,0.1);">
  <a href="{{ route('home') }}" style="display:inline-block; color:var(--teal-lt); text-decoration:none; font-size:0.9rem; font-weight:600; margin-bottom:1.5rem;">← Back to Dr. Aninda Sidhana Home</a>
  <h1 style="font-family:var(--display); font-size:3rem; color:var(--ivory); margin-bottom:1rem;">Academic <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Research Repository</span></h1>
  <p style="color:var(--mist); max-width:700px; margin:0 auto 2rem; font-size:1.1rem; line-height:1.7;">
    Peer-Reviewed Journal Publications, Empirical Studies &amp; Clinical Epidemiological Investigations authored and co-authored by Dr. Aninda Sidhana (Dr. Aninda Sidana).
  </p>

  <div style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap; margin-bottom:2.5rem;">
    <a href="https://scholar.google.com/scholar?q=Aninda+Sidana" target="_blank" rel="noopener" style="color:var(--teal-lt); background:rgba(253,248,246,0.1); padding:0.6rem 1.5rem; border-radius:100px; text-decoration:none; font-size:0.88rem; font-weight:500;">Google Scholar Profile ↗</a>
    <a href="https://www.researchgate.net/" target="_blank" rel="noopener" style="color:var(--pink-lt); background:rgba(253,248,246,0.1); padding:0.6rem 1.5rem; border-radius:100px; text-decoration:none; font-size:0.88rem; font-weight:500;">ResearchGate Citations ↗</a>
  </div>

  <!-- Live Search Box -->
  <div style="display:flex; justify-content:center;">
    <input type="text" id="paperSearchInput" class="search-input-box" placeholder="🔍 Search papers by title, journal or keyword..." oninput="handleLiveSearch()">
  </div>
</header>

<main style="max-width:1200px; margin:3rem auto; padding:0 1.5rem;">

  <!-- Category Filter Pills -->
  <div style="display:flex; justify-content:center; gap:0.6rem; flex-wrap:wrap; margin-bottom:2.5rem;" id="categoryFilterContainer">
    <button class="filter-btn active" onclick="filterPapersCategory('all', this)">All Categories ({{ $papers->count() }})</button>
    @foreach($categories as $cat)
      <button class="filter-btn" onclick="filterPapersCategory('{{ $cat }}', this)">{{ $cat }}</button>
    @endforeach
  </div>

  <div class="grid" id="papersGrid">
    @foreach($papers as $paper)
    <div class="paper-card paper-item" data-category="{{ $paper->category }}" data-title="{{ strtolower($paper->title) }}" data-journal="{{ strtolower($paper->journal) }}" data-desc="{{ strtolower($paper->description) }}" style="{{ $paper->is_featured ? 'grid-column: 1 / -1; background: linear-gradient(145deg, #ffffff, #fdf8f6); border: 1px solid var(--teal); box-shadow: 0 12px 32px rgba(31, 184, 184, 0.08);' : '' }}">
      <div>
        <span class="tag-badge tag-{{ $paper->badge_color }}">{{ $paper->category }}</span>
        <h2 class="paper-title" style="{{ $paper->is_featured ? 'font-size:1.6rem; margin-bottom:0.5rem;' : '' }}">{{ $paper->title }}</h2>
        <p style="font-size:0.88rem; color:var(--pink-deep); font-weight:500; margin-bottom:1rem;">Authors: {{ $paper->authors }}</p>
        <p class="paper-desc">{{ $paper->description }}</p>
      </div>
      <div style="margin-top:1.25rem;">
        <div class="paper-meta"><strong>Journal:</strong> <em>{{ $paper->journal }}</em> ({{ $paper->year }})</div>
        @if($paper->url)
          <a href="{{ $paper->url }}" target="_blank" rel="noopener" class="paper-link">Read Journal Paper / Citation ↗</a>
        @endif
      </div>
    </div>
    @endforeach
  </div>
</main>

@endsection

@push('scripts')
<script>
  let activeCat = 'all';

  function filterPapersCategory(cat, btn) {
    activeCat = cat;
    document.querySelectorAll('#categoryFilterContainer .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    applyFilters();
  }

  function handleLiveSearch() {
    applyFilters();
  }

  function applyFilters() {
    const query = document.getElementById('paperSearchInput').value.toLowerCase().trim();
    const items = document.querySelectorAll('.paper-item');

    items.forEach(item => {
      const itemCat = item.getAttribute('data-category');
      const title = item.getAttribute('data-title') || '';
      const journal = item.getAttribute('data-journal') || '';
      const desc = item.getAttribute('data-desc') || '';

      const matchCat = (activeCat === 'all' || itemCat === activeCat);
      const matchQuery = (!query || title.includes(query) || journal.includes(query) || desc.includes(query));

      if (matchCat && matchQuery) {
        item.style.display = 'flex';
      } else {
        item.style.display = 'none';
      }
    });
  }
</script>
@endpush
