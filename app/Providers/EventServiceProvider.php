<?php

namespace App\Providers;

use App\Events\RegisterTenantAdminEvent;
use App\Events\RegisterTenantEvent;
use App\Listeners\ConfigureMigrationsListener;
use App\Listeners\ConfigureTenantConnectionListener;
use App\Listeners\ConfigureTenantDatabaseListener;
use App\Listeners\RegisterTenantAdminListener;
use App\Listeners\RegisterTenantListener;
use App\Listeners\ResolveTenantConnectionListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use Tenancy\Hooks\Database\Events\Drivers\Configuring as ConfigureTenantDatabaseEvent;
use Tenancy\Affects\Connections\Events\Resolving as ResolveTenantConnectionEvent;
use Tenancy\Affects\Connections\Events\Drivers\Configuring as ConfigureTenantConnectionEvent;
use Tenancy\Hooks\Migration\Events\ConfigureMigrations;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        RegisterTenantEvent::class => [
            RegisterTenantListener::class
        ],
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
        RegisterTenantAdminEvent::class => [
            RegisterTenantAdminListener::class
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
