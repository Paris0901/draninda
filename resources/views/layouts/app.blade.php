<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dr. Aninda Sidhana | Psychiatrist, Psychosexual Expert & UN SDG Ambassador')</title>
  <meta name="description" content="@yield('meta_description', 'Official portal of Dr. Aninda Sidhana — Psychiatrist, Psychosexual Medicine Specialist, WICCI National President, and Architect of Trauma Recovery Frameworks.')">
  <meta name="keywords" content="Dr. Aninda Sidhana, Psychiatrist India, Psychosexual Medicine, Mindweave, The Dignity Dialogues, WICCI National President, IPS Women Resilience Award, SafeMind FIFA, Tekchand Sidana Hospital">
  <meta name="author" content="Dr. Aninda Sidhana">
  <link rel="canonical" href="{{ url()->current() }}">
  <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'Dr. Aninda Sidhana | Psychiatrist & Digital Health Innovator')">
  <meta property="og:description" content="@yield('meta_description', 'Official portal of Dr. Aninda Sidhana — Psychiatrist, Healthcare Systems Architect, and National President of WICCI.')">
  <meta property="og:image" content="{{ asset('assets/images/aninda.jpeg') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,400;1,9..144,500&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
  @stack('styles')

  <style>
    :root {
      --bg-dark: #070d17;
      --bg-surface: #0e1726;
      --cyan-glow: #1fb8b8;
      --pink-glow: #ef6b9c;
      --glass-border: rgba(255, 255, 255, 0.08);
    }
    body {
      background-color: var(--bg-dark);
      color: #f1f5f9;
      font-family: 'Outfit', sans-serif;
      overflow-x: hidden;
    }
    .nav-active {
      color: var(--teal-lt) !important;
      font-weight: 600;
    }
    .badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.35rem 0.85rem;
      border-radius: 100px;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.04em;
    }
    .badge-teal {
      background: rgba(31, 184, 184, 0.15);
      border: 1px solid rgba(31, 184, 184, 0.35);
      color: var(--teal-lt);
    }
    .badge-pink {
      background: rgba(239, 107, 156, 0.15);
      border: 1px solid rgba(239, 107, 156, 0.35);
      color: var(--pink-lt);
    }
    .executive-card {
      background: rgba(14, 23, 38, 0.75);
      border: 1px solid var(--glass-border);
      border-radius: 20px;
      padding: 2.2rem;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
      backdrop-filter: blur(12px);
      position: relative;
      overflow: hidden;
    }
    .executive-card:hover {
      transform: translateY(-5px);
      border-color: rgba(31, 184, 184, 0.4);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(31, 184, 184, 0.1);
    }
    .filter-btn {
      cursor: pointer;
      padding: 0.5rem 1.25rem;
      border-radius: 100px;
      font-size: 0.85rem;
      font-weight: 500;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background: rgba(255, 255, 255, 0.04);
      color: #94a3b8;
      transition: all 0.25s ease;
    }
    .filter-btn.active, .filter-btn:hover {
      background: linear-gradient(135deg, var(--teal-deep), var(--pink-deep));
      color: #fff;
      border-color: transparent;
      box-shadow: 0 6px 18px rgba(31, 184, 184, 0.25);
    }
    .toast-msg {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 9999;
      background: #0f172a;
      border: 1px solid var(--teal-lt);
      color: #fff;
      padding: 1rem 1.5rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      display: none;
      animation: slideUp 0.3s ease;
    }
    @keyframes slideUp {
      from { transform: translateY(100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .subnav-tabs {
      display: flex;
      gap: 0.5rem;
      overflow-x: auto;
      padding: 0.5rem 0 1rem;
      scrollbar-width: none;
    }
    .subnav-tabs::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body id="top">

  <!-- CLEAN 4-LINK NAVBAR -->
  <nav id="nv">
    <a href="{{ route('home') }}" class="n-brand">Dr. Aninda <span>Sidhana</span></a>
    <div class="n-hamburger" onclick="document.getElementById('nv').classList.toggle('nav-open')">
      <span></span><span></span><span></span>
    </div>
    <ul class="n-links">
      <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'nav-active' : '' }}">Home</a></li>
      <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'nav-active' : '' }}">About &amp; Journey</a></li>
      <li><a href="{{ route('protocols') }}" class="{{ request()->routeIs('protocols*') ? 'nav-active' : '' }}" style="color:var(--teal-lt) !important; font-weight:600;">Protocols (IP) 🛡️</a></li>
      <li><a href="{{ route('innovations') }}" class="{{ request()->routeIs('innovations') ? 'nav-active' : '' }}">Innovations &amp; Tech</a></li>
      <li><a href="{{ route('media') }}" class="{{ request()->routeIs('media') ? 'nav-active' : '' }}">Media &amp; Press</a></li>
      <li><a href="{{ route('home') }}#contact" class="n-book">Engage Her</a></li>
    </ul>
  </nav>

  <!-- MAIN VIEW CONTENT -->
  <main>
    @yield('content')
  </main>

  <!-- LUXURY FOOTER -->
  <footer>
    <div class="ftin">
      <div class="ftrule"></div>
      <div class="fttop">
        <div>
          <p class="ftbrand">Dr. Aninda <span>Sidhana</span></p>
          <p class="ftdesc">
            Psychiatrist · Healthcare Systems Architect · Rex Karmaveer Chakra UN Laureate · IPS Women Resilience Awardee · National President, WICCI National Council
          </p>
          <div style="display:flex; gap:0.6rem; margin-top:1rem; flex-wrap:wrap;">
            <span class="badge-pill badge-teal">DHF Melbourne 2026</span>
            <span class="badge-pill badge-pink">24/7 Pro Bono Crisis Care</span>
          </div>
        </div>
        <div>
          <p class="ftc-h">Executive Hubs</p>
          <ul class="ftl">
            <li><a href="{{ route('about') }}">About Dr. Sidhana &amp; Legacy</a></li>
            <li><a href="{{ route('about') }}#timeline">Career Milestones (2009–2026)</a></li>
            <li><a href="{{ route('about') }}#awards">Honors &amp; Recognitions</a></li>
            <li><a href="{{ route('innovations') }}#baya-ai">BAYA E Ai™ Digital Health</a></li>
            <li><a href="{{ route('protocols') }}">The Sidhana Protocols (IP)</a></li>
            <li><a href="{{ route('innovations') }}#research">Academic Research &amp; Citations</a></li>
            <li><a href="{{ route('media') }}">Broadcast Podcasts, Cinema &amp; Press</a></li>
          </ul>
        </div>
        <div>
          <p class="ftc-h">Institutional Connections</p>
          <ul class="ftl">
            <li><a href="https://www.wicciminds.com" target="_blank" rel="noopener" style="color:var(--pink-lt); font-weight:600;">WICCI Mental Health Council ↗</a></li>
            <li><a href="https://www.linkedin.com/in/dr-aninda-sidhana-642978291/" target="_blank" rel="noopener">LinkedIn Profile ↗</a></li>
            <li><a href="https://scholar.google.com/scholar?q=Aninda+Sidana" target="_blank" rel="noopener">Google Scholar Profile ↗</a></li>
            <li><a href="https://dranindasidhana.substack.com" target="_blank" rel="noopener">The Dignity Dialogues Substack ↗</a></li>
          </ul>
        </div>
      </div>
      <div class="ftbot">
        <p>© 2026 Dr. Aninda Sidhana · <a href="https://dranindasidhana.com">dranindasidhana.com</a> · <a href="mailto:{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}">{{ $settings['contact_email'] ?? 'draninda30@gmail.com' }}</a></p>
      </div>
    </div>
  </footer>

  <!-- DYNAMIC TOAST -->
  <div id="dynamicToast" class="toast-msg"></div>

  <!-- MAIN JS -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @stack('scripts')
</body>
</html>
