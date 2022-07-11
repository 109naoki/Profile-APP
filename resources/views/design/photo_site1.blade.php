<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Mag88</title>
  {{-- <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('photo_site1/img/favicon.ico')}}">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="{{asset('photo_site1/css/style.css')}}">
</head>
<body>

<header id="header" style="background-image: url({{asset('photo_site1/img/wallpaper.jpeg')}})">
  {{-- <h1 class="site-title"><img src="{{asset('photo_site1/img/ONEOKROCK.jpeg')}}" width="120" height="40"></h1> --}}
</header>

<main>
  <section class="wrapper" id="magazine">
    <h2 class="sec-title">見出し1</h2>
    <p>
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
      テキストテキストテキストテキストテキストテキストテキストテキスト
    </p>
    <div class="flex-item">
      <a href="#" class="item">
        <img src="{{asset('photo_site1/img/wallpaper.jpeg')}}" width="360" height="360" >
        <div class="text">
          <p class="title">タイトル1</p>
          <p>
            テキストテキストテキストテキスト<br>
            テキストテキストテキスト
          </p>
        </div>
      </a>

      <a href="#" class="item">
        <img src="{{asset('photo_site1/img/wallpaper.jpeg')}}" width="360" height="360">
        <div class="text">
          <p class="title">タイトル2</p>
          <p>
            テキストテキストテキストテキスト<br>
            テキストテキストテキスト
          </p>
        </div>
      </a>
    </div>
  </section>

  <section id="fashion">
    <div class="wrapper">
      <h2 class="sec-title">見出し2</h2>
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
        テキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      {{-- <a href="#" class="btn">Read More</a> --}}
    </div>
  </section>

<section class="catalog-antique">
  <div class="flex-item wrapper">
    <div class="item">
      <img src="{{asset('photo_site1/img/wallpaper.jpeg')}}" alt="">
    </div>

    <div class="item">
      <h2 class="sec-title">タイトル3</h2>
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
    </div>
  </div>
</section>

<section class="catalog-antique">
  <div class="flex-item wrapper">
    <div class="item">
      <h2 class="sec-title">タイトル4</h2>
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      {{-- <a href="#" class="btn">Read More</a> --}}
    </div>
    <div class="item">
      <img src="{{asset('photo_site1/img/wallpaper.jpeg')}}" alt="">
    </div>
  </div>
</section>
</main>

<footer id="footer">
  <div class="flex-item wrapper">
    <div class="item">
      {{-- <a href="index.html"><img src="{{asset('photo_site1/img/logo.svg')}}" alt="Mag88"></a> --}}
    </div>
    {{-- <div class="item">
      <p class="title">タイトル</p>
      <ul>
        <li>テキストテキストテキスト</li>
        <li>テキストテキストテキスト</li>
        <li>テキストテキストテキスト</li>
        <li>テキストテキストテキスト</li>
        <li>テキストテキストテキスト</li>
      </ul>
    </div> --}}
    <div class="item">
      <p class="title">見出し3</p>
        <p>
          テキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
    </div>
  </div>
  <p class="copyright">&copy; 登録ネーム</p>
</footer>
</body>
</html>
