<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="show_names">
    <h3>氏名:{{  $planet->name  }}</h3>
    <h3>名前(英語):{{ $planet->enname }}</h3>
    <h3>半径:{{ $planet->radius }}</h3>
    <h3>重量:{{ $planet->weight }}</h3>
    </div>
    <p>
    <a href="/planets">戻る</a>
    </p>
</body>
</html>
