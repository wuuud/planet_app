<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星一覧</h1>

    <table border="1">
        {{-- タイトル達 --}}
        <thead>
            <tr>
                <th>名前</th>
                <th>名前(英語)</th>
                <th>半径</th>
                <th>重量</th>
                <th>    </th>
                <th>    </th>
            </tr>
        </thead>
        {{-- 各詳細 --}}
        <tbody>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->enname }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td><a href="/planets/{{ $planet->id }}">詳 細</a></td>
                <td>
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                    </form>
                </td>
            </tr>
        </tbody>
        {{-- @endforeach の位置が大切 --}}
        @endforeach
    </table>
    </table>
    
    <br>
    <a href="/planets/create">新規登録</a>
</body>

</html>
