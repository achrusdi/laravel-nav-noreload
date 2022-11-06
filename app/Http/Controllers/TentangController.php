<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function tentang(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return view('web.tentang', ['methods' => $method]);
        }
        if ($request->isMethod('get')) {
            return view('web.tentang', ['methods' => $method]);
        }
    }
}
