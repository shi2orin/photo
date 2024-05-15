<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="写真展示" />
  <title></title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <section id="top">
    <div class="container">
      <h4>テーマ名</h4>
      <div class="main-visual">
        <img src="{{ asset('images/sample.jpg') }}">
        <p class="main-name">出展者</p>
      </div>
    </div>
  </section>

  <section id="login">
    <div class="container">
      <div class="top-login">
        @auth
        <div class="card">
          <div class="card-body">
            <p class="card-title">お越しいただきありがとうございます。</p>
            <a class="btn btn-outline-primary" href="/artwork/1">作品ページへ</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="card-title">ログアウトする</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-outline-primary">thank you!</button>
            </form>
          </div>
        </div>

        @else

        <div class="card">
          <div class="card-body ">
            <p class="card-title">登録して入場</p>
            <div>
              <form action="{{ route('register') }}" method="GET">
                <button type="submit" class="btn btn-outline-primary btn-smw-50 mt-4">新規登録</button>
              </form>
            </div>
          </div>
        </div>
        <div class="card flex-grow-1">
          <div class="card-body">
            <p class="card-title">登録済みの方はこちら</p>
            <div>
              <form method="POST" action="{{ route('login') }}"> @csrf
                <input id="email" type="email" class="w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-primary w-50 mt-3">
              {{ __('ログイン') }}
            </button>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="card-title">登録せずに入場</p>
            <p>※コメントは閲覧のみ</p>
            <a class="btn btn-outline-primary" href="/artwork/1">入場</a>
          </div>
        </div>
        @endauth
      </div>
    </div>
  </section>
</body>

</html>
