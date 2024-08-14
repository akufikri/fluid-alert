<?php

namespace akufikri\Fluidalert;

use Illuminate\Support\ServiceProvider;

class FluidAlertServiceProvider extends ServiceProvider
{
      public function boot()
      {
            $this->loadViewsFrom(__DIR__ . '/../resources/views', 'fluid-alert');
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            $this->publishes([
                  __DIR__ . '/../config/fluid-alert.php' => config_path('fluid-alert.php'),
                  __DIR__ . '/../resources/js' => public_path('vendor/fluid-alert/js'),
                  __DIR__ . '/../resources/views' => resource_path('views/vendor/fluid-alert'),
            ], 'fluid-alert');
      }

      public function register()
      {
            $this->mergeConfigFrom(__DIR__ . '/../config/fluid-alert.php', 'fluid-alert');
      }
}