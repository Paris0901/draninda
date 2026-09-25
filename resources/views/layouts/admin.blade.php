<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard | Dr. Aninda Sidhana CMS')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    :root {
      --bg-dark: #070d17;
      --bg-sidebar: #0d1524;
      --bg-card: #121c2e;
      --bg-input: #090e17;
      --teal: #1fb8b8;
      --pink: #ef6b9c;
      --text-main: #f1f5f9;
      --text-muted: #94a3b8;
      --border-color: rgba(255, 255, 255, 0.08);
      --border-focus: rgba(31, 184, 184, 0.5);
    }
    body {
      background: var(--bg-dark);
      color: var(--text-main);
      font-family: 'Outfit', sans-serif;
      min-height: 100vh;
      display: flex;
    }
    /* SIDEBAR */
    .admin-sidebar {
      width: 270px;
      background: var(--bg-sidebar);
      border-right: 1px solid var(--border-color);
      display: flex;
      flex-direction: column;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 1.8rem 1.2rem;
      z-index: 100;
    }
    .admin-brand {
      font-size: 1.3rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 2.2rem;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      padding-left: 0.5rem;
    }
    .admin-brand span {
      color: var(--teal);
    }
    .admin-nav {
      display: flex !important;
      flex-direction: column !important;
      gap: 0.4rem;
      flex: 1;
      width: 100%;
    }
    .admin-nav-link {
      display: flex !important;
      align-items: center;
      gap: 0.85rem;
      padding: 0.8rem 1rem;
      color: var(--text-muted);
      text-decoration: none;
      border-radius: 10px;
      font-size: 0.92rem;
      font-weight: 500;
      transition: all 0.2s ease;
      width: 100%;
    }
    .admin-nav-link:hover {
      background: rgba(31, 184, 184, 0.12);
      color: #fff;
    }
    .admin-nav-link.active {
      background: linear-gradient(135deg, rgba(31, 184, 184, 0.2), rgba(239, 107, 156, 0.15));
      color: var(--teal);
      border: 1px solid rgba(31, 184, 184, 0.3);
      font-weight: 600;
    }
    .admin-signout-btn {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.8rem 1rem;
      color: #ef4444;
      background: rgba(239, 68, 68, 0.08);
      border: 1px solid rgba(239, 68, 68, 0.2);
      border-radius: 10px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      width: 100%;
      text-align: left;
      transition: background 0.2s;
    }
    .admin-signout-btn:hover {
      background: rgba(239, 68, 68, 0.18);
    }

    /* MAIN CONTENT */
    .admin-main {
      margin-left: 270px;
      flex: 1;
      padding: 2.5rem 3.5rem;
      max-width: 1250px;
      width: calc(100% - 270px);
    }
    .card {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: 18px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }
    .form-group {
      margin-bottom: 1.25rem;
    }
    .form-label {
      display: block;
      font-size: 0.85rem;
      color: var(--text-muted);
      margin-bottom: 0.4rem;
      font-weight: 500;
    }
    .form-control {
      width: 100%;
      background: var(--bg-input);
      border: 1px solid var(--border-color);
      border-radius: 8px;
      padding: 0.8rem 1rem;
      color: #fff;
      font-family: inherit;
      font-size: 0.95rem;
      transition: border 0.2s;
    }
    .form-control:focus {
      outline: none;
      border-color: var(--border-focus);
      box-shadow: 0 0 12px rgba(31, 184, 184, 0.2);
    }
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }
    .table th, .table td {
      padding: 1rem 1.2rem;
      text-align: left;
      border-bottom: 1px solid var(--border-color);
    }
    .table th {
      color: var(--text-muted);
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    .btn {
      padding: 0.6rem 1.3rem;
      border-radius: 8px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      font-size: 0.88rem;
      text-decoration: none;
      display: inline-block;
      transition: all 0.2s;
    }
    .btn-primary {
      background: linear-gradient(135deg, var(--teal), var(--pink));
      color: #fff;
    }
    .btn-primary:hover {
      opacity: 0.92;
      transform: translateY(-1px);
    }
    .btn-danger {
      background: #ef4444;
      color: #fff;
    }
    .btn-danger:hover {
      background: #dc2626;
    }
    .alert-success {
      background: rgba(34, 197, 94, 0.15);
      border: 1px solid #22c55e;
      color: #4ade80;
      padding: 0.85rem 1.25rem;
      border-radius: 10px;
      margin-bottom: 1.8rem;
      font-weight: 500;
    }
  </style>
  @stack('styles')
</head>
<body>

  <!-- DEDICATED ADMIN SIDEBAR -->
  <aside class="admin-sidebar">
    <div class="admin-brand">
      🧠 Dr. Aninda <span>CMS</span>
    </div>

    <div class="admin-nav" style="overflow-y:auto; padding-right:4px;">
      <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <span>📊</span> Dashboard Overview
      </a>
      <a href="{{ route('admin.milestones') }}" class="admin-nav-link {{ request()->routeIs('admin.milestones') ? 'active' : '' }}">
        <span>📅</span> Timeline Milestones
      </a>
      <a href="{{ route('admin.awards') }}" class="admin-nav-link {{ request()->routeIs('admin.awards') ? 'active' : '' }}">
        <span>🏆</span> Awards &amp; Honors
      </a>
      <a href="{{ route('admin.research') }}" class="admin-nav-link {{ request()->routeIs('admin.research') ? 'active' : '' }}">
        <span>📄</span> Academic Research
      </a>
      <a href="{{ route('admin.media') }}" class="admin-nav-link {{ request()->routeIs('admin.media') ? 'active' : '' }}">
        <span>🎙️</span> Media &amp; Podcasts
      </a>
      <a href="{{ route('admin.testimonials') }}" class="admin-nav-link {{ request()->routeIs('admin.testimonials') ? 'active' : '' }}">
        <span>💬</span> Testimonials &amp; Praise
      </a>
      <a href="{{ route('admin.gallery') }}" class="admin-nav-link {{ request()->routeIs('admin.gallery') ? 'active' : '' }}">
        <span>🖼️</span> Photo Gallery
      </a>
      <a href="{{ route('admin.inquiries') }}" class="admin-nav-link {{ request()->routeIs('admin.inquiries') ? 'active' : '' }}">
        <span>✉️</span> Inquiries &amp; Leads
      </a>
      <a href="{{ route('home') }}" target="_blank" class="admin-nav-link" style="margin-top:0.6rem; border-top:1px solid var(--border-color); padding-top:0.8rem;">
        <span>🌐</span> View Live Website ↗
      </a>
    </div>

    <form action="{{ route('admin.logout') }}" method="POST" style="margin-top:auto;">
      @csrf
      <button type="submit" class="admin-signout-btn">🚪 Sign Out</button>
    </form>
  </aside>

  <!-- MAIN VIEW CONTAINER -->
  <main class="admin-main">
    @if(session('success'))
      <div class="alert-success">✓ {{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  @stack('scripts')
</body>
</html>
