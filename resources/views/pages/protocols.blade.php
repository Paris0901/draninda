@extends('layouts.app')

@section('title', 'Clinical Protocols & Psychiatric IP Manual | Dr. Aninda Sidhana')
@section('meta_description', 'Official clinical IP manual for The Sidhana Pattojoshi Protocols™: MINDWEAVE, Dignity Dialogues, PMDD Partner Button, Healing Justice Toolkit, and WINGS Framework.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/protocols.css') }}">
@endpush

@section('content')

<!-- HERO PROTO HEADER -->
<header class="hero-proto">
  <div class="hero-proto-inner">
    <div class="hero-proto-content">
      <p class="tag">Clinical IP &amp; Methodology Manual · Version 1.0</p>
      <h1>Sidhana Pattojoshi <em>Protocols™</em></h1>
      <p class="lead">
        Synthesizing over 15 years of tertiary clinical psychiatry, lived survivor wisdom, and international safeguarding advocacy into five copyrighted, actionable architectures designed for institutional licensing and global impact.
      </p>
      <div class="ip-pill">
        <span>🛡️</span>
        <span><strong>Independent Intellectual Property</strong> © 2026 Dr. Aninda Sidhana &amp; Dr. Amrit Pattojoshi</span>
      </div>
    </div>

    <div class="hero-proto-photo">
      <div class="photo-glow-1"></div>
      <div class="photo-glow-2"></div>
      <div class="hero-photo-card">
        <div class="photo-wrapper">
          <img src="{{ asset('assets/images/hero-founders.png') }}" alt="Dr. Aninda Sidhana &amp; Dr. Amrit Pattojoshi" class="founders-img" onerror="this.src='{{ asset('assets/images/aninda.jpeg') }}'">
        </div>
        <div class="photo-badge">
          <div class="badge-icon">✨</div>
          <div class="badge-text">
            <strong>Dr. Aninda Sidhana &amp; Dr. Amrit Pattojoshi</strong>
            <span>Principal Clinical Architects</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- QUICK STICKY NAV -->
<div class="proto-quick-nav">
  @foreach($protocols as $proto)
    <a href="#{{ $proto->slug }}">{{ $proto->icon }} {{ $proto->title }}</a>
  @endforeach
</div>

<!-- PROTOCOLS SECTIONS -->
@foreach($protocols as $proto)
<section id="{{ $proto->slug }}" class="sec-proto">
  <div class="inner">
    <div class="proto-header">
      <div>
        <p class="proto-num">{{ $proto->protocol_number }} · {{ $proto->category }}</p>
        <h2 class="proto-title">{{ $proto->icon }} {{ $proto->title }}</h2>
      </div>
      <p class="proto-desc">{{ $proto->summary }}</p>
    </div>

    <div class="proto-grid-2">
      <div class="proto-content">
        <h3>Theoretical Foundations</h3>
        <p>{{ $proto->theoretical_foundation }}</p>

        @if(!empty($proto->pillars) && is_array($proto->pillars))
          <h3>The Core Structural Pillars</h3>
          <ul class="proto-list">
            @foreach($proto->pillars as $pillar)
              <li><strong>{{ $pillar['title'] }}:</strong> {{ $pillar['desc'] }}</li>
            @endforeach
          </ul>
        @endif
      </div>

      <div class="proto-box">
        <h4>✦ Clinical Integration &amp; Licensing</h4>
        <p style="color:var(--mist); font-size:0.95rem; line-height:1.6; margin-bottom:1.5rem;">
          {{ $proto->clinical_guidelines }}
        </p>
        <div style="border-top: 1px solid rgba(253,248,246,0.1); padding-top: 1.2rem;">
          <p style="font-size:0.85rem; color:var(--teal-lt); font-weight:600; text-transform:uppercase; letter-spacing:0.1em; margin-bottom:0.5rem;">Licensing Scope</p>
          <p style="color:var(--ivory); font-size:0.92rem; line-height:1.5;">
            {{ $proto->licensing_scope ?? 'Available under institutional license for hospitals, research bodies, and corporations.' }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach

<!-- LICENSING CTA SECTION -->
<section class="licensing-sec">
  <div class="licensing-card">
    <p class="tag" style="margin-bottom:0.8rem;">Institutional Collaboration</p>
    <h2>License The Sidhana Protocols™</h2>
    <p>
      All five frameworks are independent intellectual property created and copyrighted by Dr. Aninda Sidhana and Dr. Amrit Pattojoshi. Institutions, healthcare systems, universities, and corporate organizations seeking formal integration, clinical training certification, or academic citation guidelines are invited to connect.
    </p>
    <div style="display:flex; gap:1.5rem; justify-content:center; flex-wrap:wrap;">
      <a href="{{ route('home') }}#contact" class="btn-grad" style="padding:1.1rem 2.5rem; font-size:1.05rem; font-weight:600; text-decoration:none; box-shadow:0 10px 30px rgba(31,184,184,0.3);">Inquire for Institutional Licensing →</a>
      <a href="mailto:{{ $settings['licensing_email'] ?? 'minds@dranindasidhana.com' }}?subject=Protocol%20Licensing%20Inquiry" style="padding:1.1rem 2.2rem; font-size:1.05rem; font-weight:600; text-decoration:none; color:#fff; background:rgba(253,248,246,0.08); border:1px solid rgba(253,248,246,0.2); border-radius:100px;">Direct Email Inquiry</a>
    </div>
    <p style="font-size:0.82rem; color:rgba(253,248,246,0.5); margin-top:2rem; max-width:600px; margin-left:auto; margin-right:auto;">
      *Unauthorized commercial reproduction, derivative training of artificial intelligence models, or uncredited clinical deployment of these copyrighted protocols is strictly prohibited.
    </p>
  </div>
</section>

@endsection
