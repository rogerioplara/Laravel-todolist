<x-layout page="Login">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar tarefa</h1>

        <form action="">

            <x-form.text_input name="title" label="Título da tarefa" required="required"
                placeholder="Digite o título da tarefa" />

            <x-form.text_input name="due_date" required="required" type="date" label="Data de realização" />

            <x-form.select_input name="category" label="Categoria" placeholder="">
                <option>Valor qualquer</option>
            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Digite a descrição da tarefa"
                label="Descrição da tarefa" />

            <x-form.form_btn resetTxt="Resetar" submitTxt="Criar Tarefa" />

        </form>

    </section>

</x-layout>
