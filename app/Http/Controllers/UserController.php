<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'name'=>$user->name,
            'can'=>[
                'edit'=>Auth::user()->can('update',$user)
            ]
        ]);


        return inertia('Users/Index',[
            'time'=>now()->toTimeString(),
            'users'=>$users,
            'filters'=>request()->only('search'),
            'can'=>[
                'createuser'=>Auth::user()->can('create',User::class)
            ]
        ]);
    }

    public function create()
    {
        return inertia('Users/Create');
    }

    public function store()
    {

        $attr=request()->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'password'=>'required',
        ]);

        User::create($attr);

        return redirect('/users');
    }
}
