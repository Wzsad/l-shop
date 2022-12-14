<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegularController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([

        ]);
        dd($request->input('id'));
    }
}
