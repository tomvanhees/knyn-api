<?php

namespace App\Providers;

use App\Models\Tenant;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;
use Tenancy\Identification\Contracts\ResolvesTenants;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Sanctum::ignoreMigrations();
        $this->app->resolving(ResolvesTenants::class, function (ResolvesTenants $resolver) {
            $resolver->addModel(Tenant::class);
            return $resolver;
        });


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Sanctum::usePersonalAccessTokenModel(\App\Classes\PersonalAccessToken::class);
        JsonResource::withoutWrapping();
    }
}
