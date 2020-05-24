<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello/Index</title>
  <style>
  body {
    font-size: 16pt;
    color: #999;
  }
  h1 {
    font-size: 50pt;
    text-align: right;
    color: #f6f6f6;
    margin: -20px 0 -30px 0;
    letter-spacing: -4pt;
  }
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  @if ($msg != '')
  <p>こんにちは、{{ $msg }}さん。</p>
  @else
  <p>何か書いてください。</p>
  @endif
  <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>