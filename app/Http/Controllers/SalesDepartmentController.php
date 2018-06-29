<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesDepartmentController extends Controller
{
    public function dashboard() {
        return view('sales.dashboard');
    }
}
