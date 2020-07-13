<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:writer');
    }

    public function writerDashboard()
    {
        return view('writer');
    }
}
