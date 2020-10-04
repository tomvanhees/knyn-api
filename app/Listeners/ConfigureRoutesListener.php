<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Tenancy\Affects\Routes\Events\ConfigureRoutes;

class ConfigureRoutesListener
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
     * @param ConfigureRoutes $event
     * @return void
     */
    public function handle(ConfigureRoutes $event)
    {
        if ($event->event->tenant) {
            $this->addTenantRoutes($event);
            $this->addAPIRoutes($event);
        }
    }

    /**
     * @param ConfigureRoutes $event
     */
    private function addTenantRoutes(ConfigureRoutes $event): void
    {
        $event
            ->flush()
            ->fromFile(
                ['middleware' => ['web']],
                base_path('/routes/tenant.php')
            );
    }

    /**
     * @param ConfigureRoutes $event
     */
    private function addAPIRoutes(ConfigureRoutes $event): void
    {
        $event->fromFile(
            ['prefix' => 'api'],
            base_path('routes/api.php')
        );
    }
}
