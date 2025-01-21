<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスクApp</title>
    <link rel="stylesheet" href="{{ asset('css/showstyle.css') }}">
</head>

<body>
    <h1 class="text1">タスク詳細</h1>
    <h3 class="text2">【タイトル】</h3>
    <p>{{ $task->title }}</p>
    <h3 class="text3">【内容】</h3>
    <p>{{ $task->body }}</p>
    {{-- ボタン(一覧へ戻る、編集する、削除する) --}}
    <div class="button-group">
        <button onclick="location.href='{{ route('tasks.index') }}'">一覧へ戻る</button>
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="post">
            @csrf
            @method('DELETE')
            <button onclick="if(!confirm('削除しますか？')){return false};">削除する</button>
        </form>
    </div>
</body>

</html>
