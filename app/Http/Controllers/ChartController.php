<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(){
        return view('pages.dashboard.live-chart.view');
    }
}
