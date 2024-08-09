<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::orderBy('id', 'DESC')->with('department', 'designation')->get();

        return view('index', compact('users'));
    }
}
