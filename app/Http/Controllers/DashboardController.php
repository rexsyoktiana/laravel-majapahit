<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'profile'  =>  Profile::with('user')->get(),
        ];
        return view('dashboard', $data);
    }
}
