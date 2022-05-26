<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate()->through(fn($user)=>[
            'name'=>$user->name
        ]);

        return inertia('Users',[
            'time'=>now()->toTimeString(),
            'users'=>$users,
        ]);
    }
}
