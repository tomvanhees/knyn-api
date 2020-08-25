<?php

namespace App\Http\Controllers\Auth;

use App\Events\RegisterTenantAdminEvent;
use App\Events\RegisterTenantEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255'],
//            'password' => ['required', 'string'],
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

        event(new RegisterTenantEvent($request->all()));
        event(new RegisterTenantAdminEvent($request->all()));


        return response()->json(["redirect_path" => "https://".$request->tenant.".kapsalon-api.test/admin"], 200);
    }
}
