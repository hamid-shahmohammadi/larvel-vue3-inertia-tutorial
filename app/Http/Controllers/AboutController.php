<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        return Inertia::render('About',[
            'name'=>'hamid',
            'framework'=>[
                'laravel','vue','inertia'
            ]
        ]);
    }
    public function profile()
    {
        return Inertia::render('Profile');
    }
}
