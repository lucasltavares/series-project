<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Season;
use App\Models\Series;
use App\Models\Episode;
use App\Models\User;
use App\Mail\SeriesCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Repositories\SeriesRepository;
use App\Http\Requests\SeriesFormRequest;
use App\Http\Middleware\Authenticator;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        $this->middleware(Authenticator::class)->except('index');
    }
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = $this->repository->add($request);

        $users = User::all();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $schedule = now()->addSeconds(5);

        foreach ($users as $user) {
            $email = new SeriesCreated(
=======
        foreach ($users as $user) {
            Mail::to($user)->send(new SeriesCreated(
>>>>>>> 9d57ce86bcf99c6616e734e676b27eb30de89eb3
=======
        foreach ($users as $user) {
            Mail::to($user)->send(new SeriesCreated(
>>>>>>> origin/main
=======
        foreach ($users as $user) {
            Mail::to($user)->send(new SeriesCreated(
>>>>>>> origin/main
=======
        foreach ($users as $user) {
            Mail::to($user)->send(new SeriesCreated(
>>>>>>> origin/main
                $user->email,
                $serie->nome,
                $serie->id,
                $request->seasonsQty,
                $request->episodesPerSeason
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            );

            Mail::to($user)->later($schedule, $email);
=======
            ));
>>>>>>> 9d57ce86bcf99c6616e734e676b27eb30de89eb3
=======
            ));
>>>>>>> origin/main
=======
            ));
>>>>>>> origin/main
=======
            ));
>>>>>>> origin/main
        }



        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
