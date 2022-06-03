<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::query()
        ->when(request('search'),function($query,$search){
            $query->where('name','like','%'.$search.'%');
        })
        ->paginate()
        ->withQueryString()
        ->through(fn($user)=>[
            'name'=>$user->name
        ]);


        return inertia('Users',[
            'time'=>now()->toTimeString(),
            'users'=>$users,
            'filters'=>request()->only('search')
        ]);
    }
}
