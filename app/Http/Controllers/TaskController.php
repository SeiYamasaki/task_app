<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\TaskRequest;

class TaskController extends Controller
{
    //indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $tasks = Task::all();
        // tasksディレクトリーの中のindexページを指定し、tasksの連想配列を代入
        return view('tasks.index', ['tasks' => $tasks]);
    }
    // showページへ移動
    public function show($id) 
    {
        $task = Task::find($id);
        return view('tasks.show', ['tasks' => $task]);
    }
    //登録処理
    public function create()
    {
        return view("tasks.index");
    }
    //登録アクション処理
    public function store(TaskRequest $request)
    {
    //インスタンス生成
    $task = new Task;

    $task->title = $request->title;
    $task->body = $request->body;
    $task->save();

    //登録したらindexを再読み込み
    return redirect()->route('tasks.index');
    }
    
}
