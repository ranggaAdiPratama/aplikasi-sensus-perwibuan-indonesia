<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // NOTE GET /
    /* -------------------------------------------------------------------------- */
    /*                                 LAMAN LOGIN                                */
    /* -------------------------------------------------------------------------- */
    public function loginView()
    {
        return view('auth');
    }
}
