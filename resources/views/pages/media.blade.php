@extends('layouts.app')

@section('title', 'Media, Broadcasts, Essays & Press Kit | Dr. Aninda Sidhana')
@section('meta_description', 'Listen to Dr. Aninda Sidhana on The AboutHer Show, The Guiding Voice, Josh Talks, World’s Mayor, and read her essays on MyndStories, Medium, and Substack.')

@section('content')

<!-- HEADER -->
<header style="background:linear-gradient(135deg, var(--bg-dark), #121028); padding:6rem 1.5rem 4rem; text-align:center; border-bottom:1px solid var(--glass-border);">
  <div style="max-width:850px; margin:0 auto;">
    <span class="badge-pill badge-pink" style="margin-bottom:1rem;">Audio, Cinema &amp; Written Word</span>
    <h1 style="font-family:var(--display); font-size:clamp(2.5rem, 5vw, 3.8rem); color:#fff; margin:0.4rem 0 1rem;">
      Media, Broadcasts &amp; <span style="background:linear-gradient(100deg,var(--teal-lt),var(--pink-lt));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;">Essays</span>
    </h1>
    <p style="color:#94a3b8; font-size:1.15rem; line-height:1.7;">
      Humanizing psychiatric concepts, de-stigmatizing trauma, and empowering survivors through global media.
    </p>
  </div>
</header>

<main style="max-width:1150px; margin:4rem auto; padding:0 1.5rem;">

  <!-- FEATURED VIDEO TALK -->
  <div class="executive-card" style="margin-bottom:4rem; background:linear-gradient(135deg, rgba(14,23,38,0.9), #070d17); border-color:rgba(31,184,184,0.3); padding:2.5rem;">
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:2.5rem; align-items:center;">
      <div class="vframe" style="position:relative; width:100%; aspect-ratio:16/9; border-radius:16px; overflow:hidden; border:1px solid rgba(255,255,255,0.1);">
        <video src="{{ asset('assets/videos/featured-video.mp4') }}" controls preload="metadata" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;"></video>
      </div>

      <div>
        <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Featured Keynote &amp; Interview</span>
        <h2 style="font-family:var(--display); font-size:2rem; color:#fff; margin:0.4rem 0 1rem;">Breaking the Silence: Mental Health &amp; Sexual Wellness</h2>
        <p style="color:#cbd5e1; font-size:1rem; line-height:1.7; margin-bottom:1.5rem;">
          Dr. Sidhana in conversation on overcoming personal trauma, deconstructing societal taboos in India, and building sovereign survivor resilience.
        </p>
        <a href="https://youtu.be/SNdhZGyYlHQ" target="_blank" rel="noopener" class="btn-grad" style="padding:0.85rem 1.8rem;">Watch on YouTube ▶️</a>
      </div>
    </div>
  </div>

  <!-- CINEMA & THE MIND & THE LISTENING COMMONS -->
  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem; margin-bottom:4rem;">
    <!-- Cinema & the Mind -->
    <div class="executive-card" style="border-color:rgba(31,184,184,0.3); background:linear-gradient(135deg, rgba(14,23,38,0.9), #070d17); padding:2.2rem;">
      <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Cinema &amp; Cultural Psychiatry</span>
      <h3 style="font-family:var(--display); font-size:1.6rem; color:#fff; margin:0.3rem 0 0.6rem;">Cinema &amp; the Mind</h3>
      <p style="color:var(--pink-lt); font-size:0.95rem; font-weight:600; margin-bottom:0.8rem;">"Every Frame Shapes a Mind."</p>
      <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.7; margin-bottom:1.2rem;">
        Bringing psychiatric insight into dialogue with filmmakers and storytellers about representation, creative freedom, and psychological responsibility. Documented at the 19th Global Film Festival Noida (AAFT/Marwah Studios) to encourage stories that preserve complexity and human dignity.
      </p>
      <a href="mailto:{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}?subject=Cinema%20and%20the%20Mind%20Workshop" style="color:var(--teal-lt); font-weight:600; font-size:0.88rem; text-decoration:none;">Enquire About Media &amp; Cinema Workshops →</a>
    </div>

    <!-- The Listening Commons -->
    <div class="executive-card" style="border-color:rgba(239,107,156,0.3); background:linear-gradient(135deg, rgba(14,23,38,0.9), #070d17); padding:2.2rem;">
      <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">Dialogue Platform</span>
      <h3 style="font-family:var(--display); font-size:1.6rem; color:#fff; margin:0.3rem 0 0.6rem;">The Listening Commons</h3>
      <p style="color:var(--teal-lt); font-size:0.95rem; font-weight:600; margin-bottom:0.8rem;">Co-hosted with Scott Douglas Jacobsen</p>
      <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.7; margin-bottom:1.2rem;">
        "A conversation can make room for what a headline leaves out." In-depth dialogues exploring psychiatry, culture, relationships, consciousness, human rights, and the human condition.
      </p>
      <a href="https://listeningcommons.com/" target="_blank" rel="noopener" class="btn-grad" style="padding:0.6rem 1.3rem; font-size:0.82rem; text-decoration:none;">Explore Episodes on ListeningCommons.com ↗</a>
    </div>
  </div>

  <!-- PODCASTS GRID -->
  <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin-bottom:1.8rem;">🎙️ Broadcast Podcasts &amp; Audio Series</h2>
  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem; margin-bottom:5rem;">
    @foreach($mediaAppearances as $media)
    <div class="executive-card" style="display:flex; flex-direction:column; justify-content:space-between;">
      <div>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.8rem;">
          <span class="badge-pill badge-teal">{{ $media->show_name }}</span>
          @if($media->host)<span style="color:#94a3b8; font-size:0.8rem;">Host: {{ $media->host }}</span>@endif
        </div>
        <h3 style="font-family:var(--display); font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem;">{{ $media->title }}</h3>
        <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">{{ $media->description }}</p>
      </div>

      <div style="display:flex; gap:0.6rem; flex-wrap:wrap; border-top:1px solid rgba(255,255,255,0.08); padding-top:1rem;">
        @if($media->spotify_url)<a href="{{ $media->spotify_url }}" target="_blank" rel="noopener" style="font-size:0.8rem; font-weight:600; color:#1db954; text-decoration:none; background:rgba(29,185,84,0.12); padding:0.4rem 0.8rem; border-radius:100px;">Spotify 🎧</a>@endif
        @if($media->apple_url)<a href="{{ $media->apple_url }}" target="_blank" rel="noopener" style="font-size:0.8rem; font-weight:600; color:var(--pink-lt); text-decoration:none; background:rgba(239,107,156,0.15); padding:0.4rem 0.8rem; border-radius:100px;">Apple 🎙️</a>@endif
        @if($media->youtube_url)<a href="{{ $media->youtube_url }}" target="_blank" rel="noopener" style="font-size:0.8rem; font-weight:600; color:#ff4e4e; text-decoration:none; background:rgba(255,78,78,0.15); padding:0.4rem 0.8rem; border-radius:100px;">YouTube ▶️</a>@endif
      </div>
    </div>
    @endforeach
  </div>

  <!-- ESSAYS & SUBSTACK SECTION -->
  <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin-bottom:1.8rem;">✍️ Landmark Essays &amp; Newsletters</h2>
  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem; margin-bottom:5rem;">
    <!-- Essay 1: MyndStories -->
    <a href="https://www.myndstories.com" target="_blank" rel="noopener" class="executive-card" style="text-decoration:none; color:inherit; border-color:rgba(239,107,156,0.3);">
      <span class="badge-pill badge-pink" style="margin-bottom:0.8rem;">MyndStories · May 20, 2025</span>
      <h3 style="font-family:var(--display); font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem;">Rising from the ashes: A journey of resilience</h3>
      <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
        An autobiographical landmark essay detailing the journey of overcoming marriage adversity, domestic trauma, and transforming personal scars into clinical empathy.
      </p>
      <span style="color:var(--pink-lt); font-weight:600; font-size:0.9rem;">Read Landmark Essay ↗</span>
    </a>

    <!-- Essay 2: Medium -->
    <a href="https://draninda30.medium.com/" target="_blank" rel="noopener" class="executive-card" style="text-decoration:none; color:inherit;">
      <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Medium · Cultural Psychiatry</span>
      <h3 style="font-family:var(--display); font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem;">Raja Beta Syndrome: Unpacking Domestic Dynamics</h3>
      <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
        A deep psychiatric analysis of psychological conditioning, male entitlement, and domestic behavioral patterns in traditional households.
      </p>
      <span style="color:var(--teal-lt); font-weight:600; font-size:0.9rem;">Read on Medium ↗</span>
    </a>

    <!-- Essay 3: Substack -->
    <a href="https://dranindasidhana.substack.com" target="_blank" rel="noopener" class="executive-card" style="text-decoration:none; color:inherit;">
      <span class="badge-pill badge-teal" style="margin-bottom:0.8rem;">Substack · The Dignity Dialogues</span>
      <h3 style="font-family:var(--display); font-size:1.35rem; color:#fff; margin:0.4rem 0 0.8rem;">Responsible Reporting &amp; Suicide Prevention</h3>
      <p style="color:#cbd5e1; font-size:0.92rem; line-height:1.6; margin-bottom:1.5rem;">
        Actionable media guidelines for journalists and public figures on ethical trauma storytelling and suicide prevention reporting.
      </p>
      <span style="color:var(--teal-lt); font-weight:600; font-size:0.9rem;">Subscribe on Substack ↗</span>
    </a>
  </div>

  <!-- PRESS KIT DOWNLOADS -->
  <div class="executive-card" style="background:linear-gradient(135deg, rgba(15,34,48,0.9), #0b1523); border-color:rgba(31,184,184,0.3); padding:3rem; text-align:center;">
    <h2 style="font-family:var(--display); font-size:2.2rem; color:#fff; margin-bottom:0.8rem;">Download Verified Press Package</h2>
    <p style="color:#94a3b8; max-width:650px; margin:0 auto 2rem; font-size:1.05rem; line-height:1.7;">
      High-resolution photography, approved biographies (short, mid, encyclopedic), signature quote library, and podcast intro guides.
    </p>
    <div style="display:flex; justify-content:center; gap:1.5rem; flex-wrap:wrap;">
      <a href="mailto:{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}?subject=Press%20Kit%20Request" class="btn-grad" style="padding:0.9rem 2.2rem;">Request Official Press Kit</a>
      <a href="mailto:{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}?subject=Speaking%20Booking" class="btn-glass" style="padding:0.9rem 2.2rem;">Speaking Inquiry</a>
    </div>
  </div>

</main>

@endsection
