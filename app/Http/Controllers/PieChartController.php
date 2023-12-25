<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PieChartModel;

class PieChartController extends Controller
{
    
    public function index()
    {

        $data = \App\Models\PieChartModel::all();
        $labels = $data->pluck('time_pie')->toArray();
        $data_pie = $data->pluck('data_pie')->toArray();

        return view('piechart', ['data' => $data, 'labels' => $labels, 'data_pie' => $data_pie]);
    }
}