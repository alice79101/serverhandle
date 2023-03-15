<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
//        return \request()->all();
        User::create(request()->validate([
           'name' => 'required|max:255|min:3',
           'email' => 'required|email|max:255|min:5',
           'password' => 'required|max:255|min:6'
        ]));
//        dd('success');
        return redirect('/');
    }
}
