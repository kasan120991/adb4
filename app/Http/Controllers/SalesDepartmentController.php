<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SalesDepartmentController extends Controller
{
    public function dashboard() {
        $date = Carbon::now();
        return view('sales.dashboard')->with('date', $date);
    }
}
