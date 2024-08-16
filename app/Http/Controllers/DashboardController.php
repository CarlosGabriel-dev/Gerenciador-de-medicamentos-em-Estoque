<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Mostra o dashboard.
     */
    public function index()
    {
        $data = [
            'total_medications' => 298,
            'total_groups' => 24,
            'total_users' => 4,
            'total_sales' => 5288,
            'total_medications_sold' => 70856,
            'total_medications_in' => 845,
            'medications_out_of_stock' => 1
        ];

        return view('dashboard.index', compact('data'));
    }
}
