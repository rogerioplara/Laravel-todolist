<x-layout page="Login">

    <section id="task_section">
        <h1>Login</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('user.login_action') }}">
            @csrf

            <x-form.text_input name="email" required="required" label="E-mail" placeholder="Digite seu e-mail"
                type="email" />

            <x-form.text_input name="password" required="required" label="Senha" placeholder="Digite sua senha"
                type="password" />


            <x-form.form_btn resetTxt="Limpar" submitTxt="Entrar" />

        </form>

    </section>

</x-layout>
