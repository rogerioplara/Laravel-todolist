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

            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value="">Selecione a categoria</option>
                </select>
            </div>
            <div class="inputArea">
                <label for="description">
                    Descrição da tarefa
                </label>
                <textarea placeholder="Digite uma descrição para a tarefa"></textarea>
            </div>

            <div class="inputArea">
                <button type="submit" class="btn btn-primary">Criar tarefa</button>
            </div>

        </form>

    </section>

</x-layout>
