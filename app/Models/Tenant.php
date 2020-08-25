<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant as TenantContract;
use Tenancy\Identification\Drivers\Http\Contracts\IdentifiesByHttp;
use Tenancy\Tenant\Events;

class Tenant extends Model implements TenantContract
{
    use AllowsTenantIdentification;


    protected $dispatchesEvents = [
        'created' => Events\Created::class,
        'updated' => Events\Updated::class,
        'deleted' => Events\Deleted::class,
    ];

    /**
     * The actual value of the key for the tenant Model.
     *
     * @return string|int
     */
    public function getTenantKey()
    {
        return $this->attributes["path"];
    }

    public function tenantIdentificationByHttp(Request $request): ?Tenant
    {
        list($subdomain) = explode('.', $request->getHost(), 2);

        return $this->query()->where("path", $subdomain)->first();
    }

    public function tenantIdentificationByString(string $subdomain): ?Tenant
    {
        return $this->query()->where("path", $subdomain)->first();
    }
}
