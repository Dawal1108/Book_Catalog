<?php

namespace App\Providers;

use App\Repositories\Books\BookContract;
use App\Repositories\Books\BookEloquentRepository;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->bind(BookContract::class, BookEloquentRepository::class);
        //$this->app->bind('App\Repositories\Books\BookContract','App\Repositories\Books\BookEloquentRepository');
    }
}
