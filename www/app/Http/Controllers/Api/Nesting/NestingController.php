<?php

namespace App\Http\Controllers\Api\Nesting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NestingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function __invoke(Request $request, int $i)
    {
        $array = [];
        return $this->addToArray($array, $i);
    }

    private function addToArray(array $array, int $i)
    {
        $label = 'level_';
        if ($i >= 1 ){
            $array[$label.$i] = $this->addToArray($array,--$i);
            return $array;
        }else return $array[$label.$i]= null;
    }

}
