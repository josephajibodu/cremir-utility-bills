<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirtimeController extends Controller
{
    public function index()
    {
        return view('airtime');
    }
}
