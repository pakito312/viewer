<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SysviewServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__.'/app/Console/Commands/MakeViewCommand.php' => base_path('app/Console/wisdmlabs/viewer/Commands/MakeViewCommand.php'),
        ]);
    }
}
