<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.dashboards.index');
    }

    public function library()
    {
        return view('pages.library.index');
    }

    public function charts()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.library.charts');
    }
}
