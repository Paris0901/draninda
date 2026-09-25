<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Dr. Aninda Sidhana CMS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: #090e17;
      color: #e2e8f0;
      font-family: 'Outfit', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .login-box {
      background: #131d31;
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 20px;
      padding: 2.5rem;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    }
    .form-group {
      margin-bottom: 1.25rem;
    }
    .form-label {
      display: block;
      font-size: 0.85rem;
      color: #94a3b8;
      margin-bottom: 0.4rem;
    }
    .form-control {
      width: 100%;
      background: #090e17;
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 8px;
      padding: 0.75rem 1rem;
      color: #fff;
      box-sizing: border-box;
      font-size: 0.95rem;
    }
    .btn-submit {
      width: 100%;
      background: linear-gradient(135deg, #1fb8b8, #ef6b9c);
      color: #fff;
      border: none;
      padding: 0.85rem;
      border-radius: 100px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      margin-top: 1rem;
    }
    .error-msg {
      color: #ef4444;
      font-size: 0.85rem;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2 style="margin-top:0; color:#fff; text-align:center;">Admin <span>CMS Portal</span></h2>
    <p style="color:#94a3b8; text-align:center; font-size:0.9rem; margin-bottom:2rem;">Sign in to manage Dr. Aninda Sidhana website data</p>

    @if($errors->any())
      <div class="error-msg">⚠️ {{ $errors->first() }}</div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST">
      @csrf
      <div class="form-group">
        <label class="form-label" for="email">Email Address</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', 'admin@dranindasidhana.com') }}" required autofocus>
      </div>

      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required value="password123">
      </div>

      <button type="submit" class="btn-submit">Sign In to Dashboard →</button>
    </form>
    <div style="margin-top:1.5rem; text-align:center;">
      <a href="{{ route('home') }}" style="color:#94a3b8; text-decoration:none; font-size:0.85rem;">← Back to Website</a>
    </div>
  </div>
</body>
</html>
