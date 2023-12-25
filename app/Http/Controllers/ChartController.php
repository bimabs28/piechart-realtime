<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PieChartModel;

class ChartController extends Controller
{
      public function readdata(){
        $data = \App\Models\PieChartModel::orderBy('time_pie', 'DESC')->first();
        return response()->json($data);
    }
}