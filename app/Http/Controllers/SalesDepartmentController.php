<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;

class SalesDepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
        $date = Carbon::now();
        $user = auth()->user()->id;
//        $user_object = User::find($user);

        $calls = DB::table('calls')
            ->leftJoin('customers', 'calls.company', '=', 'customers.customer_id')
            ->leftJoin('contacts', 'calls.contact', '=', 'contacts.id')
            ->leftJoin('reasons', 'calls.reason', '=', 'reasons.id')
            ->leftJoin('users', 'calls.user_id', '=', 'users.id')
            ->get();
        $data = array(
            'date' => $date,
            'calls' => $calls
        );

        return view('sales.dashboard')->with($data);
    }
}
