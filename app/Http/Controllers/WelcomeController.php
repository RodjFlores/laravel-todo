<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $name = 'steve';
        $tasks = [
            'one task',
            'two task',
            'three task',
        ];
    
        return view('welcome', compact('tasks'),compact('name'));
    }
}
