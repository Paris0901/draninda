@extends('layouts.app')

@section('title', 'Innovations, Clinical IP & Research | Dr. Aninda Sidhana')
@section('meta_description', 'Explore clinical innovations by Dr. Aninda Sidhana: BAYA E Ai (DHF Melbourne 2026), 5 Copyrighted Clinical Protocols (IP), 8+ Peer-Reviewed Research Publications, and Aura Stadia for FIFA.')

@section('content')

<!-- HEADER -->
<header style="background:radial-gradient(circle at 80% 20%, rgba(31,184,184,0.18), transparent 60%), radial-gradient(circle at 20% 80%, rgba(239,107,156,0.15), transparent 60%), var(--bg-dark); padding:6rem 1.5rem 3.5rem; text-align:center; border-bottom:1px solid var(--glass-border);">
  <div style="max-width:850px; margin:0 auto;">
    <span class="badge-pill badge-pink" style="margin-bottom:1rem;">Clinical IP &amp; Digital Health</span>
    <h1 style="font-family:var(--display); font-size:clamp(2.5rem, 5vw, 3.8rem); color:#fff; margin:0.4rem 0 1rem;">
      Innovations, Protocols &amp; <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Research</span>
    </h1>
    <p style="color:#94a3b8; font-size:1.15rem; line-height:1.7;">
      From empathetic artificial intelligence algorithms to copyrighted clinical trauma architectures, mass sports stadium safety, and published empirical science.
    </p>

    <!-- SECTION QUICK TABS -->
    <div style="display:flex; justify-content:center; gap:0.6rem; flex-wrap:wrap; margin-top:2rem;">
      <a href="#baya-ai" class="filter-btn" style="color:var(--teal-lt); border-color:rgba(31,184,184,0.4);">📱 BAYA E Ai™ (DHF Melbourne)</a>
      <a href="#protocols" class="filter-btn">🧠 The 5 Protocols (IP)</a>
      <a href="#research" class="filter-btn">📄 Academic Research (8+ Papers)</a>
      <a href="#movements" class="filter-btn">🏟️ Aura Stadia &amp; Movements</a>
    </div>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- SECTION 1: BAYA E AI DIGITAL HEALTH HUB -->
  <section id="baya-ai" style="margin-bottom:6rem;">
    <div style="background:linear-gradient(135deg, rgba(15,34,48,0.95), #070d17); border:1px solid rgba(31,184,184,0.3); border-radius:24px; padding:3rem; box-shadow:0 20px 50px rgba(0,0,0,0.4);">
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:3rem; align-items:center;">
        <div>
          <span class="badge-pill badge-pink" style="margin-bottom:1rem;">🇦🇺 Selected for DHF Melbourne 2026 Accelerator</span>
          <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.4rem 0 1rem;">BAYA E Ai™ · <span style="color:var(--teal-lt);">Empathetic AI</span></h2>
          <p style="color:#cbd5e1; font-size:1.05rem; line-height:1.8; margin-bottom:1.2rem;">
            Primary creator and technical architect: <strong>Dr. Aninda Sidhana</strong>. BAYA E Ai bridges clinical psychiatric care with empathetic algorithms for real-time symptom tracking, trauma pattern recognition, and crisis intervention.
          </p>
          <p style="color:#94a3b8; font-size:0.95rem; line-height:1.7; margin-bottom:2rem;">
            Validated internationally in <strong>April 2026</strong> through selection in the <strong>Digital Health Future (DHF) Melbourne</strong> cohort for global hospital and enterprise scaling.
          </p>
          <a href="{{ route('home') }}#contact" class="btn-grad" style="padding:0.9rem 2rem;">Request Institutional Demo →</a>
        </div>

        <div style="background:rgba(7,13,23,0.85); border:1px solid rgba(255,255,255,0.08); border-radius:18px; padding:2rem;">
          <h3 style="color:#fff; font-size:1.2rem; margin:0 0 1rem; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:0.8rem;">Clinical AI Capabilities</h3>
          <div style="display:flex; flex-direction:column; gap:1rem;">
            <div style="background:rgba(255,255,255,0.03); padding:0.9rem 1rem; border-radius:10px; border-left:3px solid var(--teal-lt);">
              <strong style="color:#fff; font-size:0.95rem;">Neuroendocrine Luteal Sync</strong>
              <p style="color:#94a3b8; font-size:0.85rem; margin:0.2rem 0 0;">Automatic predictive alerts for PMDD vulnerability windows.</p>
            </div>
            <div style="background:rgba(255,255,255,0.03); padding:0.9rem 1rem; border-radius:10px; border-left:3px solid var(--pink-lt);">
              <strong style="color:#fff; font-size:0.95rem;">Trauma Pattern Matrix</strong>
              <p style="color:#94a3b8; font-size:0.85rem; margin:0.2rem 0 0;">Identifies coercive control, gaslighting, and toxic presenteeism.</p>
            </div>
            <div style="background:rgba(255,255,255,0.03); padding:0.9rem 1rem; border-radius:10px; border-left:3px solid #a78bfa;">
              <strong style="color:#fff; font-size:0.95rem;">90-Second De-escalation</strong>
              <p style="color:#94a3b8; font-size:0.85rem; margin:0.2rem 0 0;">Immediate somatic grounding routines to interrupt nervous panic loops.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: THE 5 PROPRIETARY CLINICAL PROTOCOLS -->
  <section id="protocols" style="margin-bottom:6rem;">
    <div style="text-align:center; max-width:750px; margin:0 auto 3rem;">
      <p class="tag" style="color:var(--teal-lt);">Proprietary IP · Version 1.0</p>
      <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.3rem 0 0.8rem;">The Sidhana Pattojoshi <em>Protocols™</em></h2>
      <p style="color:#94a3b8; font-size:1.05rem; line-height:1.7;">
        Five copyrighted clinical architectures co-authored by Dr. Aninda Sidhana &amp; Dr. Amrit Pattojoshi available for institutional licensing.
      </p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
      @foreach($protocols as $proto)
      <div class="executive-card">
        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.8rem;">
          <span style="font-size:2.2rem;">{{ $proto->icon }}</span>
          <span class="badge-pill badge-teal" style="font-size:0.75rem;">{{ $proto->protocol_number }}</span>
        </div>
        <span style="color:var(--teal-lt); font-size:0.8rem; font-weight:600; text-transform:uppercase;">{{ $proto->category }}</span>
        <h3 style="font-family:var(--display); font-size:1.4rem; color:#fff; margin:0.3rem 0 0.8rem;">{{ $proto->title }}</h3>
        <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">{{ $proto->summary }}</p>
        
        @if(!empty($proto->pillars) && is_array($proto->pillars))
          <div style="background:rgba(7,13,23,0.6); padding:1rem; border-radius:10px; margin-bottom:1rem; border:1px solid rgba(255,255,255,0.06);">
            <strong style="color:var(--pink-lt); font-size:0.8rem; display:block; margin-bottom:0.4rem; text-transform:uppercase;">Core Pillars:</strong>
            <ul style="margin:0; padding-left:1.2rem; color:#94a3b8; font-size:0.82rem; line-height:1.5;">
              @foreach($proto->pillars as $pil)
                <li>{{ $pil['title'] }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <a href="mailto:{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}?subject=Protocol%20Licensing%20Inquiry:%20{{ urlencode($proto->title) }}" style="color:var(--teal-lt); font-size:0.85rem; font-weight:600; text-decoration:none;">Inquire for Institutional Licensing →</a>
      </div>
      @endforeach
    </div>
  </section>

  <!-- SECTION 3: ACADEMIC RESEARCH REPOSITORY -->
  <section id="research" style="margin-bottom:6rem;">
    <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:1.5rem; margin-bottom:2.5rem;">
      <div>
        <p class="tag" style="color:var(--teal-lt);">Peer-Reviewed Science</p>
        <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.3rem 0 0;">Academic <em>Research Publications</em></h2>
      </div>

      <!-- Live Search Box -->
      <div style="width:100%; max-width:380px;">
        <input type="text" id="innovationsSearchInput" placeholder="🔍 Instant search papers..." oninput="handlePaperSearch()" style="width:100%; background:#0e1726; border:1px solid rgba(255,255,255,0.12); border-radius:100px; padding:0.75rem 1.25rem; color:#fff; box-sizing:border-box;">
      </div>
    </div>

    <!-- Category Filter Pills -->
    <div style="display:flex; gap:0.5rem; flex-wrap:wrap; margin-bottom:2rem;" id="researchFilterPills">
      <button class="filter-btn active" onclick="filterResearchCat('all', this)">All Papers ({{ $researchPapers->count() }})</button>
      @foreach($researchCategories as $cat)
        <button class="filter-btn" onclick="filterResearchCat('{{ $cat }}', this)">{{ $cat }}</button>
      @endforeach
    </div>

    <!-- Papers Grid -->
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;" id="innovationsPapersGrid">
      @foreach($researchPapers as $paper)
      <div class="executive-card innovation-paper-item" data-category="{{ $paper->category }}" data-title="{{ strtolower($paper->title) }}" data-journal="{{ strtolower($paper->journal) }}" data-desc="{{ strtolower($paper->description) }}">
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">{{ $paper->category }}</span>
        <h3 style="font-family:var(--display); font-size:1.35rem; color:#fff; margin:0.3rem 0 0.6rem;">{{ $paper->title }}</h3>
        <p style="color:var(--pink-lt); font-size:0.85rem; font-weight:500; margin-bottom:0.8rem;">Authors: {{ $paper->authors }}</p>
        <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">{{ $paper->description }}</p>
        <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:0.8rem; display:flex; justify-content:space-between; align-items:center;">
          <span style="color:#94a3b8; font-size:0.8rem;">{{ $paper->journal }} ({{ $paper->year }})</span>
          @if($paper->url)
            <a href="{{ $paper->url }}" target="_blank" rel="noopener" style="color:var(--teal-lt); font-size:0.85rem; font-weight:600; text-decoration:none;">View Paper ↗</a>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- SECTION 4: MOVEMENTS, FIFA & CINEMA -->
  <section id="movements">
    <div style="text-align:center; max-width:750px; margin:0 auto 3rem;">
      <p class="tag" style="color:var(--teal-lt);">Mass Crowd Psychology &amp; Cinema</p>
      <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.3rem 0 0.8rem;">Global Movements &amp; <em>Public Safety</em></h2>
      <p style="color:#94a3b8; font-size:1.05rem; line-height:1.7;">
        Architecting sports venue psychosocial protocols, maternal health cinema campaigns, and suicide prevention toolkits.
      </p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
      @foreach($initiatives as $init)
      <div class="executive-card">
        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.8rem;">
          <span class="badge-pill badge-pink">{{ $init->badge ?? 'Initiative' }}</span>
          <span style="font-size:1.8rem;">
            @if(str_contains($init->title, 'FIFA') || str_contains($init->title, 'Stadia')) 🏟️
            @elseif(str_contains($init->title, 'Unburdening')) 🎬
            @elseif(str_contains($init->title, 'Suicide')) 🛡️
            @else 🏛️
            @endif
          </span>
        </div>
        <h3 style="font-family:var(--display); font-size:1.4rem; color:#fff; margin:0.3rem 0 0.6rem;">{{ $init->title }}</h3>
        @if($init->tagline)<p style="color:var(--teal-lt); font-size:0.88rem; font-weight:600; margin-bottom:0.8rem;">{{ $init->tagline }}</p>@endif
        <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6;">{{ $init->description }}</p>
      </div>
      @endforeach
    </div>
  </section>

</main>

@endsection

@push('scripts')
<script>
  let activeResearchCat = 'all';

  function filterResearchCat(cat, btn) {
    activeResearchCat = cat;
    document.querySelectorAll('#researchFilterPills .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    filterPapers();
  }

  function handlePaperSearch() {
    filterPapers();
  }

  function filterPapers() {
    const query = document.getElementById('innovationsSearchInput').value.toLowerCase().trim();
    document.querySelectorAll('.innovation-paper-item').forEach(item => {
      const itemCat = item.getAttribute('data-category');
      const title = item.getAttribute('data-title') || '';
      const journal = item.getAttribute('data-journal') || '';
      const desc = item.getAttribute('data-desc') || '';

      const matchCat = (activeResearchCat === 'all' || itemCat === activeResearchCat);
      const matchQuery = (!query || title.includes(query) || journal.includes(query) || desc.includes(query));

      item.style.display = (matchCat && matchQuery) ? 'block' : 'none';
    });
  }
</script>
@endpush
