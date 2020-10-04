<?php

namespace App\Http\Controllers\Auth;

use App\Events\RegisterTenantAdminEvent;
use App\Events\RegisterTenantEvent;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tenancy\Facades\Tenancy;

class RegisterTenantController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'tenant' => ['required', 'string', 'max:199'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $tenant = Tenant::create([
            'path' => $request->tenant
        ]);

        Tenancy::setTenant($tenant);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);


        $response = new JsonResponse([
            'redirect_path' => 'https://' . $request->tenant . '.kapsalon-api.test/admin'
        ], 200);

        return response()->json($response, 200);
    }
}
