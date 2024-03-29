<?php

namespace App\Http\Controllers\API\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request) 
    {
        $http = new \GuzzleHttp\Client;

        try {
            $response = $http->post(config('services.passport.login_endpoint'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password,
                ]
            ]);
            return $response->getBody();
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() === 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }

            return response()->json('Something went wrong on the server.', $e->getCode());
        }
    }


    public function admin_login2(Request $request)
    {
        $login = $request->validate([
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if ( !Auth::guard('admin')->attempt( $login ) ) {
            return response(['message' => 'Invalid Login Credentials.']);
        }
        $accessTokens = Auth::admin()->createToken('authToken')->accessToken;

        return response(['user' => Auth::admin(), 'access_token' => $accessTokens]);
    }

}
