<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
}
