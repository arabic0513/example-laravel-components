<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EimzoController extends Controller
{
    public function view() : View
    {
        return view('eimzologin');
    }
}
