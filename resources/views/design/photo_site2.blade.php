<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHOTO BOOK 2</title>
  <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('photo_site2/img/favicon.ico')}}">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="{{asset('photo_site2/css/style.css')}}">
</head>

<body>
  <div class="container">
    <header id="header">
      <h1 class="site-title">
        {{-- <a href="index.html" width="180" height="17">見出し</a> --}}
      </h1>
    </header>

    <main>
      <div id="mainvisual">
        <img src="{{asset('photo_site2/img/wallpaper.jpeg')}}"  width="1000" height="400" alt="テキストテキストテキスト">
      </div>

      <div class="inner">
        <section id="index">
          <h2 class="section-title">見出しテキスト1</h2>
          <div class="index-inner">
            <ol class="index-list">
              <li>文章1</li>
              <li>文章2</li>
              <li>文章3</li>
              <li>文章4</li>
              <li>文章5</li>

            </ol>
          </div>
        </section>

        <ul class="list">
          <li><img src="{{asset('photo_site2/img/wallpaper.jpeg')}}" width="360" height="240" alt=""></li>
          <li><img src="{{asset('photo_site2/img/wallpaper.jpeg')}}" width="360" height="240" alt=""></li>
          <li><img src="{{asset('photo_site2/img/wallpaper.jpeg')}}" width="360" height="240" alt=""></li>
          <li><img src="{{asset('photo_site2/img/wallpaper.jpeg')}}" width="360" height="240" alt=""></li>
        </ul>

        <section id="detail">
          <h2 class="section-title">詳細</h2>
          <div class="flex">
            <dl>
              <dt>詳細見出し1</dt>
              <dd>詳細1文章1</dd>
              <dt>詳細見出し2</dt>
              <dd>詳細2文章2</dd>
              <dt>詳細見出し3</dt>
              <dd>詳細3文章3</dd>

            </dl>
            <div class="text">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <a class="link" href="#">リンク文章</a>
            </div>
          </div>
        </section>
      </div>
    </main>

    <footer id="footer">
      <p class="inner">&copy; ユーザネーム</p>
    </footer>
  </div>
</body>

</html>
