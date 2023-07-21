<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    // NOTE GET /
    /* -------------------------------------------------------------------------- */
    /*                               LAMAN DASHBOARD                              */
    /* -------------------------------------------------------------------------- */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
