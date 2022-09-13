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

    <table>
        <thead>
            <tr>
                <th scope="col">名前</th>
                <th scope="col">名前(英語)</th>
                <th scope="col">半径</th>
                <th scope="col">重量</th>
            </tr>
        </thead>
        @foreach ($planets as $planet)
        <tbody>
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->enname }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td><a href="/planets/{{ $planet->id }}">詳細</a></td>
                <td>
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>


    {{-- <table>
        @foreach ($planets as $planet)
            <thead>
                <tr>
                    <td>{{ $planet->name }}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $planet->enname }}</td>
                </tr>
            </tbody>
            <td>{{ $planet->radius }}</td>
            <td>{{ $planet->weight }}</td>
            </tr>
        @endforeach

    </table> --}}
    <a href="/planets/create">新規登録</a>
</body>

</html>
