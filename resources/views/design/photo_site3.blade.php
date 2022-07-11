<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Wooden Jewelry</title>
  <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="shortcut icon" href="{{asset('photo_site3/img/favicon.ico')}}">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="{{asset('photo_site3/css/style.css')}}">
</head>

<body>


  <header id="header">
    <h1 class="site-title"> </h1>

    <nav>
      <ul>
        <li><a href="#concept">ナビ1</a></li>
        <li><a href="#work">ナビ2</a></li>
        <li><a href="mailto:xxxxx@xxx.xxx.com?subject=お問い合わせ">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <main>
      <section id="concept" class="content">
        <div class="img">
          <img src="{{asset('photo_site3/img/wallpaper.jpeg')}}" width="482" height="482" alt="">
        </div>
        <div class="text">
          <h2 class="section-title">ナビ1見出し</h2>
          <span class="section-title-en">ナビ1</span>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </section>

      <section id="work" class="content">
        <div class="text">
          <h2 class="section-title">ナビ2見出し</h2>
          <span class="section-title-en">ナビ2</span>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="img">
          <img src="{{asset('photo_site3/img/wallpaper.jpeg')}}" width="482" height="482" alt="">
        </div>
      </section>
    </main>

    <footer id="footer">
      <div class="logo">
      </div>
      <p>&copy; ユーザネーム</p>
    </footer>
  </div>
</body>

</html>
