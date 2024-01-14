<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    function index()
    {
        return view('Component.sidebar');
    }
}
