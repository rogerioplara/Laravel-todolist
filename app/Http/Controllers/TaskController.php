<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function edit(Request $request)
    {
        return view('tasks.edit');
    }
    public function delete(Request $request)
    {
        //deleta e redireciona de volta para a home
        return redirect(route('home'));
    }

    public function create_action(Request $request)
    {
        $task = $request->only(['title', 'category_id', 'description', 'due_date']);
        // completando os dados para gravar no banco (gambiarra)
        $task['user_id'] = 1;
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }
}
