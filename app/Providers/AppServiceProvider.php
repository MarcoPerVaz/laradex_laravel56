<?php

namespace laradex\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* 
            | ---------------------------------------------------------------------------------
            | *Opción 1: Agregar un tamaño por defecto a la cadena (191)
            | *No olvidar importar use Illuminate\Support\Facades\Schema;
            | *De ser necesario tendrán que borrarse las tablas de la base de datos manualmente
            | ---------------------------------------------------------------------------------
        */
        Schema::defaultStringLength(191);
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
