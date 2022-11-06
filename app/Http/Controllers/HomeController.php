<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web..templates.index', ['method' => 'GET']);
    }

    public function home(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return view('web.home', ['methods' => $method]);
        }
        if ($request->isMethod('get')) {
            return view('web.home', ['methods' => $method]);
        }
    }
}
