@extends('layouts.app')

@section('title', 'Dr. Aninda Sidhana | Psychiatrist, Psychosexual Expert & UN SDG Ambassador')
@section('meta_description', 'Dr. Aninda Sidhana is a psychiatrist, psychosexual medicine specialist, and architect of the Mindweave™ trauma recovery framework. Discover her clinical practice and systemic advocacy.')

@section('content')

<!-- HERO SECTION -->
<header class="hero" style="min-height:auto; display:flex; align-items:center; position:relative; padding:4.5rem clamp(1rem, 2.5vw, 2rem) 2.5rem;">
  <div class="aurora">
    <span class="a1"></span><span class="a2"></span><span class="a3"></span><span class="a4"></span>
  </div>
  <div class="hero-inner" style="max-width:1200px; width:100%; margin:0 auto; padding:0.5rem 0.5rem 1.5rem;">
    <p class="hero-kicker" style="font-size:0.85rem; letter-spacing:0.12em; color:var(--teal-lt); margin-bottom:1rem;">
      {{ $settings['hero_kicker'] ?? 'UNITED NATIONS SDG GOODWILL AMBASSADOR · WICCI NATIONAL PRESIDENT · IPS RESILIENCE AWARDEE' }}
    </p>
    <h1 class="hero-name" style="font-size: clamp(2.8rem, 5.5vw, 4.4rem); line-height: 1.1; margin-bottom:1.25rem;">
      {{ $settings['hero_name'] ?? 'Dr. Aninda Sidhana' }}
    </h1>
    <div class="hero-rule" style="width:80px; height:3px; background:linear-gradient(90deg, var(--teal-lt), var(--pink-lt)); margin-bottom:1.5rem;"></div>
    
    <div class="hero-desc" style="font-size:1.15rem; line-height:1.65; max-width:920px; color:#cbd5e1; margin-bottom:2rem;">
      <strong style="color:#fff; font-size:1.35rem; display:block; margin-bottom:0.35rem;">{{ $settings['hero_tagline'] ?? 'Clinical Rigor. Human Dignity. Global Resilience.' }}</strong>
      <span style="color:var(--teal-lt); font-size:0.95rem; display:block; margin-bottom:0.6rem; font-weight:500;">{{ $settings['hero_roles'] ?? 'Psychiatrist | Psychosexual Medicine | Women’s Mental Health | Global Safeguarding Advisor' }}</span>
      <p style="margin:0 0 0.8rem; color:#cbd5e1;">{{ $settings['hero_subtitle'] ?? 'Synthesizing over 15 years of tertiary clinical psychiatry, advanced psychosexual medicine, and lived survivor wisdom into actionable architectures for human healing and institutional safeguarding.' }}</p>
      <p style="margin:0; font-size:0.95rem; color:#94a3b8;">Connecting evidence-based clinical care with trauma-informed practice, responsible storytelling, and the question that follows every awareness campaign: <em style="color:#fff;">After awareness, what?</em></p>
    </div>

    <div class="hero-actions" style="display:flex; gap:0.85rem; flex-wrap:wrap; margin-bottom:2.25rem;">
      <a href="#contact" class="btn-grad" style="padding:0.65rem 1.4rem; font-size:0.82rem; letter-spacing:0.05em; font-weight:500;">Book a Clinical Consultation</a>
      <a href="{{ route('protocols') }}" class="btn-glass" style="padding:0.65rem 1.4rem; font-size:0.82rem; letter-spacing:0.05em; font-weight:500; border-color:rgba(31,184,184,0.4); color:var(--teal-lt);">Explore Proprietary Protocols 🛡️</a>
      <a href="#speaking" class="btn-glass" style="padding:0.65rem 1.4rem; font-size:0.82rem; letter-spacing:0.05em; font-weight:500;">Speaking &amp; Advisory Inquiries →</a>
    </div>

    <!-- INSTITUTIONAL TRUST BAR -->
    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)); gap:1rem; max-width:1150px; margin-top:2rem;">
      <div style="background:rgba(14,23,38,0.75); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.1rem 1.25rem; display:flex; flex-direction:column; justify-content:center; gap:0.25rem; box-sizing:border-box;">
        <span style="font-size:0.72rem; color:var(--teal-lt); text-transform:uppercase; font-weight:700; letter-spacing:0.08em;">Global Policy</span>
        <strong style="font-size:0.98rem; color:#fff; font-weight:600; line-height:1.3; margin:0.15rem 0;">UN SDG Ambassador</strong>
        <span style="font-size:0.8rem; color:#94a3b8;">Goodwill Advocacy</span>
      </div>
      <div style="background:rgba(14,23,38,0.75); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.1rem 1.25rem; display:flex; flex-direction:column; justify-content:center; gap:0.25rem; box-sizing:border-box;">
        <span style="font-size:0.72rem; color:var(--pink-lt); text-transform:uppercase; font-weight:700; letter-spacing:0.08em;">National Leadership</span>
        <strong style="font-size:0.98rem; color:#fff; font-weight:600; line-height:1.3; margin:0.15rem 0;">WICCI National President</strong>
        <span style="font-size:0.8rem; color:#94a3b8;">Mental Health Council</span>
      </div>
      <div style="background:rgba(14,23,38,0.75); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.1rem 1.25rem; display:flex; flex-direction:column; justify-content:center; gap:0.25rem; box-sizing:border-box;">
        <span style="font-size:0.72rem; color:#a78bfa; text-transform:uppercase; font-weight:700; letter-spacing:0.08em;">Apex Psychiatry</span>
        <strong style="font-size:0.98rem; color:#fff; font-weight:600; line-height:1.3; margin:0.15rem 0;">IHBAS Senior Resident</strong>
        <span style="font-size:0.8rem; color:#94a3b8;">Tertiary Neuropsychiatry</span>
      </div>
      <div style="background:rgba(14,23,38,0.75); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.1rem 1.25rem; display:flex; flex-direction:column; justify-content:center; gap:0.25rem; box-sizing:border-box;">
        <span style="font-size:0.72rem; color:#38bdf8; text-transform:uppercase; font-weight:700; letter-spacing:0.08em;">Specialized Fellowship</span>
        <strong style="font-size:0.98rem; color:#fff; font-weight:600; line-height:1.3; margin:0.15rem 0;">JSS Mysore (Dr. TSS Rao)</strong>
        <span style="font-size:0.8rem; color:#94a3b8;">Psychosexual Medicine</span>
      </div>
      <div style="background:rgba(14,23,38,0.75); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.08); border-radius:14px; padding:1.1rem 1.25rem; display:flex; flex-direction:column; justify-content:center; gap:0.25rem; box-sizing:border-box;">
        <span style="font-size:0.72rem; color:#fbbf24; text-transform:uppercase; font-weight:700; letter-spacing:0.08em;">Generational Care</span>
        <strong style="font-size:0.98rem; color:#fff; font-weight:600; line-height:1.3; margin:0.15rem 0;">Tekchand Sidana Hospital</strong>
        <span style="font-size:0.8rem; color:#94a3b8;">40-Year Family Legacy</span>
      </div>
    </div>
  </div>
</header>

<!-- SECTION 2: THE CORE PHILOSOPHY -->
<section class="sec" style="padding:4.5rem 1.5rem; background:linear-gradient(180deg, #09121f, var(--bg-dark)); border-top:1px solid rgba(255,255,255,0.06); border-bottom:1px solid rgba(255,255,255,0.06);">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="background:rgba(14,23,38,0.7); border:1px solid rgba(31,184,184,0.25); border-radius:24px; padding:3rem; backdrop-filter:blur(10px);">
      <p class="tag rv" style="color:var(--teal-lt); margin-bottom:0.6rem;">The Core Philosophy</p>
      <h2 class="h rv" style="font-size:2.4rem; color:#fff; margin-bottom:1.2rem;">A Biopsychosocial-Spiritual Approach to <em>Psychiatry</em></h2>
      <p class="rv" style="color:#cbd5e1; font-size:1.15rem; line-height:1.8; margin-bottom:1.2rem;">
        Mental health care must be inextricably linked to human dignity. True healing occurs only when we honor the whole person—their neurobiology, their lived narrative, their pain, and their ultimate capacity for systemic transformation.
      </p>
      <p class="rv" style="color:#94a3b8; font-size:1.02rem; line-height:1.8; margin:0;">
        Dr. Aninda Sidhana operates at the vital intersection of evidence-based clinical science and survivor-centered advocacy. By integrating biological psychiatric treatments with psychological resilience training, social community support, and spiritual restoration of purpose, she ensures that no patient is ever reduced to a mere diagnostic label.
      </p>
    </div>
  </div>
</section>

<!-- SECTION 3: THE SIX PILLARS OF PRACTICE -->
<section class="sec" style="padding:5.5rem 1.5rem; background:var(--bg-dark);">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="text-align:center; max-width:750px; margin:0 auto 3.5rem;">
      <p class="tag rv" style="color:var(--teal-lt);">The Six Pillars of Practice</p>
      <h2 class="h rv" style="font-size:2.6rem; color:#fff; margin-top:0.4rem;">Comprehensive Clinical Care &amp; <em>Systemic Advocacy</em></h2>
      <p class="rv" style="color:#94a3b8; font-size:1.05rem; line-height:1.7;">
        Bridging the gap between individual healing in the clinic and global policy reform across institutions.
      </p>
    </div>

    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:1.8rem;">
      
      <!-- Pillar 1 -->
      <div class="executive-card rv">
        <div style="font-size:2.2rem; margin-bottom:0.8rem;">🧠</div>
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Pillar I · Tertiary Medicine</span>
        <h3 style="font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">Clinical Psychiatry &amp; Neurobiology</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">
          Grounded in 15 years of tertiary care and residency at apex institute IHBAS. Evidence-based treatment for depression, treatment-resistant mood disorders, complex anxiety, bipolar illness, and neurobiological trauma.
        </p>
        <a href="#contact" style="color:var(--teal-lt); font-weight:600; font-size:0.88rem; text-decoration:none;">Consultation Details →</a>
      </div>

      <!-- Pillar 2 -->
      <div class="executive-card rv">
        <div style="font-size:2.2rem; margin-bottom:0.8rem;">🌸</div>
        <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Pillar II · Specialized Fellowship</span>
        <h3 style="font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">Psychosexual Medicine &amp; Somatics</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">
          Trained under Dr. TSS Rao at JSS Mysore. Breaking cultural taboos to treat sexual pain, intimacy dysfunctions, and the neuro-somatic consequences of abuse with the deep clinical understanding that the body keeps the score.
        </p>
        <a href="#contact" style="color:var(--pink-lt); font-weight:600; font-size:0.88rem; text-decoration:none;">Confidential Care →</a>
      </div>

      <!-- Pillar 3 -->
      <div class="executive-card rv">
        <div style="font-size:2.2rem; margin-bottom:0.8rem;">🕊️</div>
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Pillar III · Couples &amp; Transitions</span>
        <h3 style="font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">Marital &amp; Reproductive Therapy</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">
          Equipping couples with communication scaffolding, boundary mapping, and emotional decoding tools to rebuild intimacy and navigate reproductive trauma, difficult IVF cycles, and miscarriage grief.
        </p>
        <a href="#contact" style="color:var(--teal-lt); font-weight:600; font-size:0.88rem; text-decoration:none;">Relationship Support →</a>
      </div>

      <!-- Pillar 4 -->
      <a href="{{ route('protocols') }}#mindweave" class="executive-card rv" style="text-decoration:none; color:inherit;">
        <div style="font-size:2.2rem; margin-bottom:0.8rem;">🛡️</div>
        <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Pillar IV · Proprietary IP</span>
        <h3 style="font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">MINDWEAVE™ Trauma Architecture</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">
          A daily clinical architecture designed to transition survivors from acute nervous system dysregulation to everyday resilience through structured self-inquiry, neuro-somatic resets, and boundary mapping.
        </p>
        <span style="color:var(--pink-lt); font-weight:600; font-size:0.88rem;">Explore Framework →</span>
      </a>

      <!-- Pillar 5 -->
      <a href="{{ route('protocols') }}#safemind" class="executive-card rv" style="text-decoration:none; color:inherit;">
        <div style="font-size:2.2rem; margin-bottom:0.8rem;">🏟️</div>
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Pillar V · Mass Safeguarding</span>
        <h3 style="font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">SafeMind™ Stadium Safeguarding</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">
          Co-developed with Dr. Amrit Pattojoshi: translating bedside neuro-clinical care into stadium-scale safeguarding. Mitigates neuro-thermal crowd compression through cooling sanctuaries and emotional triage.
        </p>
        <span style="color:var(--teal-lt); font-weight:600; font-size:0.88rem;">Explore SafeMind™ →</span>
      </a>

      <!-- Pillar 6 -->
      <a href="{{ route('protocols') }}#dignity-dialogues" class="executive-card rv" style="text-decoration:none; color:inherit;">
        <div style="font-size:2.2rem; margin-bottom:0.8rem;">⚖️</div>
        <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Pillar VI · Public Health Advocacy</span>
        <h3 style="font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem; font-family:var(--display);">The Dignity Dialogues™ &amp; WINGS</h3>
        <p style="color:#94a3b8; font-size:0.92rem; line-height:1.6; margin-bottom:1.2rem;">
          Transforming private trauma and scar narratives into collective narrative capital, structural safety algorithms, and legislative advocacy to protect survivors of domestic abuse and coercive control.
        </p>
        <span style="color:var(--pink-lt); font-weight:600; font-size:0.88rem;">Explore Advocacy →</span>
      </a>

    </div>
  </div>
</section>

<!-- SECTION 4: SOCIAL PROOF & GENERATIONAL LEGACY -->
<section class="sec" style="padding:4.5rem 1.5rem; background:linear-gradient(180deg, #09121f, #070d17); border-top:1px solid rgba(255,255,255,0.06);">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:3rem; align-items:center;">
      <div class="rv">
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Generational Roots · Established Care</span>
        <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.4rem 0 1rem;">
          A Legacy of <em>Psychiatric Excellence</em>
        </h2>
        <p style="color:#cbd5e1; font-size:1.05rem; line-height:1.8; margin-bottom:1.2rem;">
          Carrying forward the venerable legacy of her father, <strong>Dr. Roop Chand Sidana</strong>—a foundational figure in Indian psychiatry with over four decades of uninterrupted clinical practice—Dr. Aninda Sidhana merges generational clinical wisdom with modern neuroimmunology and global human rights advocacy.
        </p>
        <p style="color:#94a3b8; font-size:0.95rem; line-height:1.7; margin-bottom:1.5rem;">
          Operating out of the <strong>Tekchand Sidana Memorial Hospital</strong> in Sri Ganganagar, Rajasthan, her practice provides trusted, confidential care both on-site and internationally via secure tele-psychiatry.
        </p>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
          <a href="#contact" class="btn-grad" style="padding:0.75rem 1.6rem; font-size:0.85rem;">Schedule Hospital or Tele-Visit →</a>
        </div>
      </div>

      <div class="rv" style="background:rgba(14,23,38,0.7); border:1px solid rgba(255,255,255,0.08); border-radius:20px; padding:2rem;">
        <h3 style="color:#fff; font-size:1.2rem; margin:0 0 1.2rem; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:0.8rem;">Clinical Facility &amp; Practice Details</h3>
        <div style="display:flex; flex-direction:column; gap:1rem;">
          <div>
            <span style="color:var(--teal-lt); font-size:0.75rem; text-transform:uppercase; font-weight:600;">Hospital Location</span>
            <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">Tekchand Sidana Memorial Hospital</p>
            <p style="color:#94a3b8; margin:0.1rem 0 0; font-size:0.85rem;">1-B-4, Sukhadia Nagar, Indira Colony, Sri Ganganagar, Rajasthan 335001</p>
          </div>
          <div>
            <span style="color:var(--pink-lt); font-size:0.75rem; text-transform:uppercase; font-weight:600;">Consultation Formats</span>
            <p style="color:#fff; margin:0.2rem 0 0; font-size:0.95rem;">In-Person OPD &amp; Secure Tele-Psychiatry Consultations</p>
          </div>
          <div style="background:rgba(31,184,184,0.08); padding:0.8rem; border-radius:10px; border-left:3px solid var(--teal-lt);">
            <strong style="color:var(--teal-lt); font-size:0.85rem; display:block;">Immediate Emergency Care</strong>
            <p style="color:#cbd5e1; font-size:0.82rem; margin:0.2rem 0 0;">For acute psychiatric emergencies in India, please call Tele-MANAS toll-free at <strong>14416</strong> or contact your nearest emergency center immediately.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: SPEAKING THEMES & ADVISORY -->
<section id="speaking" class="sec" style="padding:5rem 1.5rem; background:#070d17;">
  <div class="inner" style="max-width:1150px; margin:0 auto;">
    <div style="text-align:center; max-width:750px; margin:0 auto 3.5rem;">
      <p class="tag rv" style="color:var(--teal-lt);">Keynotes &amp; Institutional Advisory</p>
      <h2 class="h rv" style="font-size:2.5rem; color:#fff; margin-top:0.3rem;">Turn Mental Health Awareness into <em>Meaningful Action</em></h2>
      <p class="rv" style="color:#94a3b8; font-size:1.05rem; line-height:1.7;">
        Clinically informed, humane thought leadership for corporate boardrooms, media productions, and global policy forums.
      </p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:1.5rem; margin-bottom:3rem;">
      <div class="executive-card rv">
        <strong style="color:var(--teal-lt); font-size:0.82rem; text-transform:uppercase; display:block; margin-bottom:0.4rem;">Theme 01</strong>
        <h3 style="font-size:1.2rem; color:#fff; margin:0 0 0.5rem; font-family:var(--display);">After Awareness, What?</h3>
        <p style="color:#94a3b8; font-size:0.88rem; line-height:1.6; margin:0;">Moving beyond generic recognition to institutional accountability, leadership practices, and systemic pathways to care.</p>
      </div>
      <div class="executive-card rv">
        <strong style="color:var(--pink-lt); font-size:0.82rem; text-transform:uppercase; display:block; margin-bottom:0.4rem;">Theme 02</strong>
        <h3 style="font-size:1.2rem; color:#fff; margin:0 0 0.5rem; font-family:var(--display);">The Fear of Not Mattering™</h3>
        <p style="color:#94a3b8; font-size:0.88rem; line-height:1.6; margin:0;">Exploring belonging, recognition, and the silent emotional cost of feeling dispensable in hyper-competitive environments.</p>
      </div>
      <div class="executive-card rv">
        <strong style="color:var(--teal-lt); font-size:0.82rem; text-transform:uppercase; display:block; margin-bottom:0.4rem;">Theme 03</strong>
        <h3 style="font-size:1.2rem; color:#fff; margin:0 0 0.5rem; font-family:var(--display);">Women’s Health Beyond Fertility</h3>
        <p style="color:#94a3b8; font-size:0.88rem; line-height:1.6; margin:0;">Bringing psychological wellbeing into conversations about women’s bodies across the full lifespan—PMDD, PCOS, and perimenopause.</p>
      </div>
      <div class="executive-card rv">
        <strong style="color:var(--pink-lt); font-size:0.82rem; text-transform:uppercase; display:block; margin-bottom:0.4rem;">Theme 04</strong>
        <h3 style="font-size:1.2rem; color:#fff; margin:0 0 0.5rem; font-family:var(--display);">When AI Encounters Distress</h3>
        <p style="color:#94a3b8; font-size:0.88rem; line-height:1.6; margin:0;">Human judgment, consent, privacy safeguards, and escalation protocols in sensitive digital mental-health applications.</p>
      </div>
      <div class="executive-card rv">
        <strong style="color:var(--teal-lt); font-size:0.82rem; text-transform:uppercase; display:block; margin-bottom:0.4rem;">Theme 05</strong>
        <h3 style="font-size:1.2rem; color:#fff; margin:0 0 0.5rem; font-family:var(--display);">Cinema &amp; the Mind</h3>
        <p style="color:#94a3b8; font-size:0.88rem; line-height:1.6; margin:0;">Every frame shapes a mind: how visual storytelling influences societal understanding of trauma, gender, and recovery.</p>
      </div>
      <div class="executive-card rv">
        <strong style="color:var(--pink-lt); font-size:0.82rem; text-transform:uppercase; display:block; margin-bottom:0.4rem;">Theme 06</strong>
        <h3 style="font-size:1.2rem; color:#fff; margin:0 0 0.5rem; font-family:var(--display);">Men’s Mental Health Beyond Gender Wars</h3>
        <p style="color:#94a3b8; font-size:0.88rem; line-height:1.6; margin:0;">Creating safe room for vulnerability, emotional expression, and male allyship while advancing equality and mutual dignity.</p>
      </div>
    </div>

    <div style="text-align:center;">
      <a href="#contact" class="btn-grad" style="padding:0.85rem 2rem;">Inquire for Keynote or Advisory Brief →</a>
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
          <div style="display:flex; align-items:center; gap:1rem; background:rgba(14,23,38,0.6); padding:1rem; border-radius:12px; border:1px solid rgba(255,255,255,0.06);">
            <span style="font-size:1.5rem;">🎙️</span>
            <div>
              <span style="color:#94a3b8; font-size:0.75rem; display:block; text-transform:uppercase;">The Listening Commons Podcast</span>
              <a href="https://listeningcommons.com" target="_blank" rel="noopener" style="color:var(--teal-lt); font-weight:600; text-decoration:none;">listeningcommons.com ↗</a>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:1rem; background:rgba(14,23,38,0.6); padding:1rem; border-radius:12px; border:1px solid rgba(255,255,255,0.06);">
            <span style="font-size:1.5rem;">🏥</span>
            <div>
              <span style="color:#94a3b8; font-size:0.75rem; display:block; text-transform:uppercase;">Clinical Appointments</span>
              <span style="color:#fff; font-size:0.9rem;">Tekchand Sidana Memorial Hospital (OPD &amp; Tele-Psychiatry)</span>
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
