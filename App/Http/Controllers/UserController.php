<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'deathnote', 'name' => 'Light Yagami', 'email' => 'changetheworld@gmail.com'],
            ['username' => 'itsl', 'name' => 'L Lawliet', 'email' => 'savetheworld@gmail.com']
        ];

        return view('user.index', compact('users'));
    }
}