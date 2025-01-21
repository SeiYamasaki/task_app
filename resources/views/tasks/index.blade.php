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
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>

            {{-- ボタン(削除) --}}
            <form action="{{ route('tasks.destroy', $task) }}" method="post">
                @csrf
                @method('DELETE')
                <button onclick="if(!confirm('本当に削除しますか？')){return false};">削除ボタン</button>
            </form>
        </div>
        <hr>
    @endforeach
    <h1 class="text1">新規タスク登録</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body') }}</textarea>
        </p>
        <button onclick="location.href='{{ route('tasks.create') }}'">Create Task</button>
    </form>
</body>

</html>
