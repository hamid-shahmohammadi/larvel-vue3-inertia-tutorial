<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return inertia('Users',[
            'time'=>now()->toTimeString(),
            'users'=>User::all()->map(fn($user)=>[
                
                'name'=>$user->name,
            ]),
        ]);
    }
}
