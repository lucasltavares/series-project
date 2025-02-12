<x-layout title="Novo usuário">
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row mb-3">

        <div class="col-4">
                <label for="nome" class="form-label">Name:</label>
                <input type="text"
                       autofocus
                       id="name"
                       name="name"
                       class="form-control"
                       value="{{ old('name') }}">
            </div>

            <div class="col-4">
                <label for="nome" class="form-label">Email:</label>
                <input type="email"
                       id="email"
                       name="email"
                       class="form-control"
                       value="{{ old('email') }}">
            </div>

            <div class="col-2">
                <label for="password" class="form-label">Senha:</label>
                <input type="password"
                       id="password"
                       name="password"
                       class="form-control"
                       value="{{ old('password') }}">
            </div>

            <div class="col-2">
                <label for="password_confirmatio" class="form-label">Confirme a senha:</label>
                <input type="password"
                       id="password_confirmation"
                       name="password_confirmation"
                       class="form-control"
                       value="{{ old('password_confirmation') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</x-layout>
