<?php

namespace App\Listeners;

use App\Models\Product\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Laravel\Sanctum\PersonalAccessToken;
use Tenancy\Affects\Models\Events\ConfigureModels;
use Tenancy\Facades\Tenancy;

class ConfigureTenantModelsListener
{
    protected $model = Product::class;

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
        if ($event->event->tenant) {
            $event->setConnection($this->model, Tenancy::getTenantConnectionName());
        }
    }
}
