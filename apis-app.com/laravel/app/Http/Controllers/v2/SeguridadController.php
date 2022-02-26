<?php

namespace App\Http\Controllers\v2;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class SeguridadController extends BaseController
{
    function login(Request $request)
    {
        $response = new \stdClass();

        $user = User::where("email","=",$request->email)
        ->first();

        if($user)
        {
            $response->success = true;
            $response->data = new \stdClass();

            $token = $user->createToken('Laravel Password Grant Client')->accessToken;

            return $token;
            
            $response->data->access_token=$token;
            $response->data->token_type="Bearer";

            return response()->json($response,200);
       }
        else
        {
            $response->success = false;
            $response->errors = [];
            $response->errors[]="el ususuario o contraseña no existen";

            return response()->json($response,400);
        }
    }

    function save()
    {
        $user = new User();
        $user->name="test name";
        $user->email="text1@syslacsdev.com";
        $user->password="123";
        $user->email_verified_at="2022-02-26";
        $user->save();

    }
}
