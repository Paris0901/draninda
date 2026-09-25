@extends('layouts.app')

@section('title', 'Movements, Mass Psychology & Global Campaigns | Dr. Aninda Sidhana')
@section('meta_description', 'Explore public health movements architected by Dr. Aninda Sidhana: Aura Stadia (FIFA Safe Stadium Safe Minds), The Great Unburdening with Raaj Rahi, and Suicide Prevention Toolkit.')

@section('content')

<!-- HEADER -->
<header style="background:linear-gradient(135deg, var(--bg-dark), #101c33); padding:6rem 1.5rem 4rem; text-align:center; border-bottom:1px solid var(--glass-border);">
  <div style="max-width:850px; margin:0 auto;">
    <span class="badge-pill badge-teal" style="margin-bottom:1rem;">Mass Psychology &amp; Public Policy</span>
    <h1 style="font-family:var(--display); font-size:clamp(2.5rem, 5vw, 3.8rem); color:#fff; margin:0.4rem 0 1rem;">
      Movements &amp; <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Public Health Design</span>
    </h1>
    <p style="color:#94a3b8; font-size:1.15rem; line-height:1.7;">
      Extending clinical psychiatry into stadium architecture, maternal economic capital, mass storytelling, and corporate wellness governance.
    </p>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- MOVEMENTS GRID -->
  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
    @foreach($initiatives as $init)
    <div class="executive-card">
      <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
        <span class="badge-pill badge-teal">{{ $init->badge ?? 'Global Initiative' }}</span>
        <span style="font-size:1.8rem;">
          @if(str_contains($init->title, 'FIFA') || str_contains($init->title, 'Stadia')) 🏟️
          @elseif(str_contains($init->title, 'BAYA')) 📱
          @elseif(str_contains($init->title, 'Dignity')) 🗣️
          @elseif(str_contains($init->title, 'Unburdening')) 🎬
          @elseif(str_contains($init->title, 'Suicide')) 🛡️
          @else 🏛️
          @endif
        </span>
      </div>

      <h2 style="font-family:var(--display); font-size:1.6rem; color:#fff; margin:0.4rem 0 0.6rem;">{{ $init->title }}</h2>
      @if($init->tagline)
        <p style="color:var(--pink-lt); font-size:0.95rem; font-weight:600; margin-bottom:0.8rem;">{{ $init->tagline }}</p>
      @endif

      <p style="color:#cbd5e1; font-size:0.95rem; line-height:1.7; margin-bottom:1.5rem;">
        {{ $init->description }}
      </p>

      @if($init->url && $init->url !== '#')
        <a href="{{ $init->url }}" target="_blank" rel="noopener" style="color:var(--teal-lt); font-weight:600; text-decoration:none; font-size:0.9rem;">Explore Campaign Hub ↗</a>
      @endif
    </div>
    @endforeach
  </div>

  <!-- 24/7 PRO BONO COMMITMENT BANNER -->
  <div class="executive-card" style="margin-top:4rem; background:linear-gradient(135deg, rgba(239,107,156,0.12), rgba(31,184,184,0.12)); border-color:rgba(239,107,156,0.3); padding:2.5rem; text-align:center;">
    <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Lifetime Humanitarian Pledge</span>
    <h3 style="font-family:var(--display); font-size:1.8rem; color:#fff; margin:0.4rem 0 0.8rem;">24/7 Pro Bono Crisis Care for Gender-Based Violence Survivors</h3>
    <p style="color:#cbd5e1; max-width:750px; margin:0 auto; font-size:1rem; line-height:1.7;">
      In tandem with her institutional and policy roles, Dr. Aninda Sidhana maintains an uncompromised lifetime commitment to providing immediate psychiatric triage, trauma stabilization, and counseling to survivors of domestic abuse globally without financial barrier.
    </p>
  </div>

</main>

@endsection
