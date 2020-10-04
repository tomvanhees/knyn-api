<?php

namespace App\Providers;


use App\Listeners\ConfigureMigrationsListener;
use App\Listeners\ConfigureRoutesListener;
use App\Listeners\ConfigureSeedsListener;
use App\Listeners\ConfigureTenantConnectionListener;
use App\Listeners\ConfigureTenantDatabaseListener;
use App\Listeners\ConfigureTenantModelsListener;

use App\Listeners\ResolveTenantConnectionListener;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Tenancy\Affects\Models\Events\ConfigureModels;
use Tenancy\Affects\Routes\Events\ConfigureRoutes;
use Tenancy\Hooks\Database\Events\Drivers\Configuring as ConfigureTenantDatabaseEvent;
use Tenancy\Affects\Connections\Events\Resolving as ResolveTenantConnectionEvent;
use Tenancy\Affects\Connections\Events\Drivers\Configuring as ConfigureTenantConnectionEvent;
use Tenancy\Hooks\Migration\Events\ConfigureMigrations;
use Tenancy\Hooks\Migration\Events\ConfigureSeeds;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ConfigureTenantDatabaseEvent::class => [
            ConfigureTenantDatabaseListener::class
        ],
        ResolveTenantConnectionEvent::class => [
            ResolveTenantConnectionListener::class
        ],
        ConfigureTenantConnectionEvent::class => [
            ConfigureTenantConnectionListener::class
        ],
        ConfigureMigrations::class => [
            ConfigureMigrationsListener::class
        ],
        ConfigureModels::class => [
            ConfigureTenantModelsListener::class
        ],
        ConfigureSeeds::class => [
            ConfigureSeedsListener::class
        ],
        ConfigureRoutes::class => [
            ConfigureRoutesListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
