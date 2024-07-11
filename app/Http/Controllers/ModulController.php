<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        return view('modul.index');
    }
}
