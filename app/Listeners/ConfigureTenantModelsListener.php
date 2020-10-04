<?php

namespace App\Listeners;

use Laravel\Sanctum\PersonalAccessToken;
use Tenancy\Affects\Models\Events\ConfigureModels;
use Tenancy\Facades\Tenancy;

class ConfigureTenantModelsListener
{
    /**
     * @var string
     */
    protected $model =  PersonalAccessToken::class;

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
     * @param ConfigureModels $event
     * @return void
     */
    public function handle(ConfigureModels $event)
    {
        $tenant = Tenancy::getTenant();

        if ($event->event->tenant) {
            $event->setConnection($this->model, $tenant->getTenantKey());

            $event->getConnectionName($this->model,$tenant->getTenantKey());
        }
    }
}
