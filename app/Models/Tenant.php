<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant as TenantContract;
use Tenancy\Identification\Drivers\Http\Contracts\IdentifiesByHttp;
use Tenancy\Tenant\Events;

class Tenant extends Model implements TenantContract, IdentifiesByHttp
{
    use AllowsTenantIdentification, HasFactory;

    protected $fillable = ['path'];

    protected $dispatchesEvents = [
        'created' => Events\Created::class,
        'updated' => Events\Updated::class,
        'deleted' => Events\Deleted::class,
    ];

    public function getTenantName(): string
    {
        return $this->attributes["path"];
    }

    /**
     * The actual value of the key for the tenant Model.
     *
     * @return string|int
     */
    public function getTenantKey()
    {
        return "knyn_" . $this->getTenantName();
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
