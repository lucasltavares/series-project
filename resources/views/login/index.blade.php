<x-layout title="Login">
    <form method="post" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Entrar</button>

        <a href="{{ route('users.create') }}" class="btn btn-secondary mt-4">Registrar</a>
    </form>
</x-layout>
