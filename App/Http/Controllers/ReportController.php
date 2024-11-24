<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = [
            ['item_code' => '666', 'item_name' => 'Book', 'item_category' => 'Media', 'date' => '2024-11-24', 'total' => 1],
            ['item_code' => '777', 'item_name' => 'Laptop', 'item_category' => 'Electronic', 'date' => '2024-11-25', 'total' => 5]
        ];

        return view('report.index', compact('reports'));
    }
}