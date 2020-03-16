<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countires_data = json_decode(file_get_contents('https://corona.lmao.ninja/countries'));
        $all_count = json_decode(file_get_contents('https://corona.lmao.ninja/all'));
        return view('index', compact('countires_data', 'all_count'));
    }
}
