<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string[]
     */
    public function __invoke(Request $request, string $login, string $password)
    {
        return  [
            'login' => $login,
            'password' => $password,

        ];
    }
}
