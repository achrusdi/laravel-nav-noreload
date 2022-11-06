<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function tutorial(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return view('web.tutorial', ['methods' => $method]);
        }
        if ($request->isMethod('get')) {
            return view('web.tutorial', ['methods' => $method]);
        }
    }
}
