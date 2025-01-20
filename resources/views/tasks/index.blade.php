<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク管理App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 class="text2">タスク一覧</h1>
    @foreach ($tasks as $task)
        <div class="task-item">
            {{-- $taskへのリンク --}}
            <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>

            {{-- ボタン(削除) --}}
            <form action="{{ route('tasks.destroy', $task) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" class="button" onclick="if(!confirm('本当に削除しますか？')){return felse};">
            </form>
        </div>
        <hr>
        <h1 class="text1">新規タスク登録</h1>
        <form action="{{ route('tasks.store') }}" method="post">
            <p>
                <label for="title">タイトル</label><br>
                <input type="text" name="title" class="title" id="title">
            </p>
            <p>
                <label for="body">本文</label><br>
                <textarea name="body" class="body" id="body"></textarea>
            </p>
    @endforeach

    <input type="submit" value="Create Task">
    </form>
</body>

</html>
