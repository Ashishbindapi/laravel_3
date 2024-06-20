<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $name = "Ashish Bindra Ji";
        $welcome = 'Welcome :';
        return view('templates.demo', compact('name', 'welcome'));
    }

    public function view()
    {
        $name = "Ashish Bindra Ji";
        $welcome = 'Welcome :';
        return view('templates.demo', compact('name', 'welcome'));
    }
}
