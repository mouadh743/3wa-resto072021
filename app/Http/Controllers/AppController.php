<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class AppController extends Controller
{
    public function welcome()
    {
        $message = "Welcome to 3W academy";
        return view('welcome', [
            'msg' => $message
        ]);
    }

    public function about()
    {
        return view('about', [
            'todos' => Todo::all()
        ]);
    }
}
