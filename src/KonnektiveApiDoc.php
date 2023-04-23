<?php

namespace Konnektive\ApiDoc;

use Illuminate\Support\ServiceProvider;

class KonnektiveApiDoc extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/web.php');
    }
}