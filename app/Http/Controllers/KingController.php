<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KingController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }
}
