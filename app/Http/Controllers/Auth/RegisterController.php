<?php

namespace App\Http\Controllers\Auth;

use App\Events\RegisterTenantAdminEvent;
use App\Events\RegisterTenantEvent;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Response;
use App\Jobs\GenerateAppTokenQR;
use Tenancy\Facades\Tenancy;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new RegisterTenantEvent($request->all()));
        event(new RegisterTenantAdminEvent($request->all()));


//        $this->guard()->login($user);

//        if ($response = $this->registered($request,$user)) {
//            return $response;
//        }
    }

    /**
     * The user has been registered.
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        $adminToken = $user->createToken("admin")->plainTextToken;
        $appToken = $user->createToken('app')->plainTextToken;
//        $user->createToken('client');

        GenerateAppTokenQR::dispatch($user, $appToken);


        return $adminToken;
    }

}
