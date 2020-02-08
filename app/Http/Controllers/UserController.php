<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    public function show($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('admin.users.show', ['user' => $user]);
    }
    public function create()
    {

    }
    public function store()
    {

    }
    public function update()
    {

    }
}
