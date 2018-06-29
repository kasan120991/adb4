<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SalesDepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
        $date = Carbon::now();
        return view('sales.dashboard')->with('date', $date);
    }
}
