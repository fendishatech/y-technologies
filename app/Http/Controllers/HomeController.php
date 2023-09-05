<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        $customers = Customer::paginate(10);

        return view('home.index')->with([
            'users' => $users,
            'customers' => $customers
        ]);
    }
}
