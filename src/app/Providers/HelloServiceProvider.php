<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    // public function register()
    // {
    //     //
    // }

    // /**
    //  * Bootstrap services.
    //  *
    //  * @return void
    //  */
    public function boot()
    {
        View::composer(
            'hello.index','App\Https\Composer\HelloComposer'
            
        );
    }
}
