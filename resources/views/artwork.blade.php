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
  <div class="container">
    <div class="photo-content">
      @if(isset($prev))
      <div>
        <a href="/artwork/{{$prev->id}}"><span class="arrow-left"></span></a>
      </div>
      @endif
      <div class="photo-wrapper">
        <img src="{{ asset('images/' . $artwork->image) }}" class="photo"></img>
        <div class="caption">
          <p class="title">{{$artwork->title}}</p>
          <p class="name">{{$artwork->name}}</p>
        </div>
      </div>

      @if(isset($next))
      <div>
        <a href="/artwork/{{$next->id}}"><span class="arrow-right"></span></a>
      </div>
      @else
      <div>
        <a href="{{ route('end') }}"><span class="arrow-right"></span></a>
      </div>
      @endif
    </div>
    <div class="container">
      <div class="comment">
        @auth
        <div class="comment_area">
          <div>
            @if($errors->first('comment'))
            <span class="error_message">{{ $errors->first('comment') }}</span>
            @endif
          </div>
          <form action="{{ route('comment.create') }}" method="post" id="commentRequest">
            <textarea class="w-75" name="comment" rows="5" form="commentRequest" placeholder="コメントを書く"></textarea>
            <input type="hidden" name="artwork_id" form="commentRequest" value="{{ $artwork->id }}">
            <div class="text-right">
              <input type="submit" class="btn btn-outline-success  btn-sm" form="commentRequest" value="送信">
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        @endauth
        <div class="comment-wrapper">
          <p>コメント一覧</p>
          @foreach($artwork->comments as $comment)
          <div class="comment-container">
            <p>名前：</p>
            <p class="text-success pe-5">{{ $comment->commentUser($comment->user_id)->name }}</p>
            <p>投稿日時：{{$comment->created_at}}</p>
          </div>
          <p class="comment-text">{{$comment->comment}}</p>
          @endforeach
        </div>

      </div>
    </div>
  </div>

</body>
</div>

</html>
