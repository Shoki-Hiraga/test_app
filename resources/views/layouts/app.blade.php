<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Laravel App' }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  
</head>
<body>
  <header class="topbar">
    <div class="container topbar-inner">
      <div class="logo">
        <a href="{{ route('welcome') }}">LOGO</a>
      </div>
      <div class="top-meta">
        <div class="meta-line">受付時間: 9:00 - 18:00</div>
        <div class="meta-line">TEL: 000-0000-0000</div>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="footer">

    <div class="container footer-grid">

      <div>
        <div class="footer-title">
          <a href="{{ route('welcome') }}">LOGO</a>
        </div>
      </div>

      <div>
        <div class="footer-head">メニュー</div>
        <ul class="footer-links">
          <li><a href="#pickup">ピックアップ</a></li>
          <li><a href="#reviews">口コミ</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ul>
      </div>

    </div>

    <div class="container footer-bottom">
      <small>© {{ date('Y') }} Laravel Learning</small>
    </div>

  </footer>
</body>
</html>