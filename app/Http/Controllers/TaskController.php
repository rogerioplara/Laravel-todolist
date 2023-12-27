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
        $id = $request->id;
        $task = Task::find($id);

        // se a task com o id passado não existir, retorna para a home
        if (!$task) {
            return redirect(route('home'));
        }

        $data['task'] = $task;
        $categories = Category::all();

        $data['categories'] = $categories;


        return view('tasks.edit', $data);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $task = Task::find($id);
        if ($task) {
            $task->delete();
        }
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

    public function edit_action(Request $request)
    {
        $request_data = $request->only('title', 'due_date', 'category_id', 'description');

        // passagem do checkbox, do contrário quando é false não é passado nada
        $request_data['is_done'] = $request->is_done ? true : false;


        $task = Task::find($request->id);
        if (!$task) {
            return redirect(route('home'));
        }
        $task->update($request_data);
        $task->save();
        return redirect(route('home'));
    }
}
