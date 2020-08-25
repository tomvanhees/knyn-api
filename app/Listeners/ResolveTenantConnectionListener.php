<?php

namespace App\Listeners;

use Tenancy\Affects\Connections\Contracts\ProvidesConfiguration;
use Tenancy\Affects\Connections\Events\Resolving;
use Tenancy\Identification\Contracts\Tenant;
use Tenancy\Affects\Connections\Events\Drivers\Configuring;

class ResolveTenantConnectionListener implements ProvidesConfiguration
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
     * @param  Resolving  $event
     * @return void
     */
    public function handle(Resolving $event): ResolveTenantConnectionListener
    {
        return $this;
    }

    public function configure(Tenant $tenant): array
    {

        $config = [];

        event(new Configuring($tenant,$config,$this));

       return $config;
    }
}
