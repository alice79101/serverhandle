<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
//        return \request()->all();
        $attributes = request()->validate([
           'name' => 'required|max:255|min:3',
           'email' => 'required|email|min:5|max:255|unique:users,email',
//           'email' => ['required', 'min:3', 'max:255', Rule::unique('users', 'email')->ignore()],
           'password' => 'required|max:255|min:6'
        ]);

//        $attributes['password'] = bcrypt($attributes['password']); // 密碼 hash
        $user = User::create($attributes);
        auth()->login($user);


//        session()->flash('success', 'Your account has been created.');
//        return redirect('/');
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
