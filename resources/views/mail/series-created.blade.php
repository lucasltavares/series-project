@component('mail::message')
 # {{ $nomeSerie }} criada
 A série {{ $nomeSerie }} com {{$qtdTemporadas}} temporadas foi criada com sucesso e {{ $episodiosPorTemporada }} episodios. Acesse o site para ver a serie {{ $nomeSerie }}.
 acesse aqui:

    @component('mail::button', ['url' => route('seasons.index', $IdSerie)])
        Ver series
    @endcomponent
@endcomponent
