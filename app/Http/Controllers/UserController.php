<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;

        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $users = User::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $users = User::where('name', 'like', '%'. $keyword .'%')
                                ->orWhere('email', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
        }

        $users->withPath($path);

        return view('admin.users.index', compact('users', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate(
            [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'regex:/[0-9]{10}/',
            'password' => 'min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8',
            ],
            [
                'phone.regex' => 'The phone field requires minimum 10 numbers',
            ],
    );

        $user = $request->all();
        $u = new User($user);
        $u->name = $request->name;
        $u->email = $request->email;
        $u->phone = $request->phone;
        $u->password = bcrypt(request('password'));

        $u->save();

        return redirect()->route('users.index');
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
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function updateInfo(User $user, Request $request, $id)
    {
        $user = User::find($id);
        $request->validate(
            [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'regex:/[0-9]{10}/',
            ],
            [
                'phone.regex' => 'The phone field requires minimum 10 numbers',
            ],
    );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('users.index');
    }

    public function updatePassword(User $user, Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $password = $user->password;
        if (!$request->password) {
            $user->password = $password;
        } else {
            $user->password = bcrypt(request('password'));
        }
        $user->save();
        return redirect()->route('users.index');
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
