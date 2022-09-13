<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>惑星情報登録</h1>

    {{-- storeのURL --}}
    <form action="/planets/create" method="post">
        @csrf
        <p>
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label for="enname">名前(英語)</label>
            <input type="text" name="enname" value="{{ old('enname') }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="text" name="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="text" name="weight" value="{{ old('weight') }}">
    </form>
    <br>
    <button onclick="location.href='/planets'">
        登録
    </button>
    
    <div>
        <a href="/planets" class="edit_back">戻る</a>
    </div>
</body>
</html>
