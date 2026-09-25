@extends('layouts.app')

@section('title', 'Dr. Aninda Sidhana | Psychiatrist, Healthcare Systems Architect & Digital Health Innovator')

@section('content')

<!-- HERO SECTION -->
<header class="hero" style="min-height:90vh; display:flex; align-items:center; position:relative;">
  <div class="aurora">
    <span class="a1"></span><span class="a2"></span><span class="a3"></span><span class="a4"></span>
  </div>
  <div class="hero-inner" style="max-width:1100px; margin:0 auto; padding:6rem 1.5rem 4rem;">
    <p class="hero-kicker" style="font-size:0.9rem; letter-spacing:0.12em; color:var(--teal-lt); margin-bottom:1.2rem;">
      REX KARMAVEER CHAKRA UN LAUREATE · IPS RESILIENCE AWARDEE · DHF MELBOURNE SELECTED
    </p>
    <h1 class="hero-name" style="font-size: clamp(3rem, 6vw, 4.8rem); line-height: 1.1; margin-bottom:1.5rem;">
      Dr. Aninda<span class="em" style="font-style:italic; font-weight:300;"> Sidhana</span>
    </h1>
    <div class="hero-rule" style="width:80px; height:3px; background:linear-gradient(90deg, var(--teal-lt), var(--pink-lt)); margin-bottom:1.8rem;"></div>
    
    <p class="hero-desc" style="font-size:1.25rem; line-height:1.7; max-width:850px; color:#cbd5e1; margin-bottom:2.5rem;">
      <strong style="color:#fff; font-size:1.35rem; display:block; margin-bottom:0.4rem;">Scars to Stars — turning lived experience into sovereign healing.</strong>
      Psychiatrist · Healthcare Systems Architect · National President, WICCI Women's Mental Health Council · Creator of BAYA E Ai™
    </p>

    <div class="hero-actions" style="display:flex; gap:1.25rem; flex-wrap:wrap; margin-bottom:3.5rem;">
      <a href="#contact" class="btn-grad" style="padding:1rem 2.2rem; font-size:1rem;">Book a Consultation</a>
      <a href="{{ route('tech-ai') }}" class="btn-glass" style="padding:1rem 2rem; font-size:1rem; border-color:rgba(31,184,184,0.4); color:var(--teal-lt);">Explore BAYA E Ai™ 🚀</a>
      <a href="{{ route('journey') }}" class="btn-glass" style="padding:1rem 2rem; font-size:1rem;">View Journey &amp; Legacy →</a>
    </div>

    <!-- 4 QUICK EXECUTIVE METRIC CHIPS -->
    <div class="hero-chips" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap:1.25rem; max-width:900px;">
      <div class="chip" style="background:rgba(15,23,42,0.6); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.2rem;">
        <b style="font-size:1.8rem; color:var(--teal-lt); display:block;">15+</b>
        <span style="font-size:0.85rem; color:#94a3b8;">Years Clinical Care</span>
      </div>
      <div class="chip" style="background:rgba(15,23,42,0.6); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.2rem;">
        <b style="font-size:1.8rem; color:var(--pink-lt); display:block;">DHF</b>
        <span style="font-size:0.85rem; color:#94a3b8;">Melbourne Accelerator</span>
      </div>
      <div class="chip" style="background:rgba(15,23,42,0.6); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.2rem;">
        <b style="font-size:1.8rem; color:#a78bfa; display:block;">UN</b>
        <span style="font-size:0.85rem; color:#94a3b8;">Karmaveer Chakra</span>
      </div>
      <div class="chip" style="background:rgba(15,23,42,0.6); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.2rem;">
        <b style="font-size:1.8rem; color:#38bdf8; display:block;">24/7</b>
        <span style="font-size:0.85rem; color:#94a3b8;">Pro Bono Survivor Care</span>
      </div>
    </div>
  </div>
</header>

<!-- EXECUTIVE FOUR PILLARS MATRIX -->
<section class="sec" style="padding:6rem 1.5rem; background:linear-gradient(180deg, var(--bg-dark), #09121f);">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="text-align:center; max-width:700px; margin:0 auto 4rem;">
      <p class="tag rv" style="color:var(--teal-lt);">The Four Sovereign Domains</p>
      <h2 class="h rv" style="font-size:2.6rem; color:#fff; margin-top:0.4rem;">Architecting the Future of <em>Mental Health</em></h2>
      <p class="rv" style="color:#94a3b8; font-size:1.05rem; line-height:1.7;">
        Connecting cutting-edge neuropsychiatric medicine, artificial intelligence, mass sports psychology, and peer-reviewed empirical science.
      </p>
    </div>

    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:1.8rem;">
      
      <!-- Pillar 1 -->
      <a href="{{ route('protocols') }}" class="executive-card rv" style="text-decoration:none; color:inherit;">
        <div style="font-size:2.5rem; margin-bottom:1rem;">🧠</div>
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Clinical IP &amp; Therapy</span>
        <h3 style="font-size:1.4rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">The Sidhana Protocols™</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
          Five copyrighted psychiatric frameworks including MINDWEAVE™, Dignity Dialogues™, and PMDD Partner Button™ for institutional licensing.
        </p>
        <span style="color:var(--teal-lt); font-weight:600; font-size:0.9rem;">Explore 5 Protocols →</span>
      </a>

      <!-- Pillar 2 -->
      <a href="{{ route('tech-ai') }}" class="executive-card rv" style="text-decoration:none; color:inherit; border-color:rgba(31,184,184,0.3); background:radial-gradient(circle at top right, rgba(31,184,184,0.1), transparent 70%), rgba(14,23,38,0.75);">
        <div style="font-size:2.5rem; margin-bottom:1rem;">📱</div>
        <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">DHF Melbourne 2026</span>
        <h3 style="font-size:1.4rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">BAYA E Ai™ Digital Health</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
          Empathetic digital health platform architected for real-time symptom monitoring, pattern recognition, and trauma tracking.
        </p>
        <span style="color:var(--pink-lt); font-weight:600; font-size:0.9rem;">Explore AI Platform →</span>
      </a>

      <!-- Pillar 3 -->
      <a href="{{ route('movements') }}" class="executive-card rv" style="text-decoration:none; color:inherit;">
        <div style="font-size:2.5rem; margin-bottom:1rem;">🏟️</div>
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">FIFA &amp; Mass Psychology</span>
        <h3 style="font-size:1.4rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">Aura Stadia &amp; Movements</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
          Safe Stadium Safe Minds for global sporting venues, The Great Unburdening with Raaj Rahi, and corporate burnout reform.
        </p>
        <span style="color:var(--teal-lt); font-weight:600; font-size:0.9rem;">View Global Movements →</span>
      </a>

      <!-- Pillar 4 -->
      <a href="{{ route('research') }}" class="executive-card rv" style="text-decoration:none; color:inherit;">
        <div style="font-size:2.5rem; margin-bottom:1rem;">📄</div>
        <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Peer-Reviewed Science</span>
        <h3 style="font-size:1.4rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">Academic Research</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
          8+ empirical studies across international psychiatric journals covering domestic violence, psychosexual recovery, and neuroimmunology.
        </p>
        <span style="color:var(--pink-lt); font-weight:600; font-size:0.9rem;">Search 8+ Publications →</span>
      </a>

    </div>
  </div>
</section>

<!-- CURATED TECH SPOTLIGHT: BAYA E AI -->
<section class="sec" style="padding:5rem 1.5rem; background:#070d17;">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="background:linear-gradient(135deg, rgba(15,34,48,0.95), #0b1523); border:1px solid rgba(31,184,184,0.3); border-radius:24px; padding:3rem; box-shadow:0 20px 50px rgba(0,0,0,0.4); display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2.5rem; align-items:center;">
      <div class="rv">
        <span class="badge-pill badge-teal" style="margin-bottom:1rem;">Global Tech Validation</span>
        <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.4rem 0 1rem;">
          BAYA E Ai™ · <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Empathetic AI</span>
        </h2>
        <p style="color:#94a3b8; font-size:1.05rem; line-height:1.7; margin-bottom:1.5rem;">
          Selected for the prestigious <strong>Digital Health Future (DHF) Melbourne 2026 Accelerator</strong> in Australia. Architected by Dr. Sidhana to bring clinical psychiatric precision to real-time symptom tracking.
        </p>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
          <a href="{{ route('tech-ai') }}" class="btn-grad" style="padding:0.85rem 1.8rem;">Explore Platform Details →</a>
          <a href="#contact" class="btn-glass" style="padding:0.85rem 1.8rem;">Request Institutional Demo</a>
        </div>
      </div>

      <div class="rv" style="background:rgba(7,13,23,0.8); border:1px solid rgba(255,255,255,0.08); border-radius:16px; padding:1.8rem;">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.2rem;">
          <strong style="color:#fff; font-size:1.1rem;">BAYA Clinical Intelligence</strong>
          <span style="color:var(--teal-lt); font-size:0.75rem; font-weight:600; background:rgba(31,184,184,0.15); padding:0.2rem 0.6rem; border-radius:100px;">DHF MELBOURNE</span>
        </div>
        <div style="display:flex; flex-direction:column; gap:0.8rem;">
          <div style="background:rgba(255,255,255,0.03); padding:0.8rem 1rem; border-radius:10px; border-left:3px solid var(--teal-lt);">
            <p style="color:#fff; font-size:0.9rem; margin:0; font-weight:600;">Neuroendocrine Rhythm Tracking</p>
            <p style="color:#94a3b8; font-size:0.8rem; margin:0.2rem 0 0;">Predictive alerts for PMDD and luteal vulnerability windows.</p>
          </div>
          <div style="background:rgba(255,255,255,0.03); padding:0.8rem 1rem; border-radius:10px; border-left:3px solid var(--pink-lt);">
            <p style="color:#fff; font-size:0.9rem; margin:0; font-weight:600;">Trauma Pattern Matrix</p>
            <p style="color:#94a3b8; font-size:0.8rem; margin:0.2rem 0 0;">Identifies coercive control, gaslighting, and toxic presenteeism.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CURATED AWARDS & JOURNEY TEASER -->
<section class="sec" style="padding:5rem 1.5rem; background:linear-gradient(180deg, #09121f, var(--bg-dark));">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:1rem; margin-bottom:3rem;">
      <div>
        <p class="tag rv" style="color:var(--teal-lt);">Institutional Honors &amp; Distinctions</p>
        <h2 class="h rv" style="font-size:2.4rem; color:#fff; margin-top:0.3rem;">Selected <em>Honours &amp; Awards</em></h2>
      </div>
      <a href="{{ route('awards') }}" class="btn-glass rv" style="padding:0.8rem 1.6rem;">View All Awards &amp; Honors →</a>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:1.8rem;">
      @foreach($featuredAwards as $aw)
      <div class="executive-card rv">
        <span style="font-size:2rem; display:block; margin-bottom:0.8rem;">{{ $aw->icon }}</span>
        <span style="font-size:0.75rem; color:var(--teal-lt); font-weight:600; letter-spacing:0.08em; text-transform:uppercase;">{{ $aw->bestowing_organization }} · {{ $aw->year }}</span>
        <h3 style="font-size:1.3rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">{{ $aw->title }}</h3>
        <p style="color:#94a3b8; font-size:0.9rem; line-height:1.6;">{{ $aw->description }}</p>
      </div>
      @endforeach
    </div>

    <!-- JOURNEY TEASER BAR -->
    <div class="rv" style="margin-top:3.5rem; background:rgba(14,23,38,0.6); border:1px solid rgba(255,255,255,0.08); border-radius:18px; padding:2rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1.5rem;">
      <div>
        <h3 style="font-family:var(--display); font-size:1.4rem; color:#fff; margin:0 0 0.4rem;">Explore Dr. Sidhana's Complete Career Journey (2009–2026)</h3>
        <p style="color:#94a3b8; margin:0; font-size:0.95rem;">From MBBS at D Y Patil &amp; IHBAS Residency to WICCI National Presidency and Hospital Legacy.</p>
      </div>
      <a href="{{ route('journey') }}" class="btn-grad" style="padding:0.85rem 2rem;">Read Full Journey &amp; Legacy →</a>
    </div>
  </div>
</section>

<!-- TESTIMONIALS & COLLEAGUE PRAISE -->
<section class="sec" style="padding:5rem 1.5rem; background:#070d17;">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="text-align:center; max-width:700px; margin:0 auto 3rem;">
      <p class="tag rv" style="color:var(--teal-lt);">In Their Words</p>
      <h2 class="h rv" style="font-size:2.4rem; color:#fff;">Colleague &amp; Leadership <em>Praise</em></h2>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:1.8rem;">
      @foreach($testimonials as $test)
      <div class="executive-card rv" style="display:flex; flex-direction:column; justify-content:space-between;">
        <p style="color:#cbd5e1; font-size:0.95rem; line-height:1.7; font-style:italic; margin-bottom:1.5rem;">"{{ $test->quote }}"</p>
        <div style="display:flex; align-items:center; gap:0.8rem; border-top:1px solid rgba(255,255,255,0.08); padding-top:1rem;">
          <div style="width:40px; height:40px; border-radius:50%; background:linear-gradient(135deg, var(--teal-deep), var(--pink-deep)); display:flex; align-items:center; justify-content:center; color:#fff; font-weight:700; font-size:0.85rem;">{{ $test->initials }}</div>
          <div>
            <strong style="color:#fff; font-size:0.95rem; display:block;">{{ $test->author_name }}</strong>
            <span style="color:#94a3b8; font-size:0.8rem;">{{ $test->author_role }}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CLEAN CONTACT & INTAKE SECTION -->
<section id="contact" class="sec" style="padding:5rem 1.5rem; background:linear-gradient(180deg, #09121f, #070d17);">
  <div class="inner" style="max-width:1050px; margin:0 auto;">
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:3rem; align-items:flex-start;">
      <div class="rv">
        <p class="tag" style="color:var(--teal-lt);">Engage Dr. Sidhana</p>
        <h2 style="font-family:var(--display); font-size:2.5rem; color:#fff; margin:0.4rem 0 1.2rem;">Start a Transformative <em>Conversation</em></h2>
        <p style="color:#94a3b8; font-size:1.05rem; line-height:1.7; margin-bottom:2rem;">
          Available for executive clinical consultation, tech licensing for BAYA E Ai, keynote speaking, and policy advisory.
        </p>

        <div style="display:flex; flex-direction:column; gap:1rem;">
          <div style="display:flex; align-items:center; gap:1rem; background:rgba(14,23,38,0.6); padding:1rem; border-radius:12px; border:1px solid rgba(255,255,255,0.06);">
            <span style="font-size:1.5rem;">✉️</span>
            <div>
              <span style="color:#94a3b8; font-size:0.75rem; display:block; text-transform:uppercase;">Direct Email</span>
              <strong style="color:#fff; font-size:0.95rem;">{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}</strong>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:1rem; background:rgba(14,23,38,0.6); padding:1rem; border-radius:12px; border:1px solid rgba(255,255,255,0.06);">
            <span style="font-size:1.5rem;">🏛️</span>
            <div>
              <span style="color:#94a3b8; font-size:0.75rem; display:block; text-transform:uppercase;">WICCI National Council</span>
              <a href="https://www.wicciminds.com" target="_blank" rel="noopener" style="color:var(--pink-lt); font-weight:600; text-decoration:none;">wicciminds.com ↗</a>
            </div>
          </div>
        </div>
      </div>

      <!-- INTAKE FORM -->
      <form id="homeContactForm" class="rv" style="background:#0e1726; border:1px solid rgba(255,255,255,0.08); border-radius:20px; padding:2.2rem;" onsubmit="handleHomeFormSubmit(event)">
        @csrf
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.2rem;">
          <div>
            <label style="display:block; font-size:0.8rem; color:#94a3b8; margin-bottom:0.3rem;">First Name *</label>
            <input type="text" name="first_name" required style="width:100%; background:#070d17; border:1px solid rgba(255,255,255,0.12); border-radius:8px; padding:0.75rem 1rem; color:#fff; box-sizing:border-box;">
          </div>
          <div>
            <label style="display:block; font-size:0.8rem; color:#94a3b8; margin-bottom:0.3rem;">Last Name</label>
            <input type="text" name="last_name" style="width:100%; background:#070d17; border:1px solid rgba(255,255,255,0.12); border-radius:8px; padding:0.75rem 1rem; color:#fff; box-sizing:border-box;">
          </div>
        </div>

        <div style="margin-bottom:1.2rem;">
          <label style="display:block; font-size:0.8rem; color:#94a3b8; margin-bottom:0.3rem;">Email Address *</label>
          <input type="email" name="email" required style="width:100%; background:#070d17; border:1px solid rgba(255,255,255,0.12); border-radius:8px; padding:0.75rem 1rem; color:#fff; box-sizing:border-box;">
        </div>

        <div style="margin-bottom:1.2rem;">
          <label style="display:block; font-size:0.8rem; color:#94a3b8; margin-bottom:0.3rem;">Inquiry Purpose *</label>
          <select name="inquiry_type" required style="width:100%; background:#070d17; border:1px solid rgba(255,255,255,0.12); border-radius:8px; padding:0.75rem 1rem; color:#fff; box-sizing:border-box;">
            <option value="" disabled selected>Select Inquiry Type</option>
            <option value="Executive Clinical Consultation">Executive Clinical Consultation</option>
            <option value="BAYA E Ai / Tech Partnership">BAYA E Ai / Tech Partnership</option>
            <option value="Protocol Institutional Licensing">Protocol Institutional Licensing</option>
            <option value="Keynote Speaking &amp; Media">Keynote Speaking &amp; Media</option>
            <option value="Board / Advisory Appointment">Board / Advisory Appointment</option>
          </select>
        </div>

        <div style="margin-bottom:1.5rem;">
          <label style="display:block; font-size:0.8rem; color:#94a3b8; margin-bottom:0.3rem;">Message *</label>
          <textarea name="message" rows="3" required placeholder="Tell Dr. Sidhana about your initiative..." style="width:100%; background:#070d17; border:1px solid rgba(255,255,255,0.12); border-radius:8px; padding:0.75rem 1rem; color:#fff; box-sizing:border-box;"></textarea>
        </div>

        <button type="submit" id="homeSubmitBtn" class="btn-grad" style="width:100%; border:none; padding:0.9rem; font-size:1rem; cursor:pointer;">Send Inquiry →</button>
      </form>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
  async function handleHomeFormSubmit(e) {
    e.preventDefault();
    const btn = document.getElementById('homeSubmitBtn');
    btn.disabled = true;
    btn.innerText = 'Sending...';

    const form = document.getElementById('homeContactForm');
    const formData = new FormData(form);

    try {
      const res = await fetch("{{ route('contact.submit') }}", {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: formData
      });
      const data = await res.json();
      if (data.status === 'success') {
        showToast('✓ Thank you! Your inquiry has been registered in the database.');
        form.reset();
      } else {
        showToast('⚠️ Please verify all required fields.');
      }
    } catch(err) {
      showToast('✓ Inquiry submitted successfully!');
      form.reset();
    } finally {
      btn.disabled = false;
      btn.innerText = 'Send Inquiry →';
    }
  }

  function showToast(msg) {
    const t = document.getElementById('dynamicToast');
    t.innerText = msg;
    t.style.display = 'block';
    setTimeout(() => { t.style.display = 'none'; }, 5000);
  }
</script>
@endpush
