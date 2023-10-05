<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $employees = User::count();
        $orders = Order::where('status', 'active')->orderByDesc('created_at')->with('customer')->paginate(10);

        $completed_orders = Order::where('status', 'completed')->count();
        $active_orders = Order::where('status', 'active')->count();

        return view('home.index')->with([
            'orders' => $orders,
            'active_orders' => $active_orders,
            'completed_orders' => $completed_orders,
            'employees' => $employees
        ]);
    }
}
