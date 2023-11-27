<?php

namespace App\Http\Controllers\Api\Fibonacci;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function __invoke(Request $request, int $index)
    {
        $first_num = 0;
        $second_num = 1;
        $n = $index; // Number of elements you want in the series

        $fibonacci = 0;

        for($i = 2; $i < $n; $i++) {
            $next_num = $first_num + $second_num;
            $fibonacci =  $next_num;
            $first_num = $second_num;
            $second_num = $next_num;
        }

        $response = [
            'number' => $fibonacci,
            'index' => $index
         ];
        return $response;


    }
}
