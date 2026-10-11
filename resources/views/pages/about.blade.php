@extends('layouts.app')

@section('title', 'About Dr. Aninda Sidhana | Psychiatrist & Architect of Healing Justice')
@section('meta_description', 'Learn about Dr. Aninda Sidhana’s rigorous medical background, fellowship in psychosexual medicine, leadership at WICCI, and journey of profound resilience.')

@section('content')

<!-- HERO SECTION WITH OFFICIAL PORTRAIT (main-img.jpeg) -->
<header style="background:radial-gradient(circle at 80% 20%, rgba(31,184,184,0.15), transparent 60%), radial-gradient(circle at 10% 90%, rgba(239,107,156,0.12), transparent 60%), var(--bg-dark); padding:6rem 1.5rem 4rem; border-bottom:1px solid var(--glass-border); position:relative;">
  <div style="max-width:1150px; margin:0 auto;">
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:3.5rem; align-items:center;">
      
      <!-- HERO CONTENT -->
      <div>
        <span class="badge-pill badge-teal" style="margin-bottom:1.2rem;">Architect of Healing Justice</span>
        <h1 style="font-family:var(--display); font-size:clamp(2.6rem, 5vw, 4rem); color:#fff; line-height:1.15; margin:0 0 1.2rem;">
          Dr. Aninda <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Sidhana</span>
        </h1>
        <p style="color:#cbd5e1; font-size:1.2rem; line-height:1.7; margin-bottom:1.2rem;">
          <strong>Bridging the critical gap between the psychiatric clinic, international public health policy, and the lived realities of trauma survivors.</strong>
        </p>
        <p style="color:#94a3b8; font-size:1.05rem; line-height:1.8; margin-bottom:2rem;">
          Synthesizing over 15 years of tertiary clinical psychiatry, advanced psychosexual medicine, and lived survivor wisdom into actionable architectures for human healing and institutional safeguarding.
        </p>

        <!-- SUBSECTION NAVIGATION TABS -->
        <div style="display:flex; gap:0.6rem; flex-wrap:wrap;">
          <a href="#bio" class="filter-btn">Clinical Foundations</a>
          <a href="#survivor" class="filter-btn">Architectural Resilience</a>
          <a href="#timeline" class="filter-btn">Milestones (2009–2026)</a>
          <a href="#legacy" class="filter-btn">Hospital Legacy</a>
          <a href="#awards" class="filter-btn">Awards &amp; Honors</a>
        </div>
      </div>

      <!-- OFFICIAL PORTRAIT CARD -->
      <div style="display:flex; justify-content:center; position:relative;">
        <div style="position:relative; width:100%; max-width:380px;">
          <!-- Ambient Glow Effect -->
          <div style="position:absolute; inset:-12px; background:linear-gradient(135deg, rgba(31,184,184,0.3), rgba(239,107,156,0.25)); border-radius:28px; filter:blur(20px); z-index:0;"></div>

          <div style="position:relative; z-index:1; background:rgba(14,23,38,0.85); border:1px solid rgba(255,255,255,0.12); border-radius:24px; padding:0.85rem; box-shadow:0 25px 60px rgba(0,0,0,0.5); backdrop-filter:blur(12px);">
            <div style="width:100%; height:440px; border-radius:18px; overflow:hidden; position:relative; background:#070d17;">
              <img src="{{ asset('assets/images/main-img.jpeg') }}" alt="Dr. Aninda Sidhana — Official Portrait" style="width:100%; height:100%; object-fit:cover; object-position:center top; transition:transform 0.4s ease;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
            </div>

            <div style="padding:1.2rem 0.8rem 0.5rem; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong style="color:#fff; font-size:1.1rem; display:block;">Dr. Aninda Sidhana</strong>
                <span style="color:var(--teal-lt); font-size:0.8rem; font-weight:500;">National President, WICCI Council</span>
              </div>
              <span class="badge-pill badge-pink" style="font-size:0.75rem;">MD · MBBS · Fellow</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- SECTION 1: CLINICAL & ACADEMIC FOUNDATIONS -->
  <section id="bio" style="margin-bottom:4rem;">
    <div class="executive-card" style="padding:3rem;">
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:3rem; align-items:flex-start;">
        <div>
          <span class="badge-pill badge-teal" style="margin-bottom:1rem;">Clinical Foundations</span>
          <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin:0.3rem 0 1.2rem;">Medical Rigor &amp; Specialized Expertise</h2>
          <p style="color:#cbd5e1; font-size:1.05rem; line-height:1.8; margin-bottom:1.2rem;">
            Dr. Aninda Sidhana, MD, is a psychiatrist and psychosexual medicine specialist whose career is defined by rigorous academic pursuit and compassionate clinical application. Her foundational medical training was established through an intensive residency at the <strong>Institute of Human Behaviour and Allied Sciences (IHBAS)</strong> in Delhi, widely regarded as India’s apex neuropsychiatric center.
          </p>
          <p style="color:#94a3b8; font-size:1rem; line-height:1.8; margin-bottom:1.2rem;">
            Recognizing the profound, often unspoken intersection of psychological trauma and sexual health, she subsequently completed a specialized <strong>Fellowship in Psychosexual Medicine at the JSS Academy of Higher Education and Research</strong> in Mysuru, training under the esteemed mentorship of Dr. TSS Rao.
          </p>
          <p style="color:#94a3b8; font-size:1rem; line-height:1.8;">
            A consulting specialist at the <strong>Tekchand Sidana Memorial Hospital</strong> in Sri Ganganagar, Rajasthan, Dr. Sidhana seamlessly integrates complex psychopharmacology, cognitive behavioral therapy, and somatic grounding techniques into her daily clinical practice. Her academic rigor is further demonstrated by her appointment as <strong>Assistant Editor for the Indian Journal of Psychological Medicine (IJPM)</strong>, where she contributes to the editorial integrity and advancement of psychiatric research.
          </p>
        </div>

        <div style="background:rgba(7,13,23,0.8); border:1px solid rgba(255,255,255,0.08); border-radius:18px; padding:2rem;">
          <h3 style="color:#fff; font-size:1.2rem; margin-top:0; margin-bottom:1.2rem; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:0.8rem;">Core Credentials Snapshot</h3>
          <div style="display:flex; flex-direction:column; gap:1rem;">
            <div>
              <span style="color:var(--teal-lt); font-size:0.8rem; text-transform:uppercase; font-weight:600;">Primary Medical Degree</span>
              <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">M.B.B.S. (2009) — D Y Patil Medical College</p>
            </div>
            <div>
              <span style="color:var(--teal-lt); font-size:0.8rem; text-transform:uppercase; font-weight:600;">Postgraduate Specialization</span>
              <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">M.D. Psychiatry (2010–2013) — MGMCRI</p>
            </div>
            <div>
              <span style="color:var(--teal-lt); font-size:0.8rem; text-transform:uppercase; font-weight:600;">Tertiary Senior Residency</span>
              <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">IHBAS Neuropsychiatry Referral Center, Delhi</p>
            </div>
            <div>
              <span style="color:var(--teal-lt); font-size:0.8rem; text-transform:uppercase; font-weight:600;">Subspecialty Fellowship</span>
              <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">Fellowship in Psychosexual Medicine — JSS Mysuru</p>
            </div>
            <div>
              <span style="color:var(--teal-lt); font-size:0.8rem; text-transform:uppercase; font-weight:600;">Editorial Integrity</span>
              <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">Assistant Editor — Indian Journal of Psychological Medicine (IJPM)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: THE LIVED EXPERIENCE TO SYSTEM BUILDER -->
  <section id="survivor" style="margin-bottom:5rem;">
    <div class="executive-card" style="padding:3rem; background:linear-gradient(135deg, rgba(14,23,38,0.9), #0b1523); border-color:rgba(239,107,156,0.3);">
      <span class="badge-pill badge-pink" style="margin-bottom:1rem;">Architectural Resilience</span>
      <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin:0.3rem 0 1.2rem;">From Survivor to System Builder</h2>
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:2.5rem;">
        <div>
          <p style="color:#cbd5e1; font-size:1.05rem; line-height:1.8; margin-bottom:1.2rem;">
            Dr. Sidhana’s clinical frameworks are deeply informed by her own profound personal resilience. Having navigated the harrowing realities of systemic domestic violence, coercive control, and the severe medical and emotional trauma associated with multiple IVF cycles and miscarriages, she intimately understands that standard textbook definitions of trauma often fail to capture the systemic isolation victims endure.
          </p>
          <p style="color:#94a3b8; font-size:1rem; line-height:1.8;">
            Through intensive therapy, relentless self-advocacy, and transformative solo travel—including a pivotal journey across Iceland that helped her reclaim her autonomy—she rebuilt her life and discovered a higher purpose.
          </p>
        </div>
        <div style="background:rgba(7,13,23,0.7); border:1px solid rgba(255,255,255,0.08); border-radius:16px; padding:2rem; display:flex; flex-direction:column; justify-content:center;">
          <p style="color:#fff; font-size:1.05rem; line-height:1.7; margin-bottom:1.2rem; font-style:italic;">
            "Transparency serves a critical public health function: breaking the pervasive silence that traps millions. Trauma can be transformed into structural, life-saving architecture for others."
          </p>
          <span style="color:var(--teal-lt); font-size:0.85rem; font-weight:600; text-transform:uppercase; letter-spacing:0.08em;">
            Recipient of the 2024 IPS Women Resilience Award &amp; UN Rex Karmaveer Chakra
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: CAREER TIMELINE (2009–2026) -->
  <section id="timeline" style="margin-bottom:5rem;">
    <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:1rem; margin-bottom:2.5rem;">
      <div>
        <p class="tag" style="color:var(--teal-lt);">Academic &amp; Clinical Chronology</p>
        <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.3rem 0 0;">Career Journey &amp; Milestones</h2>
      </div>

      <div style="display:flex; gap:0.5rem; flex-wrap:wrap;" id="timelineFilters">
        <button class="filter-btn active" onclick="filterTimeline('all', this)">All</button>
        <button class="filter-btn" onclick="filterTimeline('Education', this)">Education</button>
        <button class="filter-btn" onclick="filterTimeline('Academic', this)">Faculty</button>
        <button class="filter-btn" onclick="filterTimeline('Leadership', this)">Leadership</button>
        <button class="filter-btn" onclick="filterTimeline('Tech', this)">Tech</button>
      </div>
    </div>

    <div id="timelineGrid">
      @foreach($milestones as $m)
      <div class="timeline-node timeline-node-item" data-category="{{ $m->category }}">
        <div style="background:#0e1726; border:1px solid var(--glass-border); border-radius:16px; padding:1.8rem;">
          <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:0.5rem; margin-bottom:0.6rem;">
            <div>
              <span style="font-family:var(--display); font-size:1.15rem; font-weight:700; color:var(--teal-lt); background:rgba(31,184,184,0.15); padding:0.25rem 0.8rem; border-radius:100px; display:inline-block; margin-bottom:0.4rem;">{{ $m->period }}</span>
              <h3 style="font-size:1.4rem; color:#fff; margin:0.2rem 0;">{{ $m->title }}</h3>
              @if($m->organization)
                <p style="font-size:0.92rem; color:var(--pink-lt); font-weight:600; margin:0;">{{ $m->organization }} · <span style="color:#94a3b8; font-weight:400;">{{ $m->location }}</span></p>
              @endif
            </div>
            @if($m->badge)
              <span class="badge-pill badge-teal" style="font-size:0.75rem;">{{ $m->badge }}</span>
            @endif
          </div>
          <p style="color:#cbd5e1; font-size:0.95rem; line-height:1.7; margin-top:0.6rem;">{{ $m->description }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- SECTION 3: FAMILY HOSPITAL LEGACY -->
  <section id="legacy" style="margin-bottom:5rem;">
    <div class="executive-card" style="background:linear-gradient(135deg, rgba(15,34,48,0.9), #070d17); border-color:rgba(31,184,184,0.3);">
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2.5rem; align-items:center;">
        <div>
          <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">43+ Years Medical Lineage</span>
          <h2 style="font-family:var(--display); font-size:2rem; color:#fff; margin:0.4rem 0 1rem;">Tekchand Sidana Memorial Hospital</h2>
          <p style="color:#cbd5e1; font-size:1rem; line-height:1.7; margin-bottom:1rem;">
            Rooted in Sri Ganganagar, Rajasthan, Dr. Sidhana carries forward the legacy of <strong>Dr. Roop Chand Sidana</strong> — an apex figure whose 43 years in psychiatric medicine were recognized by the prestigious <strong>Dr. N.N. Wig Oration Award</strong>.
          </p>
          <p style="color:#94a3b8; font-size:0.95rem; line-height:1.7;">
            She works in close clinical alignment with <strong>Dr. Itee Sidana</strong>, who leads youth mental health initiatives within the WICCI national council.
          </p>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
          <div style="background:rgba(7,13,23,0.8); padding:1.2rem; border-radius:12px; border:1px solid rgba(255,255,255,0.06);">
            <b style="font-size:1.8rem; color:var(--teal-lt); display:block;">43+</b>
            <span style="font-size:0.85rem; color:#94a3b8;">Years Psychiatry Service</span>
          </div>
          <div style="background:rgba(7,13,23,0.8); padding:1.2rem; border-radius:12px; border:1px solid rgba(255,255,255,0.06);">
            <b style="font-size:1.8rem; color:var(--pink-lt); display:block;">Oration</b>
            <span style="font-size:0.85rem; color:#94a3b8;">Dr. N.N. Wig Award</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: COMPLETE AWARDS & RECOGNITIONS -->
  <section id="awards">
    <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:1rem; margin-bottom:2.5rem;">
      <div>
        <p class="tag" style="color:var(--teal-lt);">Peer &amp; Global Honors</p>
        <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.3rem 0 0;">Awards &amp; Institutional Distinctions</h2>
      </div>

      <div style="display:flex; gap:0.5rem; flex-wrap:wrap;" id="awardsFilterContainer">
        <button class="filter-btn active" onclick="filterAwardsClubbed('all', this)">All ({{ $awards->count() }})</button>
        <button class="filter-btn" onclick="filterAwardsClubbed('Global', this)">Global &amp; UN</button>
        <button class="filter-btn" onclick="filterAwardsClubbed('National', this)">National Medical</button>
        <button class="filter-btn" onclick="filterAwardsClubbed('Media', this)">Media &amp; Arts</button>
      </div>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:1.8rem;" id="awardsClubbedGrid">
      @foreach($awards as $aw)
      <div class="executive-card award-item-node" data-category="{{ $aw->category }}" style="{{ $aw->is_featured ? 'border-color:rgba(31,184,184,0.35); background:linear-gradient(135deg, rgba(15,34,48,0.9), #0b1523);' : '' }}">
        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:0.8rem;">
          <span style="font-size:2rem;">{{ $aw->icon ?? '🎖️' }}</span>
          @if($aw->badge)
            <span class="badge-pill badge-teal" style="font-size:0.75rem;">{{ $aw->badge }}</span>
          @endif
        </div>
        <span style="font-size:0.78rem; color:var(--teal-lt); font-weight:600; text-transform:uppercase;">{{ $aw->bestowing_organization }} · {{ $aw->year }}</span>
        <h3 style="font-family:var(--display); font-size:1.4rem; color:#fff; margin:0.3rem 0 0.6rem;">{{ $aw->title }}</h3>
        @if($aw->field_of_recognition)
          <p style="color:var(--pink-lt); font-size:0.85rem; font-weight:500; margin-bottom:0.6rem;">{{ $aw->field_of_recognition }}</p>
        @endif
        <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6;">{{ $aw->description }}</p>
      </div>
      @endforeach
    </div>
  </section>

  <!-- 4. DYNAMIC PHOTO GALLERY & EVENT MEMORIES -->
  @if(isset($galleryPhotos) && $galleryPhotos->isNotEmpty())
  <section id="gallery" style="margin-bottom:6rem;">
    <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:2.5rem; flex-wrap:wrap; gap:1.5rem;">
      <div>
        <span class="badge-pill badge-teal">Live Database Asset Gallery</span>
        <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.3rem 0 0;">Moments &amp; Event Memories</h2>
        <p style="color:#94a3b8; margin:0.3rem 0 0; font-size:1rem;">Award ceremonies, United Nations delegations, WICCI conventions, and clinical symposiums.</p>
      </div>
    </div>

    <!-- GALLERY GRID -->
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:1.8rem;">
      @foreach($galleryPhotos as $photo)
      <div class="executive-card" style="padding:0; overflow:hidden; display:flex; flex-direction:column; border-color:rgba(255,255,255,0.08);">
        <div style="height:230px; position:relative; overflow:hidden; background:#070d17;">
          <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->title }}" style="width:100%; height:100%; object-fit:cover; transition:transform 0.4s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
          <span class="badge-pill badge-teal" style="position:absolute; top:12px; left:12px; font-size:0.75rem; background:rgba(7,13,23,0.85); backdrop-filter:blur(8px);">
            {{ $photo->category }}
          </span>
          @if($photo->year)
          <span style="position:absolute; top:12px; right:12px; background:rgba(7,13,23,0.85); color:#cbd5e1; padding:0.2rem 0.6rem; border-radius:100px; font-size:0.75rem; border:1px solid rgba(255,255,255,0.1);">
            {{ $photo->year }}
          </span>
          @endif
        </div>
        <div style="padding:1.6rem; flex:1; display:flex; flex-direction:column; justify-content:space-between;">
          <div>
            <h3 style="font-family:var(--display); font-size:1.25rem; color:#fff; margin:0 0 0.4rem;">{{ $photo->title }}</h3>
            @if($photo->event_name)
              <p style="color:var(--pink-lt); font-size:0.85rem; font-weight:500; margin:0 0 0.6rem;">{{ $photo->event_name }}</p>
            @endif
            @if($photo->caption)
              <p style="color:#cbd5e1; font-size:0.9rem; line-height:1.5; margin:0;">{{ $photo->caption }}</p>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  @endif

  <!-- 5. TESTIMONIALS & COLLEAGUE PRAISE -->
  @if(isset($testimonials) && $testimonials->isNotEmpty())
  <section id="testimonials" style="margin-bottom:4rem;">
    <div style="text-align:center; max-width:700px; margin:0 auto 3rem;">
      <span class="badge-pill badge-pink">Peer &amp; Institutional Endorsements</span>
      <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.4rem 0 0.8rem;">Colleague &amp; Leadership Praise</h2>
      <p style="color:#94a3b8; font-size:1.05rem; line-height:1.6;">Reflections from senior psychiatric mentors, United Nations dignitaries, and healthcare collaborators.</p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
      @foreach($testimonials as $t)
      <div class="executive-card" style="display:flex; flex-direction:column; justify-content:space-between; background:linear-gradient(135deg, rgba(14,23,38,0.85), #070d17); border-color:rgba(31,184,184,0.2);">
        <div>
          <div style="font-size:2.2rem; color:var(--teal-lt); line-height:1; margin-bottom:0.8rem;">“</div>
          <p style="color:#e2e8f0; font-size:0.98rem; line-height:1.7; font-style:italic; margin-bottom:1.5rem;">
            {{ $t->quote }}
          </p>
        </div>
        <div style="display:flex; align-items:center; gap:0.9rem; border-top:1px solid rgba(255,255,255,0.08); padding-top:1.2rem;">
          <div style="width:42px; height:42px; border-radius:50%; background:linear-gradient(135deg, var(--teal), var(--pink)); display:flex; align-items:center; justify-content:center; font-weight:700; color:#fff; font-size:0.95rem; flex-shrink:0;">
            {{ $t->initials }}
          </div>
          <div>
            <h4 style="margin:0; font-size:1.05rem; color:#fff; font-weight:600;">{{ $t->author_name }}</h4>
            <p style="margin:0; font-size:0.8rem; color:#94a3b8; line-height:1.4;">{{ $t->author_role }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  @endif

</main>

@endsection

@push('scripts')
<script>
  function filterTimeline(cat, btn) {
    document.querySelectorAll('#timelineFilters .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.timeline-node-item').forEach(item => {
      const c = item.getAttribute('data-category');
      item.style.display = (cat === 'all' || c.includes(cat)) ? 'block' : 'none';
    });
  }

  function filterAwardsClubbed(cat, btn) {
    document.querySelectorAll('#awardsFilterContainer .filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.award-item-node').forEach(item => {
      const c = item.getAttribute('data-category');
      item.style.display = (cat === 'all' || c.includes(cat)) ? 'block' : 'none';
    });
  }
</script>
@endpush
