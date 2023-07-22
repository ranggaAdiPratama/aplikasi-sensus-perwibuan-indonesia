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
        $data = [
            'title' => 'Dashboard'
        ];

        return view('admin.dashboard', $data);
    }
}
