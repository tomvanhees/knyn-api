<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Tenancy\Facades\Tenancy;

class GetTenantController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        $tenant = Tenancy::getTenant();
        return response()->json(['tenant' => $tenant,200]);
    }
}
