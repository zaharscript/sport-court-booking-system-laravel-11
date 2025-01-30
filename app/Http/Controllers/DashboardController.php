<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class DashboardController extends Controller
{
    //display the dashboard
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            return view('dashboard.admin');
        }
        return view('dashboard.user');
    }
}
