<x-layout page="Login">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar tarefa</h1>

        <form action="">
            <div class="inputArea">
                <label for="title">
                    Título da task
                </label>
                <input name="title" required placeholder="Digite o título da tarefa" />
            </div>
            <div class="inputArea">
                <label for="date">
                    Data de Realização
                </label>
                <input type="date" name="due_date" required />
            </div>
            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select name="category" required>
                    <option selected disabled value="">Selecione a categoria</option>
                </select>
            </div>
            <div class="inputArea">
                <label for="description">
                    Descrição da tarefa
                </label>
                <textarea placeholder="Digite uma descrição para a tarefa"></textarea>
            </div>
        </form>

    </section>

</x-layout>
