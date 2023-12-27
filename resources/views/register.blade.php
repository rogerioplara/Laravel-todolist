<x-layout page="Login">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('user.register_action') }}">
            @csrf

            <x-form.text_input name="name" label="Nome" required="required" placeholder="Digite seu nome" />

            <x-form.text_input name="email" required="required" label="E-mail" placeholder="Digite seu e-mail"
                type="email" />

            <x-form.text_input name="password" required="required" label="Senha" placeholder="Digite sua senha"
                type="password" />

            <x-form.text_input name="password_confirmation" required="required" label="Confirme sua Senha"
                placeholder="Confirme sua senha" type="password" />


            <x-form.form_btn resetTxt="Limpar" submitTxt="Registrar-se" />

        </form>

    </section>

</x-layout>
