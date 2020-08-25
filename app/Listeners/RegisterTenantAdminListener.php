<?php

namespace App\Listeners;

use App\Events\RegisterTenantAdminEvent;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Tenancy\Facades\Tenancy;

class RegisterTenantAdminListener
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
     * @param RegisterTenantAdminEvent $event
     * @return void
     */
    public function handle(RegisterTenantAdminEvent $event)
    {
        $tenant = (new Tenant())->tenantIdentificationByString($event->tenant);
        Tenancy::setTenant($tenant);

        $user = new User();
        $user->name = $event->name;
        $user->email = $event->email;
        $user->password = $event->password;
        $user->save();
    }
}
