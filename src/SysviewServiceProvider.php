<?php

namespace Viewer\Sysview;

use Illuminate\Support\ServiceProvider;
use Viewer\Sysview\Commands\MakeViewCommand;

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
    protected $commands=[
       MakeViewCommand::class
    ];
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands($this->commands);
    }
}
