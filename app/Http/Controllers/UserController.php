<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request) {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //take all parameters into 'user' array
        $request->validate([
            'name' => 'bail|required|min:5|max:20',
            'email' => 'bail|required|email|unique:users|max:40',
            'password' => 'bail|required|password|min:10|max:40',
            'role' => 'required'
        ]);
        $user = $request->all();

        // Auth::table('users')->insert([
        //     'name'=>$user['name'],
        //     'email'=>$user['email'],
        //     'password'=>$user['password'],
        //     'role'=>intval($user['role'])
        // ]);

        // Eloquent
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        //$user->save();
        //return redirect()->route('users.index');
        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id) {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user, $id) {
        // $users = $this->model->getAll();
        // $user = $this->model->getById($id);
        // return view('admin.users.edit', compact('users', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function update(User $user, Request $request, $id) {
        $user = $request->all();
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user->save();

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function destroy($id) {
        // $this->model->delete($id);
        $user = User::find($id);
        $user->delete();
        return redirect(route('users.index'));
    }
}
