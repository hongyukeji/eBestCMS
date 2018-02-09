<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function index()
    {
        return view('tools.index');
    }

    public function toggleCase()
    {
        return view('tools.toggle_case');
    }
}
