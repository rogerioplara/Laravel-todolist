<x-layout page="Login">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar tarefa</h1>

        <form method="POST" action="{{ route('task.create_action') }}">
            @csrf

            <x-form.text_input name="title" label="Título da tarefa" required="required"
                placeholder="Digite o título da tarefa" />

            <x-form.text_input name="due_date" required="required" type="datetime-local" label="Data de realização" />

            <x-form.select_input name="category_id" label="Categoria" placeholder="">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Digite a descrição da tarefa" required
                label="Descrição da tarefa" />

            <x-form.form_btn resetTxt="Resetar" submitTxt="Criar Tarefa" />

        </form>

    </section>

</x-layout>
