<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = ['email' => Auth::user()->email, 'id' => Auth::id(), 'login' => Auth::user()->name];
        return \View::make('user.index')->with('user', $user);
    }
}
