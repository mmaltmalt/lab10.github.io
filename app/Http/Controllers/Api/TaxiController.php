<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxiController extends Controller
{
    /**
     * Display a listing of the resource.

     */

    public function km($km)
    {
        return [
            'success' => true,
            'data' => [
              'km' => $km,
              'm' => 0
            ]
        ];
    }

    public function km_minute($km,$m)
    {
        return [
            'success' => true,
            'data' => [
              'km' => $km,
              'm' => $m
            ]
        ];
    }

}
