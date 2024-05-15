<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <!--IEブラウザ対策-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="写真展示" />
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="container end">
    <div class="end-wrapper">
      <p>おしまい</p>
      <a href="{{ route('top') }}" class="top-btn">
        タイトルへ戻る</a>
      <a href="/artwork/1">最初の作品へ戻る</a>
    </div>
  </div>
</body>
