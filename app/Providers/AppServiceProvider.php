<?php

namespace App\Providers;

use App\Models\Gift;
use App\Observers\GiftObserver;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gift::observe(GiftObserver::class);

        Relation::morphMap([
            'user' => \App\Models\User::class,
            'gift' => \App\Models\Gift::class,
        ]);
    }
}
