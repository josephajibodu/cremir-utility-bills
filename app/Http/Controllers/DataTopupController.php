<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTopupController extends Controller
{
    public function index()
    {
        return view('data');
    }
}