<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show($id){
        $user = User::find($id);

        if (!$user){
            abort(404);
        }

        return view('users.show', compact('user'));
    }
}
