<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // recebe a data da url - se não houver pega a data atual
        if ($request->date) {
            $filteredDate = $request->date;
        } else {
            $filteredDate = date('Y-m-d');
        }

        // carbon é uma biblioteca de datas utilizada no laravel
        $carbonDate = Carbon::createFromDate($filteredDate);


        // controle da data pelos botões 
        $data['date_as_string'] = $carbonDate->translatedFormat('d') . ' ' . ucfirst($carbonDate->translatedFormat('M'));

        $data['date_prev_button'] = $carbonDate->addDay(-1)->format('Y-m-d');
        // workaround pois quando passa pelo addDay(-1) ele subtrai, independente da soma
        $data['date_next_button'] = $carbonDate->addDay(2)->format('Y-m-d');


        // seleciona todas as tasks que tem a data selecionada
        $data['tasks'] = Task::whereDate('due_date', $filteredDate)->get();
        // autenticação do usuário
        $data['authUser'] = Auth::user();
        // Contagem das tasks para adicionar ao contador
        $data['tasks_count'] = $data['tasks']->count();
        // contagem das tasks que faltam ser feitas
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();
        return view('home', $data);
    }
}
