<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <title>お問い合わせ</title>
  @livewireStyles
</head>
<body>
  <div class="content">
    <div class="main_con">
      {{ $slot }}
    </div>
  </div>  
  @livewireScripts
  <script src="{{ asset('/js/hoge.js') }}"></script>
</body>
</html>
