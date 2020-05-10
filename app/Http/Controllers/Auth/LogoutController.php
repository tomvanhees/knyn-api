<?php


namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LogoutController
{
    public function logout()
    {
        $user = User::find(Auth::id());

        try {
            $user->tokens()->where("name","admin")->delete();
        } catch (\Exception $exception) {
            Log::alert($exception->getMessage());
        }

        return response()->json([],200);
    }
}