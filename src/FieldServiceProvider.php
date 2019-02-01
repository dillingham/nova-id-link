<?php

namespace Dillingham\NovaIdLink;

use Laravel\Nova\Nova;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ID::macro('linked', function() {

            $this->useComponent('nova-id-link');

            return $this;
        });

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-id-link', __DIR__.'/../dist/js/field.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
