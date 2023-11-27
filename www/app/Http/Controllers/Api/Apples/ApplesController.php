<?php

namespace App\Http\Controllers\Api\Apples;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function __invoke(Request $request, string $pattern, int $index)
    {

        echo $position = (($index % strlen($pattern)-1) );
        $color = $pattern[$position];

        return  [
            'color' => $color,
            'index' => $index
        ];
    }
}
