<x-layout title="Episódios" :mensagemSucesso="$mensagemSucesso">
    <form method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio {{ $episode->number }}

                    <input type="checkbox"
                           class="form-check-input"
                           name="episodes[]"
                           value="{{ $episode->id }}"
                           @if ($episode->watched) checked @endif
                           >
                </li>
            @endforeach
        </ul>

        <button type="submit" class="btn btn-primary mt-3 mb-3">Salvar</button>
    </form>
</x-layout>
