<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SosmedController extends Controller
{
    public function sosmed(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return view('web.sosmed', ['methods' => $method]);
        }
        if ($request->isMethod('get')) {
            return view('web.sosmed', ['methods' => $method]);
        }
    }
}
