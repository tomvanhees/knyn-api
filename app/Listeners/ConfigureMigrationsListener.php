<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Tenancy\Hooks\Migration\Events\ConfigureMigrations;

class ConfigureMigrationsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ConfigureMigrations $event
     * @return void
     */
    public function handle(ConfigureMigrations $event)
    {
        $event->path(database_path('tenant/migrations'));

    }
}
