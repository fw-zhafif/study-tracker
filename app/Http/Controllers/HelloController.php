<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() 
    {
        $name = 'halaman hello';
        $semester = 1;

        return view('hello', [
            'name' => $name,
            'semester' => $semester
        ]);
    }
}
