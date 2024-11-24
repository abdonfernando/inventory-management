<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = [
            ['code' => '666', 'name' => 'Book', 'category' => 'Media', 'price' => '50,000', 'stock' => 5],
            ['code' => '777', 'name' => 'Laptop', 'category' => 'Electronic', 'price' => '20,000,000', 'stock' => 7]
        ];

        return view('item.index', compact('items'));
    }
}