<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboards.index');
    }

    public function library()
    {
        return view('pages.library.index');
    }

    public function charts()
    {
        return view('pages.library.charts');
    }
}
