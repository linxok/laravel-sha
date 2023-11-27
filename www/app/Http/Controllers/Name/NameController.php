<?php

namespace App\Http\Controllers\Name;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function __invoke(Request $request, string $lastName,string $firstName): array
    {
        $user['user']['first_name'] = $firstName;
        $user['user']['last_name'] = $lastName;
        return $user;
    }
}
