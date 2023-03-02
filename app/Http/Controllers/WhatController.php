<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatController extends Controller
{
    public function getIp(Request $request)
    {
        print_r($request->ip());
        echo "<pre>";

    }
}
