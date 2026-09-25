@extends('layouts.app')

@section('title', 'BAYA E Ai™ | Empathetic Digital Health & DHF Melbourne Accelerator')
@section('meta_description', 'Discover BAYA E Ai™ — dedicated empathetic digital health platform architected by Dr. Aninda Sidhana. Selected for the Digital Health Future (DHF) Melbourne 2026 Accelerator.')

@section('content')

<!-- HEADER -->
<header style="background:radial-gradient(circle at 70% 30%, rgba(31,184,184,0.18), transparent 60%), radial-gradient(circle at 20% 80%, rgba(239,107,156,0.15), transparent 60%), var(--bg-dark); padding:6rem 1.5rem 4rem; text-align:center; border-bottom:1px solid var(--glass-border);">
  <div style="max-width:850px; margin:0 auto;">
    <span class="badge-pill badge-pink" style="margin-bottom:1rem;">🇦🇺 DHF Melbourne 2026 Accelerator Cohort</span>
    <h1 style="font-family:var(--display); font-size:clamp(2.5rem, 5vw, 4rem); color:#fff; margin:0.4rem 0 1rem;">
      BAYA E Ai™ · <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Empathetic Health AI</span>
    </h1>
    <p style="color:#94a3b8; font-size:1.15rem; line-height:1.7;">
      Bringing tertiary clinical psychiatric precision and compassionate algorithms to real-time symptom tracking and trauma recovery.
    </p>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- INTRO GRID -->
  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:3rem; align-items:center; margin-bottom:5rem;">
    <div>
      <span class="badge-pill badge-teal" style="margin-bottom:1rem;">The Clinical Vision</span>
      <h2 style="font-family:var(--display); font-size:2.4rem; color:#fff; margin:0.4rem 0 1.2rem;">Empathetic Artificial Intelligence in Public Health</h2>
      <p style="color:#cbd5e1; font-size:1.05rem; line-height:1.8; margin-bottom:1.5rem;">
        Dr. Aninda Sidhana is the primary creator and technical architect of <strong>BAYA E Ai</strong>. As a practicing psychiatrist who witnessed the limitations of traditional periodic clinic visits, she designed BAYA to bridge the critical daily gaps in patient emotional regulation.
      </p>
      <p style="color:#94a3b8; font-size:1rem; line-height:1.8;">
        In <strong>April 2026</strong>, BAYA E Ai achieved international recognition upon selection for the <strong>Digital Health Future (DHF) Melbourne</strong> program — an elite accelerator scaling transformative health technologies across the Asia-Pacific and global health ecosystems.
      </p>
    </div>

    <!-- TECH ARCHITECTURE CARD -->
    <div style="background:linear-gradient(135deg, rgba(14,23,38,0.9), #070d17); border:1px solid rgba(31,184,184,0.3); border-radius:24px; padding:2.5rem; box-shadow:0 20px 50px rgba(0,0,0,0.4);">
      <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:1rem;">
        <div>
          <h3 style="color:#fff; font-size:1.3rem; margin:0;">BAYA Engine Specifications</h3>
          <p style="color:var(--teal-lt); font-size:0.82rem; margin:0.2rem 0 0;">Architecture v2.6 · Clinical Validation</p>
        </div>
        <span style="font-size:1.8rem;">📱</span>
      </div>

      <div style="display:flex; flex-direction:column; gap:1.2rem;">
        <div style="background:rgba(255,255,255,0.03); padding:1rem 1.2rem; border-radius:12px; border-left:3px solid var(--teal-lt);">
          <strong style="color:#fff; font-size:0.95rem; display:block; margin-bottom:0.2rem;">1. Neuro-Somatic Luteal Sync</strong>
          <p style="color:#94a3b8; font-size:0.85rem; margin:0; line-height:1.5;">Automated detection of neuroendocrine drops with couples de-escalation protocols.</p>
        </div>
        <div style="background:rgba(255,255,255,0.03); padding:1rem 1.2rem; border-radius:12px; border-left:3px solid var(--pink-lt);">
          <strong style="color:#fff; font-size:0.95rem; display:block; margin-bottom:0.2rem;">2. Coercive Control &amp; Burnout Matrix</strong>
          <p style="color:#94a3b8; font-size:0.85rem; margin:0; line-height:1.5;">Algorithms mapping psychological manipulation, toxic workplace presenteeism, and domestic stress.</p>
        </div>
        <div style="background:rgba(255,255,255,0.03); padding:1rem 1.2rem; border-radius:12px; border-left:3px solid #a78bfa;">
          <strong style="color:#fff; font-size:0.95rem; display:block; margin-bottom:0.2rem;">3. Real-Time Crisis De-escalation</strong>
          <p style="color:#94a3b8; font-size:0.85rem; margin:0; line-height:1.5;">90-second sensory grounding loops designed to interrupt autonomic nervous system panic.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- INSTITUTIONAL DEMO CTA -->
  <div class="executive-card" style="text-align:center; padding:3.5rem 2rem; background:linear-gradient(135deg, rgba(15,34,48,0.9), #0b1523); border-color:rgba(31,184,184,0.3);">
    <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin-bottom:0.8rem;">Integrate BAYA E Ai™ Into Your Healthcare System</h2>
    <p style="color:#94a3b8; max-width:650px; margin:0 auto 2rem; font-size:1.05rem; line-height:1.7;">
      Available for licensing, hospital integration, university research pilots, and enterprise employee wellness programs under clinical governance.
    </p>
    <a href="{{ route('home') }}#contact" class="btn-grad" style="padding:1rem 2.5rem; font-size:1.05rem;">Request Enterprise &amp; Hospital Demo →</a>
  </div>

</main>

@endsection
