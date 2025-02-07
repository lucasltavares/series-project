<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    // Faz a mesma coisa que o register() mas permite adicionar vários bindings no mesmo array, ex (todos os repositories no mesmo array em um só arquivo).
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\SeriesRepository::class, \App\Repositories\EloquentSeriesRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
